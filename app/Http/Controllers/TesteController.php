<?php

namespace LaravelExpress\Http\Controllers;

use Illuminate\Http\Request;

use LaravelExpress\Http\Requests;
use LaravelExpress\Http\Controllers\Controller;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($nome)
    {
        return view('teste.index',['nome'=>$nome]);
    }

    public function notas()
    {
        $notas = [
            0 => 'Anotação 0',
            1 => 'Anotação 1',
            2 => 'Anotação 2',
            3 => 'Anotação 3'
        ];

        return view('teste.notas', compact('notas'));
    }


}
