<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\Models\user;
use Illuminate\Support\Facades\Http;

class userController extends Controller
{
    //
    function loadView(){
        $data=['usama','furqan','bilal'];
        return view('user',["name"=>$data]);
    }

    function login(Request $rst){
        $data= $rst->input('username');
        $rst->session()->put('username',$data);
        // echo session('username');
        return redirect('profile');

    }
    // function index(){
    // //    print_r(DB::select("select * from user"));
    //     $data= http::get("https://reqres.in/api/users?page=1");
    //     return view('home',['collection'=>$data['data']]);
    // }

    function getdata(){
    //  $data= user::all();
     return DB::table('users')->min('id');
    //  ->where('id',9)
    //  ->update([
    //    'name'=>'qamer',
    //    'email'=>'qamer@gmail.com',
    //    'address'=>'sdk'
    //  ]);
     
    //  $result = json_decode($data, true);
    //  return view('home',['collection'=>$data]);
    }
    // function delete($id){
    //     $data= user::find($id);
    //     $data->delete();
    //     return redirect('list');
    // }
    // function showdata($id){
    //   $data=user::find($id);
    //   return view('update',['data'=>$data]);
    // }
    // function update(Request $res){
    //     $data=user::find($res->id);
    //     $data->name=$res->input('name');
    //     $data->email=$res->input('email');
    //     $data->address=$res->input('address');
    //     $data->save();
    //     return redirect('list');

    // }
}
