<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
 
class CategoriasController extends Controller
{
    public function getAll()
    {
        $response = new \stdClass(); 

        $categorias = Categoria::all();

        $response->success=true;
        $response->data=$categorias;

        return response()->json($response,200);
    }
    
     public function store(Request $request);

    {
        return "hola post";

    }

}    
    

