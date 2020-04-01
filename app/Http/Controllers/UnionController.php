<?php

namespace App\Http\Controllers;

use App\Models\UnionModel;
use App\Models\UpzilaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UnionController extends Controller
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

    public function unionList()
    {
        $unions = UnionModel::join('upazilas', 'unions.upazilla_id', '=', 'upazilas.id')
            ->join('districts', 'upazilas.district_id', '=', 'districts.id')
            ->join('divisions', 'districts.division_id', '=', 'divisions.id')
            ->select('unions.id', 'unions.name', 'unions.slug', 'unions.bn_name', 'unions.url', 'upazilas.name as upzila_name', 'upazilas.bn_name as upzila_bn_name', 'districts.name as district_name', 'districts.bn_name as district_bn_name', 'divisions.name as division_name', 'divisions.bn_name as division_bn_name')
            ->get();

        return response()->json(['data' => $unions]);
    }

    public function unionDetails($slug)
    {
        $slug = strtolower($slug);
        $union = UnionModel::join('upazilas', 'unions.upazilla_id', '=', 'upazilas.id')
            ->join('districts', 'upazilas.district_id', '=', 'districts.id')
            ->join('divisions', 'districts.division_id', '=', 'divisions.id')
            ->select('unions.id', 'unions.name', 'unions.slug', 'unions.bn_name', 'unions.url', 'upazilas.name as upzila_name', 'upazilas.bn_name as upzila_bn_name', 'districts.name as district_name', 'districts.bn_name as district_bn_name', 'divisions.name as division_name', 'divisions.bn_name as division_bn_name')
            ->where('unions.slug', $slug)
            ->get();

        return response()->json(['data' => $union]);
    }

    public function divisionWiseUnionList($division)
    {
        $division = strtolower($division);
        $unions = UnionModel::join('upazilas', 'unions.upazilla_id', '=', 'upazilas.id')
            ->join('districts', 'upazilas.district_id', '=', 'districts.id')
            ->join('divisions', 'districts.division_id', '=', 'divisions.id')
            ->select('unions.id', 'unions.name', 'unions.slug', 'unions.bn_name', 'unions.url', 'upazilas.name as upzila_name', 'upazilas.bn_name as upzila_bn_name', 'districts.name as district_name', 'districts.bn_name as district_bn_name', 'divisions.name as division_name', 'divisions.bn_name as division_bn_name')
            ->where('divisions.slug', $division)
            ->get();

        return response()->json(['data' => $unions]);
    }

    public function districtWiseUnionList($district)
    {
        $district = strtolower($district);
        $unions = UnionModel::join('upazilas', 'unions.upazilla_id', '=', 'upazilas.id')
            ->join('districts', 'upazilas.district_id', '=', 'districts.id')
            ->join('divisions', 'districts.division_id', '=', 'divisions.id')
            ->select('unions.id', 'unions.name', 'unions.slug', 'unions.bn_name', 'unions.url', 'upazilas.name as upzila_name', 'upazilas.bn_name as upzila_bn_name', 'districts.name as district_name', 'districts.bn_name as district_bn_name', 'divisions.name as division_name', 'divisions.bn_name as division_bn_name')
            ->where('districts.slug', $district)
            ->get();

        return response()->json(['data' => $unions]);
    }

    public function upzilaWiseUnionList($upazila)
    {
        $upazila = strtolower($upazila);
        $unions = UnionModel::join('upazilas', 'unions.upazilla_id', '=', 'upazilas.id')
            ->join('districts', 'upazilas.district_id', '=', 'districts.id')
            ->join('divisions', 'districts.division_id', '=', 'divisions.id')
            ->select('unions.id', 'unions.name', 'unions.slug', 'unions.bn_name', 'unions.url', 'upazilas.name as upzila_name', 'upazilas.bn_name as upzila_bn_name', 'districts.name as district_name', 'districts.bn_name as district_bn_name', 'divisions.name as division_name', 'divisions.bn_name as division_bn_name')
            ->where('upazilas.slug', $upazila)
            ->get();

        return response()->json(['data' => $unions]);
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
