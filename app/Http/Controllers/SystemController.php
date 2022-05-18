<?php

namespace App\Http\Controllers;

use App\Models\ChildSystem;
use App\Models\ParentSystem;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index()
    {
        $systems = ParentSystem::select('id', 'name', 'image')->get();

        return view('contents.main', ['systems' => $systems]);
    }

    public function childs(int $id)
    {
        $systems = ChildSystem::where('parent_id', $id)->get();

        if(empty($systems)) {
            return $this->system($id);
        }

        return view('contents.childs', ['systems' => $systems]);
    }

    public function system($id)
    {
        $systems = ParentSystem::select('id', 'name')->get();

        return view('contents.system', ['systems' => $systems]);
    }
    
    public function addProductPage(){
        $systems = ParentSystem::select('id', 'name')->get();
        return view('contents.add_product', ['systems' => $systems]);
    }
    
    public function addProduct(Request $request){
        if($request->parent_id){
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
            $system->is_parent = 0;
            $system->save();
        }
        
    }
}
