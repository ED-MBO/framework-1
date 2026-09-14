<?php

namespace App\Http\Controllers;

use App\Providers\Categories\Index;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = new Index();

        return $index->index();
    }
}
