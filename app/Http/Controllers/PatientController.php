<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patients;

class PatientController extends Controller
{
    public function index()
    {
        return view('admin.admin_pages.patients.list_patient');
    }

    public function create()
    {
        return view('admin.admin_pages.patients.create_patients');
    }
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'PatientName' => 'required',
                'PatientAge' => 'required|numeric',
                'PatientCity' => 'required',
                'PatientContactNumber' => 'required|numeric'
            ]);
            $patient = new Patients;
            $patient->patient_name = $request->PatientName;
            $patient->patient_age = $request->PatientAge;
            $patient->patient_city = $request->PatientCity;
            $patient->patient_contactnumber = $request->PatientContactNumber;
            $patient->save();

            session()->flash('success', 'Symptom has been successfully added');
            return redirect()->route('patients.index');
        } else {
            session()->flash('warning', 'Symptom has not been updated');
            return back();
        }
    }

    public function delete($patient_id)
    {
        Patients::findOrFail($patient_id)->delete();
        session()->flash('danger', 'patient has been successfully deleted');
        return back();
    }
    public function edit($patient_id)
    {
        // echo $symptom_id;
        $attributes = Patients::find($patient_id);
        return view('admin.admin_pages.patients.edit_patients')->with(compact('attributes'));
    }

    public function update(Request $request, $patient_id)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'PatientName' => 'required',
                'PatientAge' => 'required|numeric',
                'PatientCity' => 'required',
                'PatientContactNumber' => 'required|numeric'
            ]);
            $patient = Patients::find($patient_id);
            $patient->patient_name = $request->PatientName;
            $patient->patient_age = $request->PatientAge;
            $patient->patient_city = $request->PatientCity;
            $patient->patient_contactnumber = $request->PatientContactNumber;
            $patient->save();
            
            session()->flash('success', 'patient has been successfully updated');
            return redirect()->route('patients.index');
        } else {
            session()->flash('success', 'patient has not been updated');
            return back();
        }
    }
}
