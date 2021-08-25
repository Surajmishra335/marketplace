<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Childcategory;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function findBasedOnCategory(Category $categorySlug)
    {
        $advertisements = $categorySlug->ads;

        $filterBySubcategory = Subcategory::where('category_id',$categorySlug->id)->get();

        return view('product.category',compact('advertisements','filterBySubcategory'));
    }


    public function findBasedOnSubcategory(Request $request, $categorySlug, Subcategory $subcategorySlug)
    {
        $advertisementBasedOnFilter = Advertisement::where(
            'subcategory_id',
            $subcategorySlug->id
        )->when($request->minPrice, function ($query, $minPrice) {
            return $query->where('price', '>=', $minPrice);

        })->when($request->maxPrice, function ($query, $maxPrice) {
            return $query->where('price', '<=', $maxPrice);
        })->get();
        
        //TODO filter is not working properly only working with 3 digit price
        $advertisementWithoutFilter = $subcategorySlug->ads;

        $childCategoryByFilterId = $subcategorySlug->ads->unique('childcategory_id');

        $advertisements = $request->minPrice || $request->maxPrice ?
            $advertisementBasedOnFilter : $advertisementWithoutFilter;
            
        return view('product.subcategory', compact('advertisements', 'childCategoryByFilterId'));

    }

    public function findBasedOnChildcategory(
        request $request, 
        $categorySlug , 
        Subcategory $subcategorySlug, 
        Childcategory $childcategorySlug)
    {
        $advertisementBasedOnFilter = Advertisement::where(
            'childcategory_id',
            $childcategorySlug->id
        )->when($request->minPrice, function ($query, $minPrice) {
            return $query->where('price', '>=', $minPrice);
        })->when($request->maxPrice, function ($query, $maxPrice) {
            return $query->where('price', '<=', $maxPrice);
        })->get();

        $advertisementWithoutFilter = $childcategorySlug->ads;

        $filterByChildCategories = $subcategorySlug->ads->unique('childcategory_id');

        $advertisements = $request->minPrice || $request->maxPrice ?
        $advertisementBasedOnFilter : $advertisementWithoutFilter;
       
        return view('product.childcategory', compact(
            'advertisements',
            'filterByChildCategories'
        ));
    }

    public function show($id, $slug)
    {
        $advertisement = Advertisement::where('id', $id)->where('slug', $slug)->first();

        return view('product.show', compact('advertisement'));
    }


}
