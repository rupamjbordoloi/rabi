<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionPaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class QuestionPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q_papers = QuestionPaper::latest()->paginate();
        return view('admin.question-paper.index', compact('q_papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question-paper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file   = $request->file('file');
        $folder = date('Y-m');
        $path   = Storage::put($folder, $file);
        $data   = [
            'code'   => $request->code,
            'name'   => $request->name,
            'year'   => $request->year,
            'degree' => $request->degree,
            'path'   => 'uploads/' . $path,
            'status' => 1,
        ];

        $qp = QuestionPaper::create($data);
        $request->session()->flash('success', 'Added successfully');
        return redirect()->route('admin.question-paper.show', $qp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionPaper $qp)
    {
        return view('admin.question-paper.show', compact('qp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionPaper $qp)
    {
        return view('admin.question-paper.edit',compact('qp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionPaper $qp)
    {
        if($request->hasFile('file')){
            $file   = $request->file('file');
            $folder = date('Y-m');
            $path   = Storage::put($folder, $file);
            $qp->path = 'uploads/' . $path;
        }
        $qp->code = $request->code;
        $qp->name = $request->name;
        $qp->year = $request->year;
        $qp->degree = $request->degree;
        $qp->save();
        $request->session()->flash('success', 'Updated successfully');
        return redirect()->route('admin.question-paper.show', $qp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, QuestionPaper $qp)
    {
        $qp->delete();
        $request->session()->flash('success', 'Deleted successfully');
        return redirect()->route('admin.question-paper.index');
    }

    public function deactivate(Request $request, QuestionPaper $qp)
    {
        $qp->status = 0;
        $qp->save();
        $request->session()->flash('success', 'Deactivated successfully');
        return back();
    }

    public function activate(Request $request, QuestionPaper $qp)
    {
        $qp->status = 1;
        $qp->save();
        $request->session()->flash('success', 'Deactivated successfully');
        return back();
    }
}
