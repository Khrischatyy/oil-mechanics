<?php

namespace App\Http\Controllers;

use App\Models\ChildSystem;
use App\Models\ParentSystem;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        $systems = ParentSystem::withCount('childs')->get();

        return view('contents.main', ['systems' => $systems]);
    }

    public function childs(int $id)
    {
        $system = ParentSystem::with('childs')->where('id', $id)->first();

        return view('contents.childs', ['system' => $system]);
    }
    
    public function childSystem($id, $child_id)
    {
        $system = ChildSystem::with('parent')->where('id', $child_id)->first();

        return view('contents.system', ['system' => $system]);
    }

    public function system($id)
    {
        $system = ParentSystem::where('id', $id)->first();

        return view('contents.system', ['system' => $system]);
    }

    public function addProductPage(){
        $systems = ParentSystem::select('id', 'name')->get();
        return view('contents.add_product', ['systems' => $systems]);
    }

    public function addProduct(Request $request){
        if($request->parent_id > 0){
            $system = new ChildSystem();
            $system->name = $request->name;
            $system->image = $request->image;
            $system->description = $request->description;
            $system->table = json_encode($request->table);
            $system->parent_id = $request->parent_id;
            $system->save();
        }
        else{
            $system = new ParentSystem();
            $system->name = $request->name;
            $system->image = $request->image;
            $system->description = $request->description;
            $system->table = json_encode($request->table);
            $system->save();
        }

    }
}
