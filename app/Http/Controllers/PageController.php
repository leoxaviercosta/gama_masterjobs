<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function quemsomos() {
        return view('template.quemsomos');
    }

    public function contato() {
        return view('template.contato');
    }

    public function contact(Request $request) {
        config(['app.timezone' => 'America/Sao_Paulo']);
        ini_set('xdebug.max_nesting_level', 500);

        $data = $request->all();       
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('masterjobs.tech@gmail.com', 'MasterJobs')
                    ->subject('Masterjobs - Messangem de contato') ;
            $message->from($data['email'], $data['name']) ;
        });

        return response()->json(
                    ['message' => 'Olá '. ucwords($lead->name) .', você já está na lista de pré-inscritos! Fique atento que enviaremos novidades em seu email e logo você receberá noticias sobre as próximas edições do programa.']);
        
    }
}
