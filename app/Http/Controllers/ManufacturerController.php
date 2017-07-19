<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use DB;

class ManufacturerController extends Controller {

    public function createManufacturer() {

        return view('admin.manufacturer.createManufacturer');
    }

    public function saveManufacturer(Request $request) {

        $this->validate($request, [
            'manufacturersName' => 'required',
            'manufacturersDescription' => 'required',
        ]);

        DB::table('manufacturers')->insert([
            'manufacturersName' => $request->manufacturersName,
            'manufacturersDescription' => $request->manufacturersDescription,
            'publicationStatus' => $request->publicationStatus,
        ]);
        //return redirect()->back();
        return redirect('/manufacturer/add')->with('message', 'Manufacturer info saved Successfully');
    }

    public function manageManufacturer() {
        $manufacturers = Manufacturer::all();
        return view('admin.manufacturer.manageManufacturer', ['manufacturers' => $manufacturers]);
    }

    public function editManufacturer($id) {

        $manufacturerById = Manufacturer::where('id', $id)->first();
        return view('admin.manufacturer.editManufacturer', ['manufacturerById' => $manufacturerById]);
    }

    public function updateManufacturer(Request $request) {

        $manufacturer = Manufacturer::find($request->id);
        $manufacturer->manufacturersName = $request->manufacturersName;
        $manufacturer->manufacturersDescription = $request->manufacturersDescription;
        $manufacturer->publicationStatus = $request->publicationStatus;
        $manufacturer->save();
        return redirect('/manufacturer/manage')->with('message', 'Manufacturer Information Updated Successfully');
    }

    public function deleteManufacturer($id) {

        $manufacturer = Manufacturer::find($id);
        $manufacturer->delete();
        return redirect('/manufacturer/manage')->with('message', 'Manufacturer Information deleted Successfully');
    }

}
