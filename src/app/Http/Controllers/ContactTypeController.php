<?php

namespace App\Http\Controllers;

use App\Models\ContactType;
use Illuminate\Http\Request;

class ContactTypeController extends Controller
{
    public function index(Request $request)
    {
        $contactTypeTypeList = ContactType::paginate($request->query('per_page') ?? 10);

        return $contactTypeTypeList;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->only(['name']);

        $contactType = new Contact($input);

        $contactType->save();

        return response($contactType, 201);
    }

    public function get(Request $request, int $id)
    {
        $contactType = ContactType::findOrFail($id);

        return $contactType;
    }

    public function update(Request $request, $id)
    {
        $contactType = ContactType::findOrFail($id);

        $input = $request->only(['name']);

        $contactType->fill($input);

        $contactType->save();

        return $contactType;
    }

    public function delete(Request $request, $id)
    {
        $contactType = ContactType::findOrFail($id);

        $contactType->delete();

        return response('', 204);
    }
}
