<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$student=Student::get();
        return view('welcome',compact('student'));
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
        $request->validate([
		
		'name' => 'required',
		'dep' => 'required',
		'uid' => 'required',
		
		
		],[
		
		'name.required' => 'Please Input Your Name',
		'dep.required' => 'Please Input Your Department',
		'uid.required' => 'Please Input Your University ID',
		
		
		
		
		]);
		
		$Student=new Student;
		$Student->Name=$request->get('name');
		$Student->Dep=$request->get('dep');
		$Student->UID=$request->get('uid');
		$Student->Save();
		
		return back()->with('Success','Successfully Student Added');
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Student::find($id);
		return view('update',compact('edit'));
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
        $update=Student::find($id);
		$update->Name=$request->get('name');
		$update->Dep=$request->get('dep');
		$update->UID=$request->get('uid');
		$update->Save();
		return redirect()->to('/')->with('update','Successfully Student Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $dle=  Student::find($id);
	  $dle->delete();
	  return redirect()->to('/')->with('delete','Successfully Student Data Remove');
    }
}
