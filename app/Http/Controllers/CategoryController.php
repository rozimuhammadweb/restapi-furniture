<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        return response()->json(Category::all());
    }



    public function store(StoreCategoryRequest $request)
    {
        //
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function edit(Category $category)
    {
        //
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        //
    }
}
