<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use DB;
use App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\Doctor;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_email = auth()->user()->email;

        if($user_email == 'admin@gmail.com')
        {
            $apps = Appointment::all();
            return view('appointments.index')->with('appointments', $apps);
        }

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        //return $user->appointments;
        return view('appointments.index')->with('appointments', $user->appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(Auth::guest())
        //     return redirect('/login')->with('error', 'You must first login or create an account to make an appointment!'); 

        // $this->validate($request, [
        //     'timeslot' => 'required'
        // ]);
        $results = Doctor::all();
        $doctors = array();
        foreach($results as $result){
            $doctors[$result->id] = "Dr. " . $result->name . "(" . $result->specialization . ")";
        }
        return view('appointments.create')->with('doctors', $doctors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'doctor' => 'required',
            'time_slot' => 'required',
            'date' => 'required'
        ];
    
        $customMessages = [
            'doctor.required' => 'Please select a doctor',
            'time_slot.required' => 'Please select a time slot',
            'date.required' => 'Please select a date',
        ];

        $this->validate($request, $rules, $customMessages);
    
        $app_time = $request->input('time_slot');
        $doc_id = $request->input('doctor');
        $app_date = $request->input('date');

        $appointment_taken = DB::table('appointments')->where('doctor_id', '=', $doc_id)->where('timeslot', '=', $app_time)->where('date', '=', $app_date)->get();
        if(count($appointment_taken) > 0)
            return redirect('/appointments')->with('error', 'That time slot has been taken!');
        

        $appointment = new Appointment();
        $appointment->timeslot = $app_time;
        $appointment->doctor_id = $doc_id;
        $appointment->user_id = auth()->user()->id;
        $appointment->date = $app_date;
        $appointment->save();

        return redirect('/appointments')->with('success', 'Appointment booked!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Appointment::find($id);
        $doctor = Doctor::find($appointment->doctor_id);
        return view('appointments.show')->with('appointment', $appointment)->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::find($id);
        $results = Doctor::all();
        $doctors = array();
        foreach($results as $result){
            $doctors[$result->id] = "Dr. " . $result->name . "(" . $result->specialization . ")";
        }
        $doctor = Doctor::find($appointment->doctor_id);
        return view('appointments.edit')->with('appointment', $appointment)->with('doctors', $doctors)->with('doctor', $doctor);
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
        $rules = [
            'doctor' => 'required',
            'time_slot' => 'required',
            'date' => 'required'
        ];
    
        $customMessages = [
            'doctor.required' => 'Please select a doctor',
            'time_slot.required' => 'Please select a time slot',
            'date.required' => 'Please select a date',
        ];
    
        $this->validate($request, $rules, $customMessages);
        $appointment = Appointment::find($id);
        $appointment->timeslot = $request->input('time_slot');
        $appointment->doctor_id = $request->input('doctor');
        $appointment->user_id = auth()->user()->id;
        $appointment->date = $request->input('date');
        $appointment->save();

        return redirect('/appointments')->with('success', 'Successfully made changes to your appointment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect('/appointments')->with('success', 'Your appointment has been cancelled');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function mark_as_done($id)
    {
        $appointment = Appointment::find($id);
        $appointment->complete = true;
        $appointment->save();
        return redirect('/appointments')->with('success', 'Appointment marked as done!');
    }
}
