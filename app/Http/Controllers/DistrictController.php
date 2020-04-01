<?php

namespace App\Http\Controllers;

use App\Models\DistrictModel;
use App\Models\DivisionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DistrictController extends Controller
{
//    public function addDistrict(Request $request)
//    {
//        $district = DistrictModel::create([
//            'division_id' => $request->divisionId,
//            'name' => $request->name,
//            'slug' => Str::slug($request->name),
//            'bn_name' => $request->name_bn,
//            'url' => $request->url
//        ]);
//
//        return response()->json(['data' => $district]);
//    }

    public function districtList()
    {
        return response()->json(['data' => DistrictModel::all()]);
    }

    public function districtDetails($slug)
    {
        return response()->json(DistrictModel::where('name', $slug)->get());
    }

    public function divisionWiseDistrictList($division)
    {
        $division = strtolower($division);
        $divisionId = DivisionModel::where('slug', $division)->pluck('id')->first();

        return response()->json(DistrictModel::where('division_id', $divisionId)->get());
    }

//    public function updateDistrictDetails(Request $request, $slug)
//    {
//        $slug = strtolower($slug);
//
//        return response()->json(DistrictModel::where('slug', $slug)->update([
//            'division_id' => $request->divisionId,
//            'name' => $request->name,
//            'slug' => Str::slug($request->name),
//            'bn_name' => $request->name_bn,
//            'url' => $request->url
//        ]));
//    }
//
//    public function deleteDistrict($slug)
//    {
//        $slug = strtolower($slug);
//        $division = DistrictModel::where('slug', $slug)->delete();
//
//        return response()->json(['message' => 'District Deleted Successfully']);
//    }
}
