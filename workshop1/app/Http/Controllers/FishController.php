<?php

namespace App\Http\Controllers; 
 
use App\Models\Fish; 
use Illuminate\View\View;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;


class FishController extends Controller {
    public function index() 
    { 
        $viewData = []; 
        $viewData["title"] = "Peces - Fondo de Bikini"; 
        $viewData["subtitle"] = "Lista de Peces"; 
        $fishes = Fish::orderBy('weight', 'ASC')->get();
    
        foreach ($fishes as $fish) {
            if ($fish->species == 'SapoPerro') {
                $fish->highlight = 'weight';
            } else {
                $fish->highlight = 'name';
            }
        }
        $viewData["fishes"] = $fishes;
        return view('fish.index')->with("viewData", $viewData); 
    }
    

    public function show($id) 
    { 
        $viewData = []; 
        $fish = Fish::findOrFail($id); 
        $viewData["title"] = $fish->getName()." - BikeTrek"; 
        $viewData["subtitle"] =  $fish->getName()." - Route information"; 
        $viewData["fish"] = $fish; 
        return view('fish.show')->with("viewData", $viewData); 
    } 

    public function create(): View
    {
        $viewData = []; 
        $viewData["title"] = "Crear Pez";

        return view('fish.create')->with("viewData",$viewData);
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "species" => "required",
            "weight" => "required",
        ]);
        Fish::create($request->only(["name", "species", "weight"]));

        return back();
    }

    public function stats(){
    $viewData = [];

    $speciesCount = Fish::select('species', DB::raw('count(*) as total'))
        ->groupBy('species')
        ->get();

    $maxWeight = Fish::max('weight');

    $viewData["title"] = "Estadísticas de Peces";
    $viewData["subtitle"] = "Resumen de Peces por Especie y Peso Máximo";
    $viewData["speciesCount"] = $speciesCount;
    $viewData["maxWeight"] = $maxWeight;

    return view('fish.stats')->with("viewData", $viewData);
}

 
} 


