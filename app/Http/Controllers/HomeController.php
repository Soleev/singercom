<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Получение данных для меню
        $subcategoryParts = Subcategory::where('parent', 1)->get();
        $subcategoryConsumables = Subcategory::where('parent', 2)->get();
        $subcategoryEquipment = Subcategory::where('parent', 3)->get();

        // Возвращаем представление и передаем данные
        return view('pages.home', compact('subcategoryParts', 'subcategoryConsumables', 'subcategoryEquipment'));
    }
}
