<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\QuestionPaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q    = $request->q;
        $type = $request->type;
        $qps = QuestionPaper::where('status', 1)
            ->when($type == 'name', function ($query) use ($q){
                $query->where('name', 'like', '%' . $q . '%');
            })
            ->when($type == 'code', function ($query) use ($q){
                $query->where('code', 'like', '%' . $q . '%');
            })
            ->when($type == 'year', function ($query) use ($q){
                $query->where('year', 'like', '%' . $q . '%');
            })
            ->when($type == 'degree', function ($query) use ($q){
                $query->where('degree', 'like', '%' . $q . '%');
            })
            ->latest()
            ->paginate();
        return view('user.home', compact('qps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
