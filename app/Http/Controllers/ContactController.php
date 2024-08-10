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
    function show(Request $request){
        $id = $request->id;
        $contactShow = DB::table('contacts')->where('id', $id)->get()->toArray();

        return view('show', compact('contactShow'));
    }
    function showEditForm(Request $request){
        $id = $request->id;
        $showEditForm = DB::table('contacts')->where('id', $id)->get()->toArray();
        return view("edit",compact('showEditForm'));
    }
    function updateContact(Request $request){
        $result = DB::table('contacts')
            ->where('id','=',$request->id)
            ->update(['name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone'),
                'address'=> $request->input('address')]);
        return redirect('/contacts');
    }
}//$updateContact[0]->id
