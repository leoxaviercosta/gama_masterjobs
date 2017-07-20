<?php

namespace App\Http\Controllers;

use App\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{

    /**
     * @var Leads'
     */
    private $leads;

    public function __construct(Leads $leads) {
        $this->leads = $leads;
    }

    public function register(Request $request) {
        config(['app.timezone' => 'America/Sao_Paulo']);
        ini_set('xdebug.max_nesting_level', 500);

        $data = $request->all();
        $data['ipv4_address'] = $request->ip();
        $data['ip_location']  = $this->getLocationIP($request->ip());

        $lead = null;
        $lead = Leads::where('email', $data['email'])->first();
        if ($lead){
            return $this->getMessageLeadError($lead);
        } else {
            $this->leads->create($data);
            try {
                if (empty($data['stack'])){
                    return $this->getMessageSuccess($data);
                }else {
                    if ($this->html_email($data)){
                        return $this->getMessageSuccess($data);
                    }
                }
            } catch (\Exception $ex){
                return $this->getMessageSuccess($data);
            }    
        }        
    }

    public function getMessageSuccess($data){
        if (empty($data['stack'])){
              return response()->json(
                    ['message' => 'Obrigado '. ucwords($data['name']) .' por se cadastrar em nossa newsletter.<br/>Acompanhe nosso conteúdo e se mantenha sempre atualizado!']);
        } else {
            return response()->json(
                    ['message' => 'Parabéns '. ucwords($data['name']) .'! Seu cadastro foi realizado com sucesso! Quando abrirmos as inscrições oficiais para os programas, você será o primeiro (a) a saber!']);          
        }
    }

    public function getMessageLeadError($lead){
        if ($lead->stack){
            return response()->json(
                    ['message' => 'Olá '. ucwords($lead->name) .', você já está na lista de pré-inscritos! Fique atento que enviaremos novidades em seu email e logo você receberá noticias sobre as próximas edições do programa.']);
        } else {
            return response()->json(
                    ['message' => 'Olá '. ucwords($lead->name) .'! Você já está cadastrado para receber nossas notícias e novidades.']);          
        }
    }

    public function html_email($data) {
        Mail::send('emails.mail', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])
                    ->subject('Masterjobs - Confirmação de Cadastro') ;
            $message->from('masterjobs.tech@gmail.com', 'MasterJobs') ;
        });
        return true;
    }

    public function getLocationIP($ipaddress) {
        $json = file_get_contents("https://ipinfo.io/{$ipaddress}/json");
        $details = json_decode($json, true);
        if (is_array($details)) {
            return $details['city'] . ' - ' . $details['region'];
        }
    }
}
