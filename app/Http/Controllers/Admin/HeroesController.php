<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Heroes;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    public function index(){
        $data['heroes'] = Heroes::all();

        dd($data);
        return view(
            'admin.view',
            $data
        );
    }
}
