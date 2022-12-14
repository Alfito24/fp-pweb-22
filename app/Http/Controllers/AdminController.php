<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Request as ModelsRequest;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.template');
    }
    public function adduser(){
        return view('dashboard.addUser');
    }
    public function storeUser(Request $request){
        $user = new User;
        $validatedData=  $request->validate([
             'password' => 'required|min:8|max:20',
         ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $file = $request->file('photo');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        $user->first_name = $request->first_name;
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
        $user->password = $validatedData['password'];
        $user->sex = $request->sex;
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
    public function listUser(){
        $users = User::all();
        return view('dashboard.listUser', compact('users'));
    }
    public function hapus($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('/dashboard/listuser');
    }
    public function edit($id){
       $user = User::where('id', $id)->get();
        return view('dashboard.editUser', compact('user'));
    }
    public function update(Request $request, $id){
        $user = DB::table('users')->where('id', $id);
        $user->update([
                    'first_name' => $request->first_name,
                    'middle_name' => $request->middle_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'address' => $request->address,
                    'nik' => $request->nik,
                    'registration_number' => $request->registration_number,
                    'group_id' => $request->group_id,
                    'phone_number' => $request->phone_number,
                    'birth_date' => $request->birth_date,
                    'place_of_birth' => $request->place_of_birth,
                    'sex' => $request->sex,
                    'religion' => $request->religion,
                    'blood_type' => $request->blood_type,
            ]);
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $nama_file = $file->getClientOriginalName();
               // isi dengan nama folder tempat kemana file diupload
                $file->move('data_file',$nama_file);
                $user->update([
                        'gambar_produkMitra' => $nama_file,
                ]);}
                return redirect('/dashboard/listuser');
    }
    public function index2(){
        $request = ModelsRequest::where('lecture_acceptance', 1)->where('admin_acceptance', 0)->get();
        return view('dashboard.admin.listrequest', compact('request'));
    }
    public function viewRequest($id){
        $request = ModelsRequest::where('id', $id)->get();
        return view('dashboard.admin.viewrequest', compact('request'));
    }
    public function accept($id){
        ModelsRequest::where('id', $id)->update([
            'admin_acceptance'=>1
        ]);
        return redirect('/dashboard_admin');
    }
    public function reject(Request $request, $id){
        ModelsRequest::where('id', $id)->update([
            'admin_acceptance'=>2,
            'note_admin'=>$request->note_admin
        ]);
        return redirect('/dashboard_admin');
    }

    public function scheduleIndex(){
        $requests = ModelsRequest::where('kalab_acceptance', 1)->get();
        return view('dashboard.admin.listsetSchedule', compact('requests'));
    }

    public function viewRequestSchedule($id){
        $request = ModelsRequest::where('id', $id)->get();
        return view('dashboard.admin.viewrequestSchedule', compact('request'));
    }

    public function setSchedule(Request $request, $id){
        ModelsRequest::where('id', $id)->update([
            'schedule' => $request->schedule
        ]);
        return redirect('/dashboard_admin/schedule');
    }
}
