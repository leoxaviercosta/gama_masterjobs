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

        $ipv4_address = gethostbyname(gethostbyaddr($_SERVER['REMOTE_ADDR']));
        $data = $request->all();
        $data['ipv4_address'] = $ipv4_address;
        $data['ipv6_address'] = $request->ip();
        $lead = null;
        //$lead = $this->leads::where('email', $data['email'])->first();
        if ($lead){
            return $this->getMessageLeadError($lead);
        } else {
            $this->leads->create($data);
            try {
                if ($this->html_email($data)){
                    return $this->getMessageSuccess($data);
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

    public function basic_email() {
        $data = array('name'=>"Virat Gandhi", 'email'=>"leoxaviercosta@gmail.com") ;

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point') ->subject
            ('Laravel Basic Testing Mail') ;
            $message->from('xyz@gmail.com','Virat Gandhi') ;
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function html_email($data) {
        Mail::send('template.mail', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])
                    ->subject('MasterJobs - Gama Experience') ;
            $message->from('masterjobs.tech@gmail.com', 'MasterJobs') ;
        });
        return true;
    }

    public function attachment_email() {
        $data = array('name'=>"Virat Gandhi") ;
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point') ->subject
            ('Laravel Testing Mail with Attachment') ;
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png') ;
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt') ;
            $message->from('xyz@gmail.com','Virat Gandhi') ;
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}
