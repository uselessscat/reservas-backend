<?php

namespace App\Http\Controllers;

use App\Models\EquipmentType;
use Illuminate\Http\Request;

class EquipmentTypeController extends Controller
{
    public function index(Request $request)
    {
        $equipmentTypeList = EquipmentType::all();

        return $equipmentTypeList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['name']);

        $equipmentType = new EquipmentType($input);

        $equipmentType->save();

        return response($equipmentType, 201);
    }

    public function get(Request $request, int $id)
    {
        $equipmentType = EquipmentType::findOrFail($id);

        return $equipmentType;
    }

    public function update(Request $request, $id)
    {
        $equipmentType = EquipmentType::findOrFail($id);

        $input = $request->only(['name']);

        $equipmentType->fill($input);

        $equipmentType->save();

        return $equipmentType;
    }

    public function delete(Request $request, $id)
    {
        $equipmentType = EquipmentType::findOrFail($id);

        $equipmentType->delete();

        return response('', 204);
    }
}
