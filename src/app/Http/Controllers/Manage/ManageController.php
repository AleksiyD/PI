<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;

class ManageController extends Controller {
    
    public function __invoke() {
        // return view('manage.index');
        return redirect()->route('manage.show-clients');
    }

}
