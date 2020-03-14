<?php

namespace App\Http\Controllers;

use App\Models\DivisionModel;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public static function addDivision(Request $request)
    {
        $division = new DivisionModel();
        $division->name = $request->name;
        $division->name_bn = $request->name_bn;
        $division->url = $request->url;
        $division->save();

        return response()->json($division);
    }

    public static function divisionList()
    {
        return response()->json(DivisionModel::all());
    }

    public static function divisionDetails($id)
    {
        return response()->json(DivisionModel::find($id));
    }

    public static function updateDivisionDetails(Request $request, $id)
    {
        $division = DivisionModel::find($id);
        $division->name = $request->input('name');
        $division->price = $request->input('name_bn');
        $division->description = $request->input('url');
        $division->save();

        return response()->json($division);
    }

    public function deleteDivision($id)
    {
        $division = DivisionModel::find($id);
        $division->delete();

        return response()->json('Division Deleted Successfully');
    }
}
