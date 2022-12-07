<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trainer;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $error =['error' => 'Sin resultados, ingrese otros campos para la busqueda.'];
        if ($request->has('text')){
            $entrenadores = Trainer::search($request->get('text'))->get();
            return view("buscar", compact("entrenadores"));
        }
            return $error;
    }
    public function index()
    {
        return view("search");
    }
}
