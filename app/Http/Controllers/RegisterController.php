<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){
        $user = new User;
        // $validatedData=  $request->validate([
        //     'nik'=>'required|max:16|min:16',
        //      'full_name' => 'required',
        //      'email' => 'required|email:dns|unique:users',
        //      'phone_number'=>'required|min:10|max:13',
        //      'password' => 'required|min:8|max:20',
        //  ]);
        // $validatedData['password'] = Hash::make($validatedData['password']);
        // User::create($validatedData);
        $file = $request->file('photo');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $user->full_name = $request->full_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->nik = $request->nik;
        $user->photo = $nama_file;
        $user->registration_number = $request->registration_number;
        $user->group_id = $request->group_id;
        $user->phone_number = $request->phone_number;
        $user->birth_date = $request->birth_date;
        $user->place_of_birth = $request->place_of_birth;
        // $user->password = $validatedData['password'];
        $user->sex = $request->sex;
        $user->password = $request->password;
        $user->religion = $request->religion;
        $user->blood_type = $request->blood_type;
         if($request->role == 'student'){
            $user->isStudent = true;
        }
         elseif($request->role == 'admin'){
            $user->isAdmin = true;
        }
         else{
            $user->isLecture = true;
        }
            $user->save();
         return redirect('/');
        }
}
