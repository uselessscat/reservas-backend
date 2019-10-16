<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index(Request $request)
    {
        $equipmentList = Equipment::paginate($request->query('per_page') ?? 10);

        return $equipmentList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['name', 'branch_office_id', 'code']);

        $equipment = new Equipment($input);

        $equipment->save();

        return response($equipment, 201);
    }

    public function get(Request $request, int $id)
    {
        $equipment = Equipment::with('equipmentTypes')->findOrFail($id);

        return $equipment;
    }

    public function update(Request $request, $id)
    {
        $equipment = Equipment::findOrFail($id);

        $input = $request->only(['name', 'branch_office_id', 'code']);

        $equipment->fill($input);

        $equipment->save();

        return $equipment;
    }

    public function delete(Request $request, $id)
    {
        $equipment = Equipment::findOrFail($id);

        $equipment->delete();

        return response('', 204);
    }
}
