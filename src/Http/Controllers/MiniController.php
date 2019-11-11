<?php
namespace Carmi\MiniItem\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class MiniController extends Controller
{

    public function index(){
        return view("Mini::index");
    }

}