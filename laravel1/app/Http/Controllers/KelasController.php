<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller{
    public function index(){
        $post = DB::table('kelas')->get();

        return response()->json([
            'kelas' => $post            
        ], 200);
    }

    public function filter($id){
        $post = DB::table('kelas')->where('id_kelas',$id)->get();

        return response()->json([
            'kelas' => $post            
        ], 200);
    	return $id;
    }
}

?>