<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Contact;
use App\Models\ContactType;
use Illuminate\Http\Request;

class PersonContactController extends Controller
{
    public function index(Request $request, int $personId)
    {
        $contactList = Person::findOrFail($personId)->contacts;

        return $contactList;
    }

    public function store(Request $request, int $personId)
    {
        $person = Person::findOrFail($personId);

        $input = $request->only('roles');

        $contacts = ContactType::whereIn('id', $input['roles'])->get();

        $person->contacts()->attach($contacts);

        return response($contacts, 201);
    }

    public function get(Request $request, int $personId, int $id)
    {
        $person = Person::findOrFail($personId);

        $role = $person->contacts()->findOrFail($id);

        return $role;
    }

    public function delete(Request $request, int $id)
    {
        $person = Person::findOrFail($id);

        $input = $request->only('contacts');

        $contacts = Contact::whereIn('id', $input['contacts'])->get();

        $person->contacts()->detach($contacts);

        return response('', 204);
    }
}
