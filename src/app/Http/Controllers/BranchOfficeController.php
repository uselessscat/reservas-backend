<?php

namespace App\Http\Controllers;

use App\Models\BranchOffice;
use Illuminate\Http\Request;

class BranchOfficeController extends Controller
{
    public function index(Request $request)
    {
        $branchOfficeList = BranchOffice::all();

        return $branchOfficeList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['name']);

        $branchOffice = new BranchOffice($input);

        $branchOffice->save();

        return response($branchOffice, 201);
    }

    public function get(Request $request, int $id)
    {
        $branchOffice = BranchOffice::findOrFail($id);

        return $branchOffice;
    }

    public function update(Request $request, $id)
    {
        $branchOffice = BranchOffice::findOrFail($id);

        $input = $request->only(['name']);

        $branchOffice->fill($input);

        $branchOffice->save();

        return $branchOffice;
    }

    public function delete(Request $request, $id)
    {
        $branchOffice = BranchOffice::findOrFail($id);

        $branchOffice->delete();

        return response('', 204);
    }
}
