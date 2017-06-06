<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//Phòng khám
class ClinicController extends Controller
{
    public function index()
    {
        $clinics = Clinic::paginate(10);
        return view('clinic.index', compact('clinics'));
    }

    public function autocomplete(Request $request)
    {
        $data = Clinic::where('name', 'LIKE', '%' . $request->input('query') . '%')->get();
        echo '<ul id="country-list" class="col-md-3" style="width: inherit">';
        foreach ($data as $k) {
            echo '<li>' . $k['name'] . '</li>';
        }
        echo '</ul>';
//        return response()->json($data);
    }
}
