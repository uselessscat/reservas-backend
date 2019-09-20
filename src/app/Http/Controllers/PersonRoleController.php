<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Role;
use Illuminate\Http\Request;

class PersonRoleController extends Controller
{
    public function index(Request $request, int $personId)
    {
        $roleList = Person::findOrFail($personId)->roles;

        return $roleList;
    }

    public function store(Request $request, int $personId)
    {
        $person = Person::findOrFail($personId);

        $input = $request->only('roles');

        $roles = Role::whereIn('id', $input['roles'])->get();

        $person->roles()->saveMany($roles);

        return response($roles, 201);
    }

    public function get(Request $request, int $personId, int $id)
    {
        $person = Person::findOrFail($personId);

        $role = $person->roles()->findOrFail($id);

        return $role;
    }

    public function update(Request $request, int $personId, $id)
    {
        $person = Person::findOrFail($personId);

        $role = $person->roles()->findOrFail($id);

        $input = $request->only(self::WHITELIST_FIELDS);

        $role->fill($input);

        $person->roles()->save($role);

        return $role;
    }

    public function delete(Request $request, int $personId, $id)
    {
        $person = Person::findOrFail($personId);

        $role = $person->roles()->findOrFail($id);

        $role->delete();

        return response('', 204);
    }
}
