<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $JobApplications = JobApplication::orderby('id', 'DESC')->get();
       
        return view('home',
       ['JobApplications' => $JobApplications]
        
       );
    }
    
    public function create()
    {
        return view('addjob');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data = $request->validate([
        'name'=> 'required',
        'position' => 'required',
        'company' => 'required',
        'receiver' => 'required',
        'sender' => 'nullable'
        ]);
      $newJobApplication = JobApplication::create($data);
      
      
       return redirect(route('JobApplication.index'))->with(
          'success', 'Job Application Created Successfully'
          );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    
  public function edit(JobApplication $JobApplication)
    {
      return view('edit',['JobApplication' => $JobApplication]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobApplication $JobApplication)
    {
  $data = $request->validate([
        'name'=> 'required',
        'position' => 'required',
        'company' => 'required',
        'receiver' => 'required',
        'sender' => 'nullable'
        ]);
        $JobApplication->update($data);
        
        
   if($JobApplication->wasChanged()){
          return redirect(route('JobApplication.index'))->with(
          'success', 'Job Application Updated Successfully'
          );

        }
       else {
              return redirect(route('JobApplication.index'));
       }
  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $JobApplication)
    {
        $JobApplication->delete();
        return redirect(route('JobApplication.index'))->with(
          'success', 'Job Application Deleted Successfully'
          );
    }
}
