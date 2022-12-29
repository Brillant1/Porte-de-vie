<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Routing\Route;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::where('type', 'prophetique')->get();
        return view('admin.rendez_vous', compact('appointments'));
    }

    public function rendez_vous()
    {
        $simpleAppointments = Appointment::where('type', 'simple')->get();
        return view('admin.rendez-vous-simple', compact('simpleAppointments'));
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
        $data = $request->all();
        $time = strtotime($request->get('appointment_time'));
        $minute= $time / 60;
        $data['code']= '#'.floor($minute).rand(1,999);
        $routeName = URL::previous();
        if (Str::contains($routeName, 'prophetique')){
            $data['type']= "prophetique";
        }else{
            $data['type']= "simple";
        }

        Appointment::create($data);
        return back()->with([
            'code'=> $data['code'],
            'success'=>"Rendez-vous enrégistrer avec succès"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return back()->with('success', 'Rendez-vous supprimé avec succès');
    }
}
