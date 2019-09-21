<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

class AppointmentController extends Controller
{
    public function AddApointment(Request $request)
    {
        // return redirect('https://www.google.com');
        if ($request->isMethod('get')) {
            $validatedData = $request->validate([
                'AppointmentName' => 'required',
                'AppointmentEmail' => 'required',
                'AppointmentDepartment' => 'required',
                'AppointmentMessage' => 'required'
            ]);   
            $appointment = new Appointment;
            $appointment->appointment_name = $request->AppointmentName;
            $appointment->appointment_email = $request->AppointmentEmail;
            $appointment->appointment_department = $request->AppointmentDepartment;
            $appointment->appointment_message = $request->AppointmentMessage;
            $appointment->save();
            session()->flash('success', 'Appointment has been successfully added');
            return redirect()->back();
        }
        else{
            session()->flash('danger', 'Appointment has not been successfully added');
            redirect()->back();
        }
    }
}
