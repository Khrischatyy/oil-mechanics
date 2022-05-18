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

    public function childs()
    {
        $systems = ChildSystem::select('id', 'name', 'image')->get();

        return view('contents.childs', ['systems' => $systems]);
    }

    public function system()
    {
        $systems = ParentSystem::select('id', 'name', 'image')->get();

        return view('contents.system', ['systems' => $systems]);
    }
}
