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
        ini_set('xdebug.max_nesting_level', 500);

        $data = array('posts'=>"Virat Gandhi") ;

        $mail = new
        dd('teste');
        //$this->leads->create($request->all());
        //return redirect()->route('home');
    }
}
