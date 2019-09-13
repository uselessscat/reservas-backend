<?php

namespace App\Http\Controllers;

use App\Models\Requeriment;
use App\Models\Service;
use Illuminate\Http\Request;

class RequerimentController extends Controller
{
    const WHITELIST_FIELDS = [
        'requeriment_type',
        'requeriment_type_id',
        'count',
    ];

    public function index(Request $request, int $serviceId)
    {
        $requerimentList = Service::findOrFail($serviceId)->requeriments;

        return $requerimentList;
    }

    public function store(Request $request, int $serviceId)
    {
        $service = Service::findOrFail($serviceId);

        $input = $request->only(self::WHITELIST_FIELDS);

        $requeriment = new Requeriment($input);

        $service->requeriments()->save($requeriment);

        return response($requeriment, 201);
    }

    public function get(Request $request, int $serviceId, int $id)
    {
        $service = Service::findOrFail($serviceId);

        $requeriment = $service->requeriments()->findOrFail($id);

        return $requeriment;
    }

    public function update(Request $request, int $serviceId, $id)
    {
        $service = Service::findOrFail($serviceId);

        $requeriment = $service->requeriments()->findOrFail($id);

        $input = $request->only(self::WHITELIST_FIELDS);

        $requeriment->fill($input);

        $service->requeriments()->save($requeriment);

        return $requeriment;
    }

    public function delete(Request $request, int $serviceId, $id)
    {
        $service = Service::findOrFail($serviceId);

        $requeriment = $service->requeriments()->findOrFail($id);

        $requeriment->delete();

        return response('', 204);
    }
}
