<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function create(Request $request){
        $result = DB::table('contacts')
            ->insert(['name'=>$request->input('name'),
                      'email'=>$request->input('email'),
                       'phone'=>$request->input('phone'),
                        'address'=> $request->input('address')]);
        return redirect('/contacts');

    }
    function view(){

        return view('index');
    }
}
