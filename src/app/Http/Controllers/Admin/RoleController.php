<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Validator;


class RoleController extends Controller
{
    //
    public function index(){
        $data = Role::paginate();
        return view('admin.roles.index', compact('data'));
    }

    public function create(){
        return view('admin.roles.create');
    }

    public function store(Request $request){
        $rules = [
            'name' => 'required|alpha_dash|unique:roles,name',
            'display_name' => 'required',
            'description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $role = new Role();
        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');

        if( $role->save() ){
            return redirect()->route( 'role.edit', $role->id )->with('status', trans('app.success'));
        }
        return back()->with('status', trans('app.fail') );
    }


    public function edit( Request $request, $id ){
        $role = Role::findOrFail( $id );
        return view('admin.roles.edit', compact('role'));

    }

    public function update( Request $request, $id ){
        $rules = [
            'display_name' => 'required',
            'description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $role = Role::findOrFail( $id );
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');

        if( $role->save() ){
            return redirect()->route( 'role.edit', $role->id )->with('status', trans('app.success') );
        }
        return back()->with('status', trans('app.fail'));
    }


}
