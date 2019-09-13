<?php

namespace App\Http\Controllers;

use App\Models\PlaceType;
use Illuminate\Http\Request;

class PlaceTypeController extends Controller
{
    public function index(Request $request)
    {
        $placeTypeList = PlaceType::all();

        return $placeTypeList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['name']);

        $placeType = new PlaceType($input);

        $placeType->save();

        return response($placeType, 201);
    }

    public function get(Request $request, int $id)
    {
        $placeType = PlaceType::findOrFail($id);

        return $placeType;
    }

    public function update(Request $request, $id)
    {
        $placeType = PlaceType::findOrFail($id);

        $input = $request->only(['name']);

        $placeType->fill($input);

        $placeType->save();

        return $placeType;
    }

    public function delete(Request $request, $id)
    {
        $placeType = PlaceType::findOrFail($id);

        $placeType->delete();

        return response('', 204);
    }
}
