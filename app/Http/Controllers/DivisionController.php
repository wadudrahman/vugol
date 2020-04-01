<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DivisionModel;

class DivisionController extends Controller
{
//    public function addDivision(Request $request)
//    {
//        $division = DivisionModel::create([
//            'name' => $request->name,
//            'name_bn' => $request->name_bn,
//            'slug' => Str::slug($request->name),
//            'url' => $request->url,
//        ]);
//
//        return response()->json(['data' => $division]);
//    }

    public function divisionList()
    {
        return response()->json(['data' => DivisionModel::all()]);
    }

    public function divisionDetails($slug)
    {
        $slug = strtolower($slug);
        return response()->json(DivisionModel::find($id));
    }

//    public function updateDivisionDetails(Request $request, $id)
//    {
//        $division = DivisionModel::find($id);
//        $division->name = $request->input('name');
//        $division->price = $request->input('name_bn');
//        $division->description = $request->input('url');
//        $division->save();
//
//        return response()->json($division);
//    }
//
//    public function deleteDivision($slug)
//    {
//        $slug = strtolower(slug);
//        $division = DivisionModel::where('slug', $slug)->delete();
//
//        return response()->json(['message' => 'Division Deleted Successfully']);
//    }
}
