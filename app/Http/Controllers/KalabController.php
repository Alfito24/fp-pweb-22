<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\Lecture;
use Illuminate\Http\Request;

class KalabController extends Controller
{
    public function index(){
        $request = ModelsRequest::where('kalab_acceptance', 0)->get();
        return view('dashboard.kalab.listrequest', compact('request'));
    }
    public function viewRequest($id){
        $request = ModelsRequest::where('id', $id)->get();
        $dospeng = Lecture::where('lecture_role', 'examiner')->get();
        return view('dashboard.kalab.viewrequest', compact('request', 'dospeng'));
    }
    public function accept(Request $request, $id){
        ModelsRequest::where('id', $id)->update([
            'kalab_acceptance'=>1,
            'dospeng_choice'=>$request->dospeng_choice
        ]);
        return redirect('/dashboard_kalab');
    }
    public function reject(Request $request, $id){
        ModelsRequest::where('id', $id)->update([
            'kalab_acceptance'=>2,
            'note_kalab'=>$request->note_kalab
        ]);
        return redirect('/dashboard_kalab');
    }
}
