<?php

namespace App\Http\Controllers;

use App\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->toArray();
        $file = $request->file('file');
        if (is_object($file)) {
            $data['filename']      = $file->getClientOriginalName();
            $data['fileextension'] = $file->getClientOriginalExtension();

            $file->move('uploads', $file->getClientOriginalName());
        }

        dd($data);
        $this->leads->create($request->all());
        return redirect()->route('home');
    }
}
