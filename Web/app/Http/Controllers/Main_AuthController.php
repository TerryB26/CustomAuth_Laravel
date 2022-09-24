<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Main_AuthController extends Controller
{
    public function Login_view()
    {
        return view('login');
    }

    public function Register_view()
    {
        return view('register');
    }

    public function Register_user(Request $request)
    {
        $this->validate($request,([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]));

        $Create_User = new User();

        $Create_User->Name = $request->name;
        $Create_User->Surname = $request->surname;
        $Create_User->Email = $request->email;
        $Create_User->Password = Hash::make($request->password);

        $Store_Results = $Create_User->save();

        if($Store_Results)
        {
            return redirect(route('Dashboard'))->with('success','You Have Successfully Registered');
        }
        else
        {
            return back() ->with('fail','An Error Has Occured');
        }

    }



    public function Login_user(Request $request)
    {
        $this->validate($request,([
            'email'=>'required|email',
            'password'=>'required',
        ]));

        $Reg_User = User::where('Email','=',$request->email)->first();

       if(!$Reg_User)
       {
            return back() ->with('fail','The Email Is Not Of A Rgistered User');
       }
       else
       {
            if(hash::check($request->password,$Reg_User->Password))
            {
                $request->session()->put('LoginID',$Reg_User->User_ID);
                return redirect(route('Dashboard'))->with('success','You Have Successfully Registered');
            }
            else
            {
                return back() ->with('fail','Incorrect Password');
            }

       }




    }

    public function Dashboard_View()
    {

        $User_Data=array();

        if(session()->has('LoginID'))
        {
            $User_Data=User::where('User_ID','=',session()->get('LoginID'))->first();
        }


        return view('dashboard',compact('User_Data'));
    }


    public function Logout_user()
    {
        if(Session()->has('LoginID'))
        {
            Session()->pull('LoginID');
            return redirect(route('Login'))->with('Logout_Success','Signed Out Successfully');
        }
    }


}
