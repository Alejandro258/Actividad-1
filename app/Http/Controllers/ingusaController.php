<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mail\ContactoEmail;
use Illuminate\Support\Facades\Mail;
//use mail;
use PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Http\Controllers\MetalController;

use App\Models\Familia;
use App\Models\Producto;
use App\Models\Marca;

class ingusaController extends Controller{
	

    public function inicio(){
     return view("inicio")->with([
        ]);
    }

	/**public function inicio(){

        $familias = Familia::with('subfamilias')->get();
        $marcas = Marca::all("nombre", "url_imagen");
        //return $marcas;
        $sliders = Producto::with([
            'imagenes' => function($query){
                $query->orderBy('numero');
            }
        ])->where('vista_carrusel', 1)->get();
        //return $sliders;
        //return $familias;
        return view("inicio")->with([
            'marcas' => $marcas,
            'familias' => $familias,
            'sliders'  => $sliders
        ]);
    }**/

    public function nosotros(){

        $familias = Familia::with('subfamilias')->get();
        $marcas = Marca::all("nombre", "url_imagen");

        return view("nosotros")->with([
            'marcas' => $marcas,
            'familias' => $familias
        ]);
    }
   

    public function store(Request $request){

        $nombre = $_POST["nombre"];
        $empresa = $_POST["empresa"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];


        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
        //$recaptcha_secret = '6Ld3JfEjAAAAAId42ygU-kN-RfJWC-I8Fixxn7SC'; 
        $recaptcha_secret = '6LcCNjUnAAAAAGdhnLoMz6hRO57IfamU_Z9MXv9a';
        $recaptcha_response = $_POST['g-recaptcha-response']; 

        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response); 

        $recaptcha = json_decode($recaptcha); 
      
        if( $recaptcha->success == false){
            //return redirect(route('versiondos')); NOTA: (versiondos - es el nombre de una ruta)
            //var_dump($recaptcha_response);
            //var_dump($recaptcha);
            return $recaptcha;
        }


        if($recaptcha->score >= 0.7){
            
            $subject = "Correo enviado por un formulario";  
            $message = view('mail.contacto')->with([
                'nombre'   => $nombre,
                'empresa'   => $empresa,
                'correo'   => $correo,
                'telefono' => $telefono,
                'mensaje' => $mensaje
            ]);
 
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

            // Additional headers
            $headers .= 'To: <contacto@tequiladelarealeza.com> ' . "\r\n";
            $headers .= 'From: '.$nombre.' <'.$correo.'>' . "\r\n";

            if(mail("contacto@tequiladelarealeza.com", $subject, $message, $headers)){
                return redirect(route('contacto'));
            }else{
                return "error";
            }
            
            //return redirect(route('versiondos'));
        } else {
    
        // código para lanzar aviso de error en el envío
            //return redirect(route('versiondos'));
            echo "Problablemente eres un robot";
        }
    }
}