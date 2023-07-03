<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'All Brand List';

        $medicine_list = DB::table('brands')
                ->select('brands.id', 'brands.brand_name', 'type.type_name', 'brands.strength', 'brands.packsize', 'generic.generic_name', 'company.company_name')
                ->leftJoin('generic','brands.generic_id','=','generic.id')
                ->leftJoin('company','brands.company_id','=','company.id')
                ->leftJoin('type','brands.type_id','=','type.id')
                ->paginate(10);
        return view('brand.index',compact('title','medicine_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create New Brand';
        $generic_name = DB::table('generic')->select('id','generic_name')->get();
        $company_name = DB::table('company')->select('id','company_name')->get();
        $type_name = DB::table('type')->select('id','type_name')->get();

        return view('brand.create',compact('title','generic_name','company_name','type_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        
        $brand->brand_name = $request->input('brand_name');
        $brand->packsize = $request->input('packsize');
        $brand->generic_id = $request->input('generic_name');
        $brand->company_id = $request->input('company_name');
        $brand->type_id = $request->input('type_name');
        $brand->strength = $request->input('strength');
        $brand->price = $request->input('price');
        $brand->status = $request->input('status');
        $brand->created_by = 1;
        $brand->created_at = date('Y-m-d');

        $result = $brand->save();

        if($result){
            return redirect('brand.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Single Group/Generic';
        $brand_name = DB::table('brands')
                ->select('brands.id', 'brands.brand_name', 'type.type_name', 'brands.strength', 'brands.packsize', 'brands.status', 'generic.generic_name', 'company.company_name')
                ->leftJoin('generic','brands.generic_id','=','generic.id')
                ->leftJoin('company','brands.company_id','=','company.id')
                ->leftJoin('type','brands.type_id','=','type.id')
                ->where('brands.id','=',$id)->first();
        return view('brand.show',compact('title','brand_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Brand Name';
        $brand_name = DB::table('brands')->where('brands.id','=',$id)->first();
        $generic_name = DB::table('generic')->select('id','generic_name')->get();
        $company_name = DB::table('company')->select('id','company_name')->get();
        $type_name = DB::table('type')->select('id','type_name')->get();
        return view('brand.edit',compact('title','brand_name','generic_name','company_name','type_name','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        $brand->brand_name = $request->input('brand_name');
        $brand->packsize = $request->input('packsize');
        $brand->generic_id = $request->input('generic_name');
        $brand->company_id = $request->input('company_name');
        $brand->type_id = $request->input('type_name');
        $brand->strength = $request->input('strength');
        $brand->price = $request->input('price');
        $brand->status = $request->input('status');
        $brand->updated_by = 1;
        $brand->updated_at = date('Y-m-d');

        $result = $brand->save();

        if($result){
            return redirect('brands');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::table('brands')->where('id',$id)->delete();
        if($result){
            return redirect('brands');
        }
    }
}
