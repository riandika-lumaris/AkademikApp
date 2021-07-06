<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SC_Controller extends Controller
{
    public function add_session(Request $request) {
        $request->session()->put('my_item', 'session test');
        echo "Session set";
    }

    public function get_session(Request $request) {
        echo $request->session()->get('my_item', null);
    }

    public function add_cookie() {
        $response = new Response(view("welcome"));
        $response->withCookie(cookie('my_cookie', 'cookie_test',24*60));
        return $response;
    }

    public function get_cookie(Request $request) {
        echo $request->cookie('my_cookie');
    }

    public function show_home() {
        return view('pages.home');
    }
}
