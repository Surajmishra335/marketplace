<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class FrontAdsController extends Controller
{
    public function index()
    {

        //for category car
        $category = Category::CategoryCar();
        $firstAds = Advertisement::firstFourAdsInCaurosel($category->id);
        $secondAds = Advertisement::secondFourAdsInCaurosel($category->id);

        //for category electronics

        $categoryElectronics = Category::CategoryElectronics();
        $firstAdsForElectronics = Advertisement::firstFourAdsInCauroselForElectronics($categoryElectronics->id);
        $secondAdsForElectronics = Advertisement::firstFourAdsInCauroselForElectronics($categoryElectronics->id);
    
        return view('index', compact(
            'firstAds',
            'secondAds',
            'category',
            'categoryElectronics',
            'firstAdsForElectronics',
            'secondAdsForElectronics'
            
        ));
    }

    public function viewuserAds()
    {
        dd('hello');
    }
}
