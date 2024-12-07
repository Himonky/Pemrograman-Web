<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return response()->json($owners);
    }

    public function store(Request $request)
    {
        $owner = Owner::create($request->all());
        return response()->json($owner, 201);
    }

    public function show($id)
    {
        return Owner::find($id);
    }

    public function update(Request $request, $id)
    {
        $owner = Owner::find($id);
        $owner->update($request->all());
        return response()->json($owner);
    }

    public function destroy($id)
    {
        Owner::destroy($id);
        return response()->json(null, 204);
    }
}

