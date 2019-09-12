<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $personList = Person::all();

        return $personList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['name', 'last_name', 'email']);

        $person = new Person($input);

        $person->save();

        return $person;
    }

    public function get(Request $request, int $id)
    {
        $person = Person::findOrFail($id);

        return $person;
    }

    public function update(Request $request, $id)
    {
        $person = Person::findOrFail($id);

        $input = $request->only(['name', 'last_name', 'email']);

        $person->fill($input);

        $person->save();

        return $person;
    }

    public function delete(Request $request, $id)
    {
        $person = Person::findOrFail($id);

        $person->delete();

        return response('', 204);
    }
}
