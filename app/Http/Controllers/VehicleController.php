<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function index()
    {
        //Kaedah memanggil table
        $vehicles = Vehicle::get();
        // $id = 3;
        // $vehicles = DB::select("select * from vehicle where id = " . $id);
        // $vehicles = Vehicle::getVehicleDetail($id);
        // dd($vehicles);
        //$test1 = 'Test1';
        //$vehicles = Vehicle::where('id', 1)->get();

        //Perbezaan first & get

        //get - dalam bentuk array
        //$vehicles = Vehicle::select('brand','model')->where('id', 1)->get();

        //first - dalam bentuk semua rekod pertama sahaja.
        //$vehicles = Vehicle::select('brand','model')->where('id', 1)->first();

        //uji database berjaya atau tidak
        //dd - dump & die
        //dd($vehicles);

        //cara lain untuk semak database berjaya atau tidak
        //echo $vehicles;

        // kalau guna get
        //foreach ($vehicles as $row) {
        //    echo $row->brand;
        //}

        //kalau guna first
        //echo $vehicles->brand;


        //exit untuk paparan yang terakhir
        //exit();

        return view('vehicle.index', compact('vehicles'));
        //return view('vehicle.index', compact('vehicles','test1'));
    }

    public function create()
    {
        $edit = false;
        return view('vehicle.form', compact('edit'));
    }

    public function submit(Request $request)
    {
        $input = [];
        $input['brand'] = $request->brand;
        $input['model'] = $request->model;
        $input['type'] = $request->type;
        $input['year'] = $request->year;
        $input['status'] = 1;
        $input['created_at'] = now();

        //dd($input);

        DB::beginTransaction();
        try{
            Vehicle::insert($input);
            DB::commit();
        } catch (\Exception $ex) {
            dd($ex);
            DB::rollBack();
        }



        //get ID dari data yang baharu masuk
        //$vehiclesId = Vehicle::insertGetId($input);

        //cara lain untuk insert
        // Vehicle::insert([
        //     'brand' => $request->brand,
        //     'model' => $request->model,
        //     'status' => 1,
        // ]);

        return redirect(route('vehicle.index'))->withSuccess('Vehicle Data Successfully Insert!');
    }

    public function edit($encrypId)
    {
        $id = Crypt::decrypt($encrypId);
        $edit = true;
        $vehicle = Vehicle::where('id', $id)->first();
        //dd($vehicle);
        return view('vehicle.form', compact('vehicle','edit'));
    }

    public function update(Request $request, $encrypId)
    {
        $id = Crypt::decrypt($encrypId);
        $input = [];
        $input['brand'] = $request->brand;
        $input['model'] = $request->model;
        $input['type'] = $request->type;
        $input['year'] = $request->year;
        $input['updated_at'] = now();

        // dd($request, 'The vehicle ID is = ' . $id);

        Vehicle::where('id',$id)->update($input);
        return redirect(route('vehicle.index'))->withSuccess('Vehicle Data Successfully Updated!');


    }

    public function delete($encrypId)
    {
        $id = Crypt::decrypt($encrypId);
        Vehicle::where('id', $id)->delete();
        return redirect(route('vehicle.index'))->withSuccess('Vehicle Data Successfully Deleted!');
    }

    public function softDelete($encrypId)
    {
        $id = Crypt::decrypt($encrypId);
        $input = [];
        $input['status'] = 0;
        $input['deleted_at'] = now();

        Vehicle::where('id', $id)->update($input);
        return redirect(route('vehicle.index'))->withSuccess('Vehicle Data Successfully Deleted!');
    }
}
