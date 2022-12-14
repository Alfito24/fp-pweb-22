<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Lecture;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){

        $validatedData=  $request->validate([
              'nik'=>'required|max:16|min:16',
             'first_name' => 'required',
             'email' => 'required|email:dns|unique:users',
             'phone_number'=>'required|min:10|max:13',
             'password' => 'required|min:8|max:20',
             'role' => 'required',
         ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = new User();
        $user->fill([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'birth_date' => $request->birth_date,
            'place_of_birth' => $request->place_of_birth,
            'nik' => $request->nik,
            'unit_name' => $request->unit_name,
            'address' => $request->address,
            'registration_number' => $request->registration_number,
            'group_id' => $request->group_id,
            'sex' => $request->sex,
            'religion' => $request->religion,
            'blood_type' => $request->blood_type,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            ]);
        $request->session()->put('user', $user);
        // dd($user);
        if ($user->role == 'student'){
            return redirect('/register-student');
        }
        elseif ($user->role == 'admin' ){
            return redirect('/register-staff');
        }
        else{
            return redirect('/register-lecturer');
        }

    }


        public function index2(Request $request)
        {
            $user = $request->session()->get('user');
            if($user->role == 'student'){
                return view('register-student', compact('user'));
            }
            elseif ($user->role == 'admin' ){
                return view('register-staff', compact('user'));
            }
            else{
                return view('register-lecturer', compact('user'));
            }

        }

        public function store2(Request $request)
        {
            $user = $request->session()->get('user');
            if($user->role == 'student'){
            $user = $request->session()->get('user');
            $user->save();
            $student = new Student();
        $student->previous_degree = $request->previous_degree;
        $student->highest_education = $request->highest_education;
        $student->origin_address = $request->origin_address;
        $student->level = $request->level;
        $student->laboratorium = $request->laboratorium;
        $student->entry_date = $request->entry_date;
        $student->marital_status = $request->marital_status;
        $student->student_type = $request->student_type;
        $student->student_status = $request->student_status;
        $student->parent_address = $request->parent_address;
        $student->parent_phone = $request->parent_phone;
        $student->alternate_email_address = $request->alternate_email_address;
        $student->facebook_address = $request->facebook_address;
        $student->instagram_address = $request->instagram_address;
        $student->twitter_address = $request->twitter_address;
        $student->whatsapp_address = $request->whatsapp_address;
        $student->student_role = $request->student_role;
        $user->student()->save($student);
        $request->session()->forget('user');
        return redirect('/login');
        }

            elseif($user->role == 'admin'){
            $user = $request->session()->get('user');
            $user->save();
            $staff = new Staff;
            $staff->marital_status = $request->marital_status;
            $staff->position = $request->position;
            $staff->rank = $request->rank;
            $staff->class = $request->class;
            $staff->functional = $request->functional;
            $staff->highest_education = $request->highest_education;
            $staff->after_name_degree = $request->after_name_degree;
            $staff->before_name_degree = $request->before_name_degree;
            $staff->staff_status = $request->staff_status;
            $user->staff()->save($staff);
            dd($staff);
            $request->session()->forget('user');
            return redirect('/login');
            }

            else{
                $user = $request->session()->get('user');
                $user->save();
                $lecture = new Lecture();
                $lecture->country = $request->country;
                $lecture->marital_status = $request->marital_status;
                $lecture->position = $request->position;
                $lecture->rank = $request->rank;
                $lecture->class = $request->class;
                $lecture->functional = $request->functional;
                $lecture->nidn = $request->nidn;
                $lecture->highest_education = $request->highest_education;
                $lecture->before_name_title = $request->before_name_title;
                $lecture->after_name_title = $request->after_name_title;
                $lecture->laboratorium = $request->laboratorium;
                $lecture->lecture_status = $request->lecture_status;
            $lecture->lecture_role = $request->lecture_role;
            $user->lecture()->save($lecture);
            $request->session()->forget('user');
            return redirect('/login');
            }
        }
}
