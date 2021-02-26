<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Welcome";
    }

    public function about(){
        echo "Name : Della Arselatuiqrom NIM : 1941720027 Class : TI-2H";
    }

    public function articles($id){
        echo "Articles Page With ID ".$id;
    }
}
