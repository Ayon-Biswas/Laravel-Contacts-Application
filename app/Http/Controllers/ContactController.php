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
    function index( Request $request){
        $sort = $request->query('sort');

//        $contacts = DB::table('contacts')->get()->toArray();
//        return view('index',compact('contacts'));

        if ($sort == 'name') {
            $contacts = DB::table('contacts')->orderBy('name')->get();
        }
        elseif ($sort == 'date') {
            $contacts = DB::table('contacts')->orderBy('created_at', 'desc')->get();
        }
        else {
            $contacts = DB::table('contacts')->get()->toArray();
        }

        return view('index', compact('contacts'));

    }
}
