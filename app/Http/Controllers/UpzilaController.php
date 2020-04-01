<?php

namespace App\Http\Controllers;

use App\Models\DistrictModel;
use App\Models\DivisionModel;
use App\Models\UpzilaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpzilaController extends Controller
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

    public function upzilaList()
    {
        $upzilas = UpzilaModel::join('districts', 'upazilas.district_id', '=', 'districts.id')
            ->join('divisions', 'districts.division_id', '=', 'divisions.id')
            ->select('upazilas.id', 'upazilas.name', 'upazilas.slug', 'upazilas.bn_name', 'upazilas.url', 'districts.name as district_name', 'districts.bn_name as district_bn_name', 'divisions.name as division_name', 'divisions.bn_name as division_bn_name')
            ->get();

        return response()->json(['data' => $upzilas]);
    }

    public function upzilaDetails($slug)
    {
        $slug = strtolower($slug);
        $upzila = UpzilaModel::join('districts', 'upazilas.district_id', '=', 'districts.id')
            ->join('divisions', 'districts.division_id', '=', 'divisions.id')
            ->select('upazilas.id', 'upazilas.name', 'upazilas.slug', 'upazilas.bn_name', 'upazilas.url', 'districts.name as district_name', 'districts.bn_name as district_bn_name', 'divisions.name as division_name', 'divisions.bn_name as division_bn_name')
            ->where('upazilas.slug', $slug)
            ->get();

        return response()->json(['data' => $upzila]);
    }

    public function divisionWiseUpzilaList($division)
    {
        $division = strtolower($division);
        $upzila = UpzilaModel::join('districts', 'upazilas.district_id', '=', 'districts.id')
            ->join('divisions', 'districts.division_id', '=', 'divisions.id')
            ->select('upazilas.id', 'upazilas.name', 'upazilas.slug', 'upazilas.bn_name', 'upazilas.url', 'districts.name as district_name', 'districts.bn_name as district_bn_name', 'divisions.name as division_name', 'divisions.bn_name as division_bn_name')
            ->where('divisions.slug', $division)
            ->get();

        return response()->json(['data' => $upzila]);
    }

    public function districtWiseUpzilaList($district)
    {
        $district = strtolower($district);
        $upzila = UpzilaModel::join('districts', 'upazilas.district_id', '=', 'districts.id')
            ->join('divisions', 'districts.division_id', '=', 'divisions.id')
            ->select('upazilas.id', 'upazilas.name', 'upazilas.slug', 'upazilas.bn_name', 'upazilas.url', 'districts.name as district_name', 'districts.bn_name as district_bn_name', 'divisions.name as division_name', 'divisions.bn_name as division_bn_name')
            ->where('districts.slug', $district)
            ->get();

        return response()->json(['data' => $upzila]);
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
