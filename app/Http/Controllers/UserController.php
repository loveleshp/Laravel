<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Members;

class UserController extends Controller
{
    function index(){
        return DB::select("select * From stud");
    }

    function show(){
        $data = Members::paginate(3);
        return view('users',['stud'=>$data]);
    }

    function delete($id){
        $data = Members::find($id);
        $data->delete();
        return redirect('users');
    }

    function addData(Request $rq){
        $Members = new Members;
        $Members->id=$rq->id;
        $Members->firstname=$rq->firstname;
        $Members-> save();
        return redirect('users');

    }

    function showData($id){
        $data = Members::find($id);
        return view('update',['data'=>$data]);
    }

    function update(Request $rq){
        $data = Members::find($rq->id);
        $data->firstname=$rq->firstname;
        $data->save();
        return redirect('users');
    }
}


