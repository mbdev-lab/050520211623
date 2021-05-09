<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Repositories\AreaRepository;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $request) {
        $cityRepository = new CityRepository();
        $areaRepository = new AreaRepository();

        return view('welcome',
            [
                'cities' => $cityRepository->all(),
                'areas' => $areaRepository->all(),
            ]
        );
    }
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'city' => 'required|integer',
            'area' => 'required|integer',
            'street' => 'string|max:255',
            'house' => 'string|max:255',
            'additional_information' => 'string|max:1255',
        ]);

        Address::create($validated);

        return redirect('/');
    }
}
