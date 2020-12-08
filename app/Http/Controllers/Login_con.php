<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Edit;

class Login_con extends Controller
{
    
        function addData(Request $req)
        {
            $edit = new Edit;
            $edit->na1 = $req->na1;
            $edit->na2 = $req->na2;
            $edit->na3 = $req->na3;
            $edit->save();
        return redirect ('list');
        
        }
        function list()
        {
            $data=Edit::all();
            return view ('list',['edits'=>$data]); 
               }
               function delete($id)
               {
                   $data=Edit::find($id);
                   $data->delete();
                   return redirect ('list'); 
              }
             function showdata($id)
                 {

                   $data= Edit::find($id);
                   return view ('update',['data'=>$data]);
                 }
                 function up(request $req)
                 {
                     $data=Edit::find($req->id);
                     $data->na1=$req->na1;
                     $data->na2=$req->na2;
                     $data->na3=$req->na3;
                     $data->save();
                     return redirect ('list');
                 }

             
    function login(){
        return view("/login");
}
function register(){
    return view("/register");

}
function logout(){
    if (session()->has('LoggedUser')){
       session()->pull('LoggedUser');
        return redirect('login');
            }}

function create(Request $request)
    {
        
        $request->validate([
         'name'=>'required',
         'email' => 'required|email|unique:users',
         'password'=>'required|min:5|max:12'
        ]);
        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $query = $user->save();
        if($query){
            return back()->with('success','You did hell of a Job');

        }else{return back()->with('Login Failed','You did wrong');

        }
    }
        function check(Request $request){
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:5|max:12'
            ]);
        $user = User::where('email','=',$request->email)->first();

        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('LoggedUser',$user->id);
                return redirect('profile');
                
            }else{
                return back()->with('fail','Wrong Password ');
            }
            
        }
        else{
            return back()->with('Login Failed','You do not have any account');
        }
        
       }
        function profile(){
            if(session()->has('LoggedUser') ){
                $user = User::where('id','=',session('LoggedUser'))->first();
                $data=[
                    'LoggedUserInfo'=>$user
                ];
            }
            return view('admin.profile',$data);
        }
        
}
    
