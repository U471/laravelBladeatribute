<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\admin;

class admincontroler extends Controller
{
    //
    function addData(Request $res){
          $member=new user;
          $addAdmin=new admin;

          $member->name=$res->name;
          $member->email=$res->email;
          $member->address=$res->address;
          $member->save();

          $addAdmin->name=$res->name;
          $addAdmin->email=$res->email;
          $addAdmin->address=$res->address;
          $addAdmin->save();
         return redirect('addData');
    }
}
