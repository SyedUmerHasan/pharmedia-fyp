<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptoms;
use App\Diease;
use Datatables;
use Illuminate\Support\Collection;
use App\Patients;
use App\Weight;

class WebsiteDatatableController extends Controller
{

    public function symptom(){
        $Symtoms = Symptoms::all();
        $record = [];
        foreach ($Symtoms as $item) {
            $data = array();
            $data['symptom_id'] = $item->symptom_id;
            $data['symptom_name'] = $item->symptom_name;
            $data['actions'] = "<a href=" . route('symptom.edit', $item->symptom_id) . " class='btn mr-1 mb-1 btn-info btn-sm'> Edit</a><a href=" . route('symptom.delete', $item->symptom_id) . " class='btn mr-1 mb-1 btn-danger btn-sm'> Delete</button>";
            $record[] = $data;
        }
        $collection = new Collection($record);
        // dd($collection);
        return Datatables::of($collection)->make();
    }
    public function diease()
    {
        $Symtoms = Diease::all();
        $record = [];
        foreach ($Symtoms as $item) {
            $data = array();
            $data['diease_id'] = $item->diease_id;
            $data['diease_name'] = $item->diease_name;
            $data['actions'] = "<a href=" . route('diease.edit', $item->diease_id) . " class='btn mr-1 mb-1 btn-info btn-sm'> Edit</a><a href=" . route('diease.delete', $item->diease_id) . " class='btn mr-1 mb-1 btn-danger btn-sm'> Delete</button>";
            $record[] = $data;
        }
        $collection = new Collection($record);
        // dd($collection);
        return Datatables::of($collection)->make();
    }

    public function patients()
    {
        $Symtoms = Patients::all();
        $record = [];
        foreach ($Symtoms as $item) {
            $data = array();
            $data['patient_name'] = $item->patient_name;
            $data['patient_age'] = $item->patient_age;
            $data['patient_city'] = $item->patient_city;
            $data['patient_contactnumber'] = $item->patient_contactnumber;
            $data['actions'] = "<a href=" . route('patient.edit', $item->patient_id) . " class='btn mr-1 mb-1 btn-info btn-sm'> Edit</a><a href=" . route('patients.delete', $item->patient_id) . " class='btn mr-1 mb-1 btn-danger btn-sm'> Delete</button>";
            $record[] = $data;
        }
        $collection = new Collection($record);
        return Datatables::of($collection)->make();
    }
    public function weight()
    {
        $Symtoms = Weight::with(["symptom","diease"])->get();
        // dd($Symtoms);
        $record = [];
        foreach ($Symtoms as $item) {
            if($item->symptom == null)
            {
                continue;
            }
            $data = array();
                $data['symptom_age'] = $item->diease->diease_name;
                $data['symptom_name'] = $item->symptom->symptom_name;
            // $data['actions'] = "<a href=" . route('patient.edit', $item->patient_id) . " class='btn mr-1 mb-1 btn-info btn-sm'> Edit</a><a href=" . route('patients.delete', $item->patient_id) . " class='btn mr-1 mb-1 btn-danger btn-sm'> Delete</button>";
            $record[] = $data;
        }
        $collection = new Collection($record);
        return Datatables::of($collection)->make();
    }

}
