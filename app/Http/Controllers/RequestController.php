<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index(){
        return view('make_request');
    }
    public function store(Request $request){
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
      	// isi dengan nama folder tempat kemana file diupload
	    $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);
        ModelsRequest::create([
            'file'=>$nama_file,
            'student_id'=>1,
        ]);
        return redirect('/');
    }
}
