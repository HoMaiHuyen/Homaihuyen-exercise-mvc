<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;


class FruitController extends Controller
{
    public function getFruits()
    {
        $fruitModel = new Fruit();
        $fruits = $fruitModel->getRows();
        return view('fruits', compact('fruits'));
    }
}
