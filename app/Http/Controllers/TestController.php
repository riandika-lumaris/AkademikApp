<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        echo "Sesuatu";
    }

    public function say_hello($name) {
        echo "Hello, $name";
    }

    public function load_view() {
        return view("index", 
            array('title' => 'TEST CONTROLLER')
        );
    }

    public function do_login(Request $req) {
        echo "Hello, " . $req->input("username");
    }
}
