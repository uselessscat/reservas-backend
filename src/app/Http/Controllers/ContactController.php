<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contactList = Contact::all();

        return $contactList;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        $input = $request->only(['name', 'last_name', 'email']);

        $contact = new Contact($input);

        $contact->save();

        return response($contact, 201);
    }

    public function get(Request $request, int $id)
    {
        $contact = Contact::with('roles')->findOrFail($id);

        return $contact;
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $input = $request->only(['name', 'last_name', 'email']);

        $contact->fill($input);

        $contact->save();

        return $contact;
    }

    public function delete(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return response('', 204);
    }
}
