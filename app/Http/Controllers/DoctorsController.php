<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use DB;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::orderBy('specialization', 'asc')->paginate(5);
        return view('doctors.index')->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'salary' => 'required',
            'specialization' => 'required'
        ]);

        $doctor = new Doctor();
        $doctor->name = $request->input('name');
        $doctor->email = $request->input('email');
        $doctor->salary = $request->input('salary');
        $doctor->specialization = $request->input('specialization');
        //$doctor->user_id = auth()->user()->id;
        $doctor->save();

        return redirect('/doctors')->with('success', 'Doctor Details Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.show')->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.edit')->with('doctor', $doctor);
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'salary' => 'required',
            'specialization' => 'required'
        ]);

        $doctor = Doctor::find($id);
        $doctor->name = $request->input('name');
        $doctor->email = $request->input('email');
        $doctor->salary = $request->input('salary');
        $doctor->specialization = $request->input('specialization');
        //$doctor->user_id = auth()->user()->id;
        $doctor->save();

        return redirect('/doctors')->with('success', 'Doctor Info Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect('/doctors')->with('success', 'Doctor Info Deleted Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request) 
    {
        if($request->input('specialization'))
        {
            $specialization = $request->input('specialization');
            $doctors = Doctor::find($specialization);
            return view('doctors.search')->with('doctors', $doctors);
        }
        return redirect('/doctors')->with('error', 'Search input was empty');
    }
}
