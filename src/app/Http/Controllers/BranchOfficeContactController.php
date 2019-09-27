<?php

namespace App\Http\Controllers;

use App\Models\BranchOffice;
use App\Models\Contact;
use Illuminate\Http\Request;

class BranchOfficeContactController extends Controller
{
    public function index(Request $request, int $branchOfficeId)
    {
        $contactList = BranchOffice::findOrFail($branchOfficeId)->contacts;

        return $contactList;
    }

    public function store(Request $request, int $branchOfficeId)
    {
        $branchOffice = BranchOffice::findOrFail($branchOfficeId);

        $input = $request->only(['data', 'contact_type_id']);

        $contact = new Contact($input);

        $contact->contactable()->associate($branchOffice);

        $contact->save();

        return response($branchOffice, 201);
    }

    public function get(Request $request, int $branchOfficeId, int $id)
    {
        $branchOffice = BranchOffice::findOrFail($branchOfficeId);

        $role = $branchOffice->contacts()->where('id', $id)->get();

        return $role;
    }

    public function delete(Request $request, int $id)
    {
        $branchOffice = BranchOffice::findOrFail($id);

        $input = $request->only('contacts');

        $contacts = Contact::whereIn('id', $input['contacts'])->get();

        $person->contacts()->detach($contacts);

        return response('', 204);
    }
}
