<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diease;

class DieaseController extends Controller
{
    public function index()
    {
        return view('admin.admin_pages.diease.list_diease');
    }

    public function create()
    {
        return view('admin.admin_pages.diease.create_diease');
    }
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'DieaseName' => 'required|unique:diease,diease_name|max:220'
            ]);
            // $user_id = Auth::id();
            $diease = new Diease;
            $diease->symptom_name = $request->DieaseName;
            $diease->save();

            session()->flash('success', 'Diease has been successfully added');
            return redirect()->route('diease.index');
        } else {
            session()->flash('warning', 'Diease has not been updated');
            return back();
        }
    }

    public function delete($symptom_id)
    {
        Diease::findOrFail($symptom_id)->delete();
        session()->flash('danger', 'Diease has been successfully deleted');
        return back();
    }
    public function edit($diease_id)
    {
        $attributes = Diease::find($diease_id);
        return view('admin.admin_pages.diease.edit_diease')->with(compact('attributes'));
    }

    public function update(Request $request, $diease_id)
    {
        if ($request->isMethod('post')) {
            // $validatedData = $request->validate([
            //     'AttributeName' => 'required|unique:Attributes,attributes_name|max:255',
            // ]);
            $diease = Diease::find($diease_id);
            $diease->diease_name = $request->DieaseName;
            $diease->save();

            session()->flash('success', 'Diease has been successfully updated');
            return redirect()->route('diease.index');
        } else {
            session()->flash('success', 'Diease has not been updated');
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
