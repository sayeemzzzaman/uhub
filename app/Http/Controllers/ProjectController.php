<?php

namespace App\Http\Controllers;


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
            'project' => Project::findOrFail($id)
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

    public function editProjects($id)
    {
        // Implement the logic to show the project editing form here
    }

    public function updateProjects(Request $request)
    {
        // Implement the logic to update the project here
    }

    public function deleteProjects($id)
    {
        // Implement the logic to delete the project here
    }
}
