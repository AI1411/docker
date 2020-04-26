<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Http\Resources\PrefResource;
use App\Http\Resources\RegionResource;
use App\Models\City;
use App\Models\Pref;
use App\Models\Region;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function regions()
    {
        $regions = Region::all();

        return RegionResource::collection($regions);
    }

    public function prefs()
    {
        $prefs = Pref::all();

        return PrefResource::collection($prefs);
    }

    public function pref(Pref $pref)
    {
        return new PrefResource($pref);
    }

    public function cities()
    {
        $cities = City::all();

        return CityResource::collection($cities);
    }
}
