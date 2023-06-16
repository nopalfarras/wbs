<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public function index()
    {
        
        return view('dashboard.index',[
            'title' => 'dashboard',
            'datas' => data::all()->where('status',1)
            
        ]);

        
    }

    public function show(data $data)
    {
        return view('data',[
            "title" => "single data",
            "data" => $data
        ]);
    }

    public function edit_status($id)
    {
        DB::table('data')->where('id',$id)->update([
            'status' => '0',
        ]);
        return redirect('/dashboard');
    }

    // public function changestatus(request $request)
    // {
    //     $datas = Data::find($request->id);
    //     $datas->status = $request->status;
    //     $datas->save();
    // }
}
