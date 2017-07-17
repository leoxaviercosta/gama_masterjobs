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
        $data = $request->all();
        $data['ip_address'] = $request->ip();
        $data['subject'] = 'Teste de Email';
        $data['content'] = 'Teste de Email';

        $this->leads->create($data);
        if ($this->sendMail($data))
            return redirect()->route('home');
    }
    
    private function sendMail($data) {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.$data["name"].'<'.$data["email"].'>'. "\r\n";
        if (isset($data["email_copia"])) {
            $headers .= 'Cc: '.trim($data["email"]). "\r\n";
        }
        $para = "leoxaviercosta@gmail.com";
        $assunto = "".$this->especiais($data['subject'])." - MasterJobs";
        $mensagem = "".$this->especiais($data['content'])."";
        //echo "$para - $assunto - $mensagem - $headers";
        if (mail($para, $assunto, $mensagem, $headers))
            return true;
    }

    private function especiais($var) {

        // Acertando acentos nas letras "a" e "A"
        $var = preg_replace("[á]", "&aacute;", $var);
        $var = preg_replace("[ã]", "&atilde;", $var);
        $var = preg_replace("[â]", "&acirc;", $var);
        $var = preg_replace("[à]", "&agrave;", $var);

        $var = preg_replace("[Á]", "&Aacute;", $var);
        $var = preg_replace("[Ã]", "&Atilde;", $var);
        $var = preg_replace("[Â]", "&Acirc;", $var);
        $var = preg_replace("[À]", "&Agrave;", $var);


        // Acertando acentos nas letras "e" e "E"
        $var = preg_replace("[é]", "&eacute;", $var);
        $var = preg_replace("[è]", "&egrave;", $var);
        $var = preg_replace("[ê]", "&ecirc;", $var);

        $var = preg_replace("[É]", "&Eacute;", $var);
        $var = preg_replace("[È]", "&Egrave;", $var);
        $var = preg_replace("[Ê]", "&Ecirc;", $var);


        // Acertando acentos nas letras "o" e "O"
        $var = preg_replace("[ó]", "&oacute;", $var);
        $var = preg_replace("[ò]", "&ograve;", $var);
        $var = preg_replace("[ô]", "&ocirc;", $var);
        $var = preg_replace("[õ]", "&otilde;", $var);

        $var = preg_replace("[Ó]", "&Oacute;", $var);
        $var = preg_replace("[Ò]", "&Ograve;", $var);
        $var = preg_replace("[Ô]", "&Ocirc;", $var);
        $var = preg_replace("[Õ]", "&Otilde;", $var);


        // Acertando acentos nas letras "u" e "U"
        $var = preg_replace("[ú]", "&uacute;", $var);
        $var = preg_replace("[ù]", "&ugrave;", $var);
        $var = preg_replace("[û]", "&ucirc;", $var);

        $var = preg_replace("[Ú]", "&Uacute;", $var);
        $var = preg_replace("[Ù]", "&Ugrave;", $var);
        $var = preg_replace("[Û]", "&Ucirc;", $var);

        // Acertando acentos nas letras "i" e "I"
        $var = preg_replace("[í]", "&iacute;", $var);
        $var = preg_replace("[ì]", "&igrave;", $var);
        $var = preg_replace("[î]", "&icirc;", $var);

        $var = preg_replace("[Í]", "&Iacute;", $var);
        $var = preg_replace("[Ì]", "&Igrave;", $var);
        $var = preg_replace("[Î]", "&Icirc;", $var);


        // Acertando as letras "ç" e "Ç"
        $var = str_replace("ç", "&ccedil;", $var);
        $var = str_replace("Ç", "&Ccedil;", $var);

        return $var;
    }
}
