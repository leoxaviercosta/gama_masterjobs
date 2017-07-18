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
        $data['ip_address'] = $request->ip();

        $this->leads->create($data);
        if ($this->html_email($data))
            return redirect()->route('home');
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
