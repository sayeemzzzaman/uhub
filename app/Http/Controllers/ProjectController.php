<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Files;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function indexProjects()
    {
        $owner = Auth::user()->uiuid;
        return view('scholarlywork.project_index', [
            'projects' => Project::latest()->filter(request(['search','dept']))->paginate(10),
            'my_projects' => Project::where('owner', $owner)->latest()->get(),
            'Contribs' => Project::latest()->get()
        ]);
    }

    public function showProjects($id)
    {
        $owner = Auth::user()->uiuid;
        return view('scholarlywork.project_show', [
            'project' => Project::findOrFail($id),
            'files' => Files::where('projectId', $id)->latest()->get(),
            'comments' => Comment::where('projectId', $id)->latest()->get()
        ]);
    }

    public function addFile(Request $request)
    {

        $request->validate([
            'file' => 'required',
        ]);
        $uiuid = Auth::user()->uiuid;
        
        if ($request->file('logo')) {
            $file = $request->file('logo');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/files'), $fileName);
        }

        Project::insert([
            'projectId' => $request->id,
            'name' => $request->name,
            'link' => $file
        ]);
    }
    public function addProjects()
    {
        return view('scholarlywork.project_add');
    }

    public function storeProjects(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contributors' => 'required',
            'dept' => 'required',
            'status' => 'required'
        ]);
        $uiuid = Auth::user()->uiuid;

        Project::insert([
            'name' => $request->name,
            'github' => $request->github,
            'Scholar' => $request->Scholar,
            'owner' => $uiuid,
            'bio' => $request->bio,
            'contributors' => $request->contributors,
            'dept' => $request->dept,
            'status' => $request->status,
        ]);



        $notification = array(
            'message' => 'Requisition added successfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('student.Projects.index')->with($notification);
    }

    public function updateComment(Request $request){
        $request->validate([
            'message' => 'required',
        ]);

        $uiuid = Auth::user()->uiuid;
        $name = Auth::user()->name;
        dd($request);
        Comment::insert([
            'projectId' => $request->id,
            'userId' => $uiuid,
            'name' => $name,
            'message' => $request->message
        ]);
        return redirect()->back();
    }
    public function editProjects($id)
    {
        $project = Project::findOrFail($id);
        return view('scholarlywork.project_edit',[
            'project' => $project,
            'files' => Files::latest()->get(),
            'comments' => Comment::where('projectId', $id)
            ->latest()->get()
        ]);
    }

    public function updateProjects(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        Project::findOrFail($request->id)->update([
            'name' => $request->name,
            'github' => $request->github,
            'Scholar' => $request->Scholar,
            'bio' => $request->bio,
            'contributors' => $request->contributors,
        ]);
        return redirect()->route('student.Projects.index');
    }

    public function deleteProjects($id)
    {
        Project::findOrFail($id)->delete();

        $notification = array(
            'message' => 'project Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteFile($id)
    {
        Files::findOrFail($id)->delete();

        $notification = array(
            'message' => 'File Deleted successfuly',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }
}
