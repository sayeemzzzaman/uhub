<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaperController extends Controller
{

    public function indexPaper()
    {
        $owner = Auth::user()->uiuid;
        return view('scholarlywork.paper_index', [
            'papers' => Paper::latest()->filter(request(['search','dept']))->paginate(10),
            'my_papers' => Paper::where('owner', $owner)->latest()->get(),
            'Contribs' => Paper::latest()->get()
        ]);
    }

    public function showPaper($id)
    {

        $owner = Auth::user()->uiuid;
        return view('scholarlywork.paper_show', [
            'paper' => Paper::findOrFail($id),
            'comments' => Comment::where('projectId', $id)->latest()->get()
        ]);
    }

    public function addPaper()
    {
        return view('scholarlywork.paper_add');
    }

    public function storePaper(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contributors' => 'required',
            'dept' => 'required',
            'paperFile' => 'required',
            'status' => 'required'
        ]);

        $uiuid = Auth::user()->uiuid;

        if ($request->file('paperFile')) {
            $file = $request->file('paperFile');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/files'), $fileName);
        }

        Paper::insert([
            'name' => $request->name,
            'github' => $request->github,
            'Scholar' => $request->Scholar,
            'owner' => $uiuid,
            'paperLink' => $fileName,
            'bio' => $request->bio,
            'contributors' => $request->contributors,
            'dept' => $request->dept,
            'status' => $request->status,
        ]);



        $notification = array(
            'message' => 'Requisition added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('student.paper.index')->with($notification);
    }

    public function editPaper($id)
    {
        $paper = Paper::findOrFail($id);
        return view('scholarlywork.paper_edit',[
            'paper' => $paper,
            'comments' => Comment::where('projectId', $id)
            ->latest()->get()
        ]);
    }

    public function updatePaper(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Paper::findOrFail($request->id)->update([
            'name' => $request->name,
            'github' => $request->github,
            'scholar' => $request->scholar,
            'bio' => $request->bio,
            'contributors' => $request->contributors,
        ]);

        return redirect()->back();
    }


    public function deletePaper($id)
    {
        Paper::findOrFail($id)->delete();

        $notification = array(
            'message' => 'paper Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}
