<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicion;

class MedicionesController extends Controller
{

    public function getMedidas(){
        $medidas = array();
        $medidas[] = "Kilowatss";
        $medidas[] = "Watts";
        $medidas[] = "Temperatura";

        return $medidas;
    }

    public function getMedidor(){
        $medidor = array();
        $medidor[] = "01";
        $medidor[] = "02";
        $medidor[] = "04";
        $medidor[] = "05";
        $medidor[] = "06";
        $medidor[] = "07";
        $medidor[] = "08";
        $medidor[] = "09";
        $medidor[] = "10";

        return $medidor;
    }


    public function getMediciones(){
        $mediciones = Medicion::all();
        return $mediciones;
    }

    public function filtrarMediciones(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $mediciones = Medicion::where("medidas", $filtro)->get();
        return $mediciones;
    }

    public function crearMedicion(Request $request){
        $input = $request->all(); 
        $medicion = new Medicion();
        $medicion->fecha = $input["fecha"];
        $medicion->hora = $input["hora"];
        $medicion->medidor = $input["medidor"];
        $medicion->direccion = $input["direccion"];
        $medicion->valor = $input["valor"];
        $medicion->medidas = $input["medidas"];

        $medicion->save();
        return $medicion;
    }

    public function eliminarMediciones(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $medicion = Medicion::findOrFail($id);
        $medicion->delete();
        return "ok";
    }
}