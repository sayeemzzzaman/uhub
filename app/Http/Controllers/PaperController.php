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
        return view('scholarlywork.project_edit',[
            'paper' => Paper::findOrFail($id),
            'comments' => Comment::where('projectId', $id)
            ->latest()->get()
        ]);
    }

    public function updatePaper(Request $request)
    {
        // Logic for the updatePaper route
    }

    public function deletePaper($id)
    {
        // Logic for the deletePaper route
    }
}
