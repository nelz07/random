<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PersonsImport;
use Maatwebsite\Excel\Facades\Excel;

class PersonController extends Controller
{
    public function import(Request $request){
        $request->validate([
            'list'=>'required | mimes:xlsx,xls,csv'
        ]);

        $file = $request->file('list');
        Excel::import(new PersonsImport, $file);
        return;
    }

    public function showForm(){
        return view('upload-form');
    }
}
