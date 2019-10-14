<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\PlaceType;
use Illuminate\Http\Request;

class PlacePlaceTypeController extends Controller
{
    public function index(Request $request, int $id)
    {
        $placeTypesList = Place::findOrFail($id)->placeTypes;

        return $placeTypesList;
    }

    public function store(Request $request, int $id)
    {
        $place = Place::findOrFail($id);

        $input = $request->only('place_types');

        $placeTypes = PlaceType::whereIn('id', $input['place_types'])->get();

        $place->placeTypes()->attach($placeTypes);

        return response($placeTypes, 201);
    }

    public function get(Request $request, int $id, int $typeId)
    {
        $place = Place::findOrFail($id);

        $placeType = $place->placeTypes()->findOrFail($typeId);

        return $placeType;
    }

    public function delete(Request $request, int $id)
    {
        $place = Place::findOrFail($id);

        $input = $request->only('place_types');

        $placeTypes = PlaceType::whereIn('id', $input['place_types'])->get();

        $place->placeTypes()->detach($placeTypes);

        return response('', 204);
    }
}
