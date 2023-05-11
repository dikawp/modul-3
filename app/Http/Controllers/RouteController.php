<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index() {
        return "Ini dari Controller cuy";
    }

    public function profile($profileId) {
        return "This is Profile from Controller, profile id: ".$profileId;
    }
}
