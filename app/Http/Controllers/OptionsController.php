<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Options;
use App\Attributes;
use App\OptionsDescription;
use Auth;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_pages.AttributeOptions.list_attribute_options');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributes = Attributes::all();
        return view('admin.admin_pages.AttributeOptions.create_attribute_options')->with(compact('attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            // abort(sdyuvudgs);
                // dd($option);
                $Option = new Options;
                $Option->option_name = $request->OptionName;
                $Option->option_type = $request->OptionsType;
                if(isset($request->ProductID))
                {
                    $Option->product_id = $request->ProductID;
                }
                $Option->attributes_id = ( isset($request->AttributeOptions) ? $request->AttributeOptions : null );
                $Option->save();
                // dd($Option);
                // Option Id sent in OptionDescription Table
                foreach ($request->Options as $item) {
                    $description = new OptionsDescription;
                    $description->option_id = $Option->option_id;
                    $description->option_details = $item['Text'];
                    $description->option_price = $item['Price'];
                    $description->save();
                }
            session()->flash('success', 'Group Attributes has been added');
            return redirect()->route('options.index');
        } else {
            session()->flash('danger', 'Group Attributes has not been added');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attributes = Attributes::all();
        $attributeOptions = Options::with('OptionDetails')->where('option_id',$id)->first();
        // dd($attributeOptions);
        return view('admin.admin_pages.AttributeOptions.edit_attribute_options')
                                            ->with(compact('attributeOptions'))
                                            ->with(compact('attributes'));
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
        if ($request->isMethod('post')) {
            $user_id = Auth::id();
            $Option = Options::find($id);
            $Option->option_name = $request->OptionName;
            $Option->option_type = $request->OptionsType;
            $Option->attributes_id = (isset($request->AttributeOptions) ? $request->AttributeOptions : null);
            $Option->save();
                // dd($Option);
                // Option Id sent in OptionDescription Table
            if(!empty($request->Options))
            {
                foreach ($request->Options as $item) {
                    $description = new OptionsDescription;
                    $description->option_id = $Option->option_id;
                    $description->option_details = $item['Text'];
                    $description->option_price = $item['Price'];
                    $description->save();
                }
            }
            session()->flash('success', 'Group Attributes has been updated');
            return redirect()->route('options.index');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->flash('danger', 'Attributes has been deleted');
        return back();
    }
}
