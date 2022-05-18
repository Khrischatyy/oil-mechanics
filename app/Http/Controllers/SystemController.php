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
        $systems = ParentSystem::select('id', 'name', 'image')->get();

        return view('contents.system', ['systems' => $systems]);
    }
}
