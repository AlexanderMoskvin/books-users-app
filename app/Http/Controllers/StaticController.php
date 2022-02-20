<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller {

    public function index() {
        $title = "Главная страница";

        return view('static.index')->with('header', $title);
    }
}
