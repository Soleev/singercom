<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;

class MenuController extends Controller
{
    public function index()
    {
        $subcategoryParts = Subcategory::where('parent', 1)->get();
        $subcategoryConsumables = Subcategory::where('parent', 2)->get();
        $subcategoryEquipment = Subcategory::where('parent', 3)->get();

        return view('layouts.app', compact('subcategoryParts', 'subcategoryConsumables', 'subcategoryEquipment'));
    }
}
