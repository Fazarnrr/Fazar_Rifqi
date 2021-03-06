<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProjectTimeline;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectTimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProjectTimeline::orderBy("created_at", "DESC")
        ->paginate(perPage:10);
        
        return response()->json([
            "status" => true,
            "data"  => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

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
                ->with('error','Field Tidak Boleh kosong');
            }
    
            ProjectTimeline::create([
                "nama_institusi" => $request->nama_institusi,
                "nama_project" => $request->nama_project,
                "start_date" => $request->start_date,
                "finish_date" => $request->finish_date,
                "sign_to" => $request->sign_to,
               
            ]);
    
            return response()->json([
                "status" =>true,
                "message" => "project timeline berhasil dibuat berhasil dibuat" 
            ]);
        } catch(\Exception $e) {
            return response()->json($e->getMessage());
        }

    }
    
    public function edit($id)
    {
        $getOneById = ProjectTimeline::find($id);

        return response()->json([

       "status" => true,
       "data" => $id

        ]);
    }


    public function show($id)
    {
        $detail = ProjectTimeline::all()->find($id);
        return view('project.detail', compact('detail'));
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
        $wams = ProjectTimeline::findOrfail($id);
        try
        {
        
        $validate = validator::make($request->all(), [

            "nama_institusi" => "required",
            "nama_project" => "required",
            "nama_sales" => "required",
            "start_date" => "required",
            "finish_date" => "required",
            "sign_to" => "required"
        
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors(), 442);
        }

        $wams->update([
            "nama_institusi" => $request->nama_institusi,
                "nama_project" => $request->nama_project,
                "nama_sales" => $request->nama_sales,
                "start_date" => $request->start_date,
                "finish_date" => $request->finish_date,
                "sign_to" => $request->sign_to
        ]);
        
        return response()->json([
            "status" => true,
            "message" => "data berhasil diubah"
        ]);
        } catch(\Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wams = ProjectTimeline::find($id);
        $wams->delete();

        return response()->json([
            "status" => true,
            "data" => "data berhasil dihapus"
        ]);
    }

}
