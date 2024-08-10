<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;

class ChartController extends Controller
{
    //
     public function getChartData()
    {
        // Fetch all filieres with the count of classes
        $filieres = Filiere::withCount('classes')->get();

        // Prepare data for the chart
        $labels = $filieres->pluck('nom');
        $values = $filieres->pluck('classes_count');

        return response()->json([
            'labels' => $labels,
            'values' => $values,
        ]);
    }

    public function getSpecialties()
    {
        // Fetch filieres
        $filieres = Filiere::all();

        return response()->json($filieres);
    }
}
