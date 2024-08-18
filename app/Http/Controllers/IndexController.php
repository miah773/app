<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;
use App\Models\Classe;

class IndexController extends Controller
{
    public function dash()
    {
        $enseignantCount = Enseignant::count();
        $classCount = Classe::count();
        return view('admin.dash', [
            'enseignantCount' => $enseignantCount,
            'classCount' => $classCount,
        ]);
    }
}
