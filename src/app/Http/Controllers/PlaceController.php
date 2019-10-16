<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index(Request $request)
    {
        $placeList = Place::paginate($request->query('per_page') ?? 10);;

        return $placeList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['name', 'branch_office_id']);

        $place = new Place($input);

        $place->save();

        return response($place, 201);
    }

    public function get(Request $request, int $id)
    {
        $place = Place::with('placeTypes')->findOrFail($id);

        return $place;
    }

    public function update(Request $request, $id)
    {
        $place = Place::findOrFail($id);

        $input = $request->only(['name', 'branch_office_id']);

        $place->fill($input);

        $place->save();

        return $place;
    }

    public function delete(Request $request, $id)
    {
        $place = Place::findOrFail($id);

        $place->delete();

        return response('', 204);
    }
}
