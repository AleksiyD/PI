<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {
    
    public function index() {
        return view('index');
    }

    // make client object and redirect to info_verification_page
    public function send_feedback_form(Request $request) {
        dd($request->all());
    }

    // client object
    public function info_verification_page() {

    }
}
