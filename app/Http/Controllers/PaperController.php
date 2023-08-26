<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Paper;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaperController extends Controller
{

    public function indexPaper()
    {
        $owner = Auth::user()->uiuid;
        return view('scholarlywork.paper_index', [
            'projects' => Project::latest()->filter(request(['search','dept']))->paginate(10),
            'my_projects' => Project::where('owner', $owner)->latest()->get(),
            'Contribs' => Project::latest()->get()
        ]);
    }

    public function showPaper($id)
    {

        $owner = Auth::user()->uiuid;
        return view('scholarlywork.paper_show', [
            'projects' => Project::latest()->filter(request(['search','dept']))->paginate(10),
            'my_projects' => Project::where('owner', $owner)->latest()->get(),
            'comments' => Comment::where('projectId', $id)->latest()->get(),
            'Contribs' => Project::latest()->get()
        ]);
    }

    public function addPaper()
    {
        // Logic for the addPaper route
    }

    public function storePaper(Request $request)
    {
        // Logic for the storePaper route
    }

    public function editPaper($id)
    {
        // Logic for the editPaper route
    }

    public function updatePaper(Request $request)
    {
        // Logic for the updatePaper route
    }

    public function deletePaper($id)
    {
        // Logic for the deletePaper route
    }

    public function updateComment(Request $request)
    {
        // Logic for the updateComment route
    }
}
