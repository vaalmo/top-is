<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Route; 
use Illuminate\View\View;
use Illuminate\Http\Request; 
 
class RouteController extends Controller 
{ 

    public function index() 
    { 
        $viewData = []; 
        $viewData["title"] = "Routes - BikeTrek"; 
        $viewData["subtitle"] =  "List of routes"; 
        $viewData["routes"] = Route::all(); 
        return view('route.index')->with("viewData", $viewData); 
    } 
 
    public function show($id) 
    { 
        $viewData = []; 
        $route = Route::findOrFail($id); 
        $viewData["title"] = $route->getName()." - BikeTrek"; 
        $viewData["subtitle"] =  $route->getName()." - Route information"; 
        $viewData["route"] = $route; 
        return view('route.show')->with("viewData", $viewData); 
    } 

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create route";

        return view('route.create')->with("viewData",$viewData);
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "startPoint" => "required",
            "finalPoint" => "required",
            "score" => "required",
            "location" => "required",
            "time" => "required"
        ]);
        Route::create($request->only(["name", "description", "startPoint", "finalPoint", "score", "location", "time"]));

        return back();
    }

    // validaciones no deben ir en el controller
    
    public function delete($id) 
    { 
    Route::destroy($id); 
    return back(); 
    } 
    

}