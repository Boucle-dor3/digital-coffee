<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function list()
   {
       return new Categories(Category::all());
   }
}
