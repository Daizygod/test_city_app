<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CityController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale("ru");
        $currentCityCode = $request->session()->get('city_code');
        $uri = $request->getRequestUri();
        $cityCode = mb_substr($uri, 1, strlen($uri) - 1);
        if ($cityCode) {
            $request->session()->put('city_code', $cityCode);
        } elseif ($currentCityCode) {
            return redirect('/' . $currentCityCode, 301);
        }
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }
}
