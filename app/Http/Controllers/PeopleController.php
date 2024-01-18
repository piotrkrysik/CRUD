<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function read(){
        $peoples = People::all();
        return response()->json([$peoples]);
    }
    
    public function create(Request $request){
        $newPeople = New People();
        $newPeople->name=$request->name;
        $newPeople->surname=$request->surname;
        $newPeople->street=$request->street;
        $newPeople->telnr=$request->telnr;
        $newPeople->country=$request->country;
        $newPeople->save();
        return response()->json("People Created Succesfully");
    }

    public function update(Request $request){
        $newPeople=People::findorfail($request->id);
        foreach ($request->all() as $key => $value) {
            if (!is_null($value)) {
                $newPeople->$key = $value;
            }
        }

        $newPeople->update();
        return response()->json("Product Updated Succesfully");
    
    }

    public function delete(Request $request){
        $people=People::findorfail($request->id)->delete();
        return response()->json("Product Deleted Succesfully");
    }

    public function show(Request $request){
        $people=People::findorfail($request->id);
        return response()->json($people);
    }
}
