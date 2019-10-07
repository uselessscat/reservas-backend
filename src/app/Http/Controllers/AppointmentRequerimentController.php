<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentRequerimentController extends Controller
{
    public function index(Request $request)
    {
        $appointmentRequerimentList = AppointmentRequeriment::all();

        return $appointmentRequerimentList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['appointment_id', 'requeriment_id']);

        $appointment = new AppointmentRequeriment($input);

        $appointment->save();

        return response($appointment, 201);
    }

    public function get(Request $request, int $id)
    {
        $appointmentRequeriment = AppointmentRequeriment::with(['roles', 'contacts'])->findOrFail($id);
        return $appointmentRequeriment;
    }

    public function update(Request $request, $id)
    {
        $appointmentRequeriment = AppointmentRequeriment::findOrFail($id);

        $input = $request->only(['requeriment_id', 'appointment_id']);

        $appointmentRequeriment->fill($input);

        $appointmentRequeriment->save();

        return $appointmentRequeriment;
    }

    public function delete(Request $request, $id)
    {
        $appointmentRequeriment = AppointmentRequeriment::findOrFail($id);

        $appointmentRequeriment->delete();

        return response('', 204);
    }
}
