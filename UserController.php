<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
class UserController extends Controller
{

    
    public function create(){
        return view('registration');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'confirmpassword'=>'required|same:password',
            'image'=>'required',
        ]);

        $student=new User();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password=Hash::make($request->password);
        $student->confirmpassword=$request->confirmpassword;

        if($request->hasFile('image')){
            $image=$request->image;
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('/images');
            $image->move($path, $filename);

            $student ->image= $filename;
        }
        $student->save();

        return redirect()->route('login');
    }

    public function dashboard(){
        $students=User::all();

        return view('dashboard', compact('students'));
    }

    public function edit($id){
        $student=User::find($id);

        return view('edit', compact('student'));
    }

    public function update(Request $request,$id){
        $student=User::find($id);
        $student->name=$request->name;
        $student->email=$request->email;

        if($request->hasFile('image')){
            $image=$request->image;
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('/images');
            $image->move($path, $filename);

            $student ->image= $filename;
        $student->save();

        return redirect()->route('dashboard');
    }
}

    public function delete($id){
        $student=User::find($id);

        $student->delete();

        return redirect()->route('dashboard');
    }

    public function login(){
        return view('login');
    }

    public function savelogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials= $request->only('email', 'password');
        if(Auth::attempt($credentials)){
           
            return redirect()->route('loggedin');
        }
        else{
            dd('Not Login');
        }
    }
    public function loggedin(){
        return view('loggedin');
    }

    
}
