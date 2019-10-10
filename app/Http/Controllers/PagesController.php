<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Mail\NuevoContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function contacto(){
        return view('contacto');
    }
    public function enviar_contacto(Request $r){
        
        \Log::info($r->all());
        $r->validate([
            "nombre"   => "required",
            "telefono" => "required",
            "email"    => "required",
            "tema"     => "required",
            "mensaje"  => "required",
        ]);

        $c = new Contacto;
        $c->nombre   = $r->nombre;
        $c->email    = $r->email;
        $c->telefono = $r->telefono;
        $c->tema     = $r->tema;
        $c->mensaje  = $r->mensaje;
        $c->save();

        if(!$c->save()){
            \Log::error("Gestion Excel: Error al guardar datos");
            return response()->json("Error al guardar los datos");
        }else{
            \Log::info("Nuevo contacto Gestion Excel",[
                "nombre"   => $r->nombre,
                "email"    => $r->email,
                "telefono" => $r->telefono,
                "tema"     => $r->tema,
                "mensaje"  => $r->mensaje,
            ]);

            $historial = Contacto::where('email', $r->email)->get(); 
               
            Mail::to('gerardo.ruiz@gestionexcel.cl')
            ->queue(new NuevoContacto($c, $historial));
            Mail::to('gerardo.ruiz@mobilechile.app')
            ->queue(new NuevoContacto($c, $historial));
        }

        return back()->with('flash','Mensaje enviado con éxito. Nos pondremos en contacto con usted a la brevedad.');
    }
    public function temario(){
        return view('temario');
    }
    public function inicio(){
        return view('welcome');
    }
}
