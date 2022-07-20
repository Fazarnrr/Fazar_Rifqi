<?php

namespace App\Http\Controllers;

use App\Models\ProjectTimeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InputController extends Controller
{
    public function index()
    {
        $data = ProjectTimeline::all();
        return view('project.input', compact('data'));
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
        try {
            $validate = Validator::make($request->all(), [
                "nama_institusi" => "required",
                "nama_project" => "required",
                "start_date" => "required",
                "finish_date" => "required",
                "sign_to" => "required",
               
            ],[
                "nama_institusi.required" => "Field tidak boleh kosong",
                "nama_project.required" => "Field tidak boleh kosong",
                "start_date.required" => "Field tidak boleh kosong",
                "finish_date.required" => "Field tidak boleh kosong",
                "sign_to.required" => "Field tidak boleh kosong",
               
            ]);
    
            if($validate->fails()) {
                
            return redirect()->route('input')
            ->with('error','Field tidak boleh kosong');
            }
    
            ProjectTimeline::create([
                "nama_institusi" => $request->nama_institusi,
                "nama_project" => $request->nama_project,
                "start_date" => $request->start_date,
                "finish_date" => $request->finish_date,
                "sign_to" => $request->sign_to,
                
            ]);

            return redirect('index');
    
            
        } catch(\Exception $e) {
            return response()->json($e->getMessage());
        }

           
                
    
                    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = ProjectTimeline::all()->find($id);
        return view('project.detail', compact('detail'));
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
