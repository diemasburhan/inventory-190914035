<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $name = "Diemas Burhan ";

    public function index(){
        return $this->name;
    }
    public function show($param){
    
        $this->name = $param;
        return $this->name;
    }
}
