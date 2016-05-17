<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\Mashape;

class ImportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function run(Mashape $mashape){
        var_dump($mashape->getAllCards());
    }
}
