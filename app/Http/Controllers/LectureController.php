<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index(){
        $request = ModelsRequest::where('lecture_acceptance', false)->get();
        return view('dashboard.lecture.listrequest', compact('request'));
    }
    public function viewRequest($id){
        $request = ModelsRequest::where('id', $id)->get();
        return view('dashboard.lecture.viewrequest', compact('request'));
    }

    public function index_dosbing(){
        $request = ModelsRequest::where('dosbing_redy', false)->get();
        return view('dashboard.lecture-dosbing.listrequest', compact('request'));
    }

    public function viewRequestDosbing($id){
        $request = ModelsRequest::where('id', $id)->get();
        return view('dashboard.lecture-dosbing.viewrequest', compact('request'));
    }

    public function acceptDosbing($id){
        $request = ModelsRequest::where('id', $id)->update([
            'dosbing_redy'=>1
        ]);
        return redirect('/dashboard_dosbing');
    }

    public function rejectDosbing(Request $request, $id){
        ModelsRequest::where('id', $id)->update([
            'dosbing_ready'=>2,
            'note_lecture'=>$request->note_lecture
        ]);
        return redirect('/dashboard_dosbing');
    }

    public function index_dospeng(){
        $request = ModelsRequest::where('dospeng_redy', false)->get();
        return view('dashboard.lecture-dospeng.listrequest', compact('request'));
    }

    public function viewRequestDospeng($id){
        $request = ModelsRequest::where('id', $id)->get();
        return view('dashboard.lecture-dospeng.viewrequest', compact('request'));
    }

    public function acceptDospeng($id){
        $request = ModelsRequest::where('id', $id)->update([
            'dospeng_redy'=>1
        ]);
        return redirect('/dashboard_dospeng');
    }
    
    public function rejectDospeng(Request $request, $id){
        ModelsRequest::where('id', $id)->update([
            'dospeng_ready'=>2,
            'note_lecture'=>$request->note_lecture
        ]);
        return redirect('/dashboard_dospeng');
    }

    public function accept($id){
        ModelsRequest::where('id', $id)->update([
            'lecture_acceptance'=>1
        ]);
        return redirect('/dashboard_lecture');
    }
    
    public function reject(Request $request, $id){
        ModelsRequest::where('id', $id)->update([
            'lecture_acceptance'=>2,
            'note_lecture'=>$request->note_lecture
        ]);
        return redirect('/dashboard_lecture');
    }
}

   
