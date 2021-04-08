<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\controllers\candidate;
use App\Models\vote;
class candidate extends Controller
{
    function addcandidate(Request $request)
    {
        $candidates=new vote();
        $candidates->fname=$request->input('fname');
        $candidates->lname=$request->input('lname');
        $candidates->gender=$request->input('gender');
        $candidates->age=$request->input('age');
        $candidates->department=$request->input('department');
        $candidates->email=$request->input('email');
        $candidates->phone=$request->input('phone');
        $candidates->year=$request->input('year');

        $candidates->save();
        return "candidates registered successfully";
    }
    function deletecandidate($id){
        vote::where('id',$id)->delete();
        return "candidate is delete successfully";
    }
    function updatecandidate(Request $req)
    {
        $candidates=vote::find($req->id);
        $candidates->fname=$req->fname;
        $candidates->lname=$req->lname;
        $candidates->gender=$req->gender;
        $candidates->age=$req->age;
        $candidates->department=$req->department;
        $candidates->email=$req->email;
        $candidates->phone=$req->phone;
        $candidates->year=$req->year;
        $candidates->save();
      return "candidate is  update successfully";
    }
    function findcandidate($id){
        $vote=vote::where('id',$id)->first();
        return $vote;
    }
    function showall()
    {
        $vote=new vote();
        return $vote->get();
    }
}
