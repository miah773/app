<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant; 
use App\Models\Classe; 
class IndexController extends Controller
{
    public function dash(){
    // Fetch the number of students from the database
    $enseignantCount = Enseignant::count();
    $classCount=Classe::count();
    // Pass the student count to the view
    return view('admin.dash', [
        'enseignantCount' => $enseignantCount,
        'classCount'=>$classCount,
    ]);
}
}
