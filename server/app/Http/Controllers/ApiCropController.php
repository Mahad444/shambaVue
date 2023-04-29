<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class ApiCropController extends Controller
{
    //
    public function index(){
        $crops=Crop::all();
        return $crops;
    }
    public function show($id){
        $crop=Crop::findorFail($id);
        return $crop;
    }
    public function store(Request $request){
        $request->validate([

        ]);
        $crop = new Crop();
        $crop->name=$request->name;
        $crop->desc=$request->desc;
        $crop->type=$request->type;


        $crop -> save();
        return "Crop saved successsfully";

    }
    public function update(string $id, Request $request){
        $crop=Crop::findorFail($id);
        $request->validate([

        ]);
        $crop->name=$request->name;
        $crop->desc=$request->desc;
        $crop->type=$request->type;
        $crop -> update();
        return "Crop updated successfully";


    }
    public function delete($id){
        $crop=Crop::findorFail($id);
        $crop->delete();
        return "Crop deleted successfully";
    }
}
