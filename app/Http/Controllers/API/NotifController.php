<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProjectTimeline;
use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function index()
    {
        $data = ProjectTimeline::all(); 
        return view('project.input', compact('data'));
        
    }

    public function store(Request $request)
    {
        

    }
    
    public function edit($id)
    {
   

        
    }

  
    public function update(Request $request, $id)
    {
      
    }

   
    public function destroy($id)
    {
      
        
    }

}
