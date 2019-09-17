<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $serviceList = Service::all();

        return $serviceList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['name', 'description']);

        $service = new Service($input);

        $service->save();

        return response($service, 201);
    }

    public function get(Request $request, int $id)
    {
        $service = Service::with('requeriments')->findOrFail($id);

        return $service;
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $input = $request->only(['name', 'description']);

        $service->fill($input);

        $service->save();

        return $service;
    }

    public function delete(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        return response('', 204);
    }
}
