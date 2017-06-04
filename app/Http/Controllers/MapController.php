<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ciudades;
use App\Provincia;

class MapController extends Controller
{
    public function index()
    {
    	$provincias = Provincia::all();
    	$text = $_POST['text'];

    	if(!empty($text)){
    		$result = Provincia::where('name', 'like', $text.'%')->get();
    	}

    	return $result;


    	//dd($result);

    	//return view('welcome',compact('provincias'));
    }

    public function map()
    {
    	$idProv = $_POST['idProv'];
    	$ciudades = ciudades::where('provincia_id',$idProv)->get();
    	//dd($ciudades);
    	return $ciudades;
    	//return view('map');
    }
}
