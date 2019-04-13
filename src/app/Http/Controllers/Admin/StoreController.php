<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


// Facades
use Validator;

// Models

use App\Models\Store;

class StoreController extends Controller
{
    public function index(){
        $data = Store::orderBy('name')->paginate();
        return view('admin.stores.index', compact('data'));
    }

    public function create(){
        return view('admin.stores.create');
    }

    public function store(Request $request){

        $rules = [
            'name' => 'required|string|max:254',
            //'description' => 'required|string',
            'contact_name' => 'required|string|max:254',
            'contact_email' => 'required|string|max:254',
            'contact_phone' => 'required|string|max:20',
            'contact_fax' => 'required|string|max:20',
            'matp' => 'required|integer',
            'maqh' => 'required|integer',
            'xaid' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $data = new Store();
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->contact_name = $request->input('contact_name');
        $data->contact_email = $request->input('contact_email');
        $data->contact_phone = $request->input('contact_phone');
        $data->contact_fax = $request->input('contact_fax');
        $data->matp = $request->input('matp');
        $data->maqh = $request->input('maqh');
        $data->xaid = $request->input('xaid');
        $data->lat = $request->input('lat');
        $data->lng = $request->input('lng');
        $data->address = $request->input('address');
        $data->status = $request->input('status');

        if( $data->save() ){
            return redirect()->route( 'store.edit', $data->id )
                ->with('status', trans('app.success'));
        }
        return back()->with('status',trans('app.fail'));

    }

    public function edit( Request $request, $id ){
        $data = Store::findOrFail( $id );
        return view('admin.stores.edit', compact('data'));

    }

    public function update(Request $request, $id){
        $rules = [
            'name' => 'required|string|max:254',
            //'description' => 'required|string',
            'contact_name' => 'required|string|max:254',
            'contact_email' => 'required|string|max:254',
            'contact_phone' => 'required|string|max:20',
            'contact_fax' => 'required|string|max:20',
            'matp' => 'required|integer',
            'maqh' => 'required|integer',
            'xaid' => 'required|integer',
        ];


        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }


        $data = Store::findOrFail( $id );
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->contact_name = $request->input('contact_name');
        $data->contact_email = $request->input('contact_email');
        $data->contact_phone = $request->input('contact_phone');
        $data->contact_fax = $request->input('contact_fax');
        $data->matp = $request->input('matp');
        $data->maqh = $request->input('maqh');
        $data->xaid = $request->input('xaid');
        $data->lat = $request->input('lat');
        $data->lng = $request->input('lng');
        $data->status = $request->input('status');
        $data->address = $request->input('address');
        if( $data->save() ){
            return redirect()->route( 'store.edit', $data->id )->with('status',trans('app.success'));
        }
        return back()->with('status',trans('app.fail'));
    }

    public function remove(Request $request){

        if( $request->ajax() && $request->isMethod('post')){
            $id = $request->input('id');
            if( is_array( $id ) ){
                Store::destroy($id);
            }else{
                Store::destroy($id);
            }

            return response()->json(['success' => true , 'msg' => trans('app.success') ]);
        }
        return response()->json(['success' => false, 'msg' => trans('app.fail') ]);
    }
}
