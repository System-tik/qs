<?php

namespace App\Http\Controllers;

use App\Models\categorieprod;
use App\Models\produit;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function getProduct(){
        try {
            //code...
            $data=produit::join('categorieprods', 'categorieprods.id', '=', 'produits.cat_id')->get(['produits.*', 'categorieprods.nom as cat']);
            return response()->json(["total_size"=>count($data), "products"=>$data]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["message"=>$th->getMessage()]);
        }
    }
    public function getCategorie(){
        try {
            //code...
            $data=categorieprod::all();
            return response()->json($data);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["message"=>$th->getMessage()]);
        }
    }
}
