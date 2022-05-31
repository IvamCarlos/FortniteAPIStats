<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FortniteAPIController extends Controller
{

    public function index(){
        return view('consulta.status_jogador');
    }

    public function status(Request $request){

        $id = $request->id;
        $plataforma = $request->plataforma;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.fortnitetracker.com/v1/profile/'.$plataforma.'/'.$id.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'TRN-Api-Key: '.env('TRN_API_KEY'),
            'Content-Type: application/json'
        ));
        $body = curl_exec($ch);
        curl_close($ch);

        $resultado = json_decode($body);

        if(isset($resultado->error) == "Player Not Found"){
            return response()->json(['resultado' => 'Jogador não encontrado!']);
        }
        
        return view('consulta.estatisticas', compact('resultado'))->render();
    }

    public function historico_de_partidas(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.fortnitetracker.com/v1/profile/account/67f88bf2-90f8-427b-a11d-f0adedb18a19/matches');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'TRN-Api-Key: '.env('TRN_API_KEY'),
            'Content-Type: application/json'
        ));
        $body = curl_exec($ch);
        curl_close($ch);

        $resultado = json_decode($body);

        return view('consulta.historico_de_partidas', ['resultado' => $resultado]);
    }

    public function loja(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.fortnitetracker.com/v1/store');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'TRN-Api-Key: '.env('TRN_API_KEY'),
            'Content-Type: application/json'
        ));
        $body = curl_exec($ch);
        curl_close($ch);

        $resultado = json_decode($body);
        
        return view('consulta.loja', ['resultado' => $resultado]);
    }
}
