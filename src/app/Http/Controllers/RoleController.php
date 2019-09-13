<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roleList = Role::all();

        return $roleList;
    }

    public function store(Request $request)
    {
        $input = $request->only(['name']);

        $role = new Role($input);

        $role->save();

        return response($role, 201);
    }

    public function get(Request $request, int $id)
    {
        $role = Role::findOrFail($id);

        return $role;
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $input = $request->only(['name']);

        $role->fill($input);

        $role->save();

        return $role;
    }

    public function delete(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return response('', 204);
    }
}
