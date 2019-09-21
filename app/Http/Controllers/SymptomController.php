<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptoms;

class SymptomController extends Controller
{
    public function index()
    {
        return view('admin.admin_pages.symptom.list_symptom');
    }

    public function create()
    {
        return view('admin.admin_pages.symptom.create_symptom');
    }
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'SymptomsName' => 'required|unique:symptom,symptom_name|max:220'
            ]);
            // $user_id = Auth::id();
            $Symptoms = new Symptoms;
            $Symptoms->symptom_name = $request->SymptomsName;
            $Symptoms->save();

            session()->flash('success', 'Symptom has been successfully added');
            return redirect()->route('symptom.index');
        } else {
            session()->flash('warning', 'Symptom has not been updated');
            return back();
        }
    }

    public function delete($symptom_id)
    {
        Symptoms::findOrFail($symptom_id)->delete();
        session()->flash('danger', 'Symptom has been successfully deleted');
        return back();
    }
    public function edit($symptom_id)
    {
        // echo $symptom_id;
        $attributes = Symptoms::find($symptom_id);
        return view('admin.admin_pages.symptom.edit_symptom')->with(compact('attributes'));
    }

    public function update(Request $request, $symptom_id)
    {
        if ($request->isMethod('post')) {
            // $validatedData = $request->validate([
            //     'AttributeName' => 'required|unique:Attributes,attributes_name|max:255',
            // ]);
            $Symptoms = Symptoms::find($symptom_id);
            $Symptoms->symptom_name = $request->SymptomName;
            $Symptoms->save();

            session()->flash('success', 'Symptom has been successfully updated');
            return redirect()->route('symptom.index');
        } else {
            session()->flash('success', 'Symptom has not been updated');
            return back();
        }
    }

    public function updateproduct(Request $request, $page_id)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'AttributeName' => 'required|unique:Attributes,attributes_name|max:255'
            ]);
            if ($validatedData->fails()) {
                session()->flash('success', 'Attributes has not been updated');
                return back();
            }
            $user_id = Auth::id();
            foreach ($request->Attributes as $attribute) {
                $ProductAttribute = new Attributes;
                $ProductAttribute->attributes_name = $attribute['AttributeName'];
                $ProductAttribute->product_id = $page_id;
                // Change product ID
                $ProductAttribute->user_id = $user_id;
                $ProductAttribute->attribute_group_id = $attribute['AttributeGroup'];
                $ProductAttribute->save();
            }

            session()->flash('success', 'Group Attributes has been successfully updated');
            return redirect()->route('attribute.index');
        } else {
            session()->flash('success', 'Attributes has not been updated');
            return back();
        }
    }
}
