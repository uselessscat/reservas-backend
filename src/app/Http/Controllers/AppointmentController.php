<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $appointmentList = Appointment::paginate($request->query('per_page') ?? 10);

        return $appointmentList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['person_id', 'service_id', 'from', 'to']);

        $appointment = new Appointment($input);

        $appointment->save();

        return response($appointment, 201);
    }

    public function get(Request $request, int $id)
    {
        $appointment = Appointment::findOrFail($id);

        return $appointment;
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $input = $request->only(['person_id', 'service_id', 'from', 'to']);

        $appointment->fill($input);

        $appointment->save();

        return $appointment;
    }

    public function delete(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->delete();

        return response('', 204);
    }
}
