<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function findBasedOnSubcategory($categorySlug, $subcategorySlug)
    {
        return view('product.subcategory');
    }
}
