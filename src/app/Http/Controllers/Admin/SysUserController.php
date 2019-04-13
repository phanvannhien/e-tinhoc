<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use Hash;

class SysUserController extends Controller
{
    public function index(){
        $data = Admin::paginate();
        return view('admin.sysusers.index', compact('data'));
    }

    public function create(){
        return view('admin.sysusers.create');
    }

    public function store(Request $request){
        $rules = [
            'email' => 'required|email|unique:admins,email',
            'user_name' => 'required|min:6|unique:admins,user_name',
            'password' => 'required|min:6',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $user = new Admin();
        $user->email = $request->input('email');
        $user->user_name = $request->input('user_name');
        $user->password = Hash::make($request->input('password'));

        if($user->save()) {
            return redirect()->route('sys_user.edit', $user)
                ->with('status', trans('app.success') );

        }
        return back()->with('warning', trans('app.fail') );;
    }


    public function edit($id){
        $user = Admin::findOrFail($id);
        return view('admin.sysusers.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = Admin::findOrFail($id);

        $arrRules = [
            'email' => 'required|email|unique:admins,email',
            'user_name' => 'required|min:6|unique:admins,user_name',
        ];

        if( $request->has('is_change_password') ){
            $rules['password'] = 'required|min:6|max:100|confirmed';
        }

        $validator = Validator::make($request->all(), $arrRules );

        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }


        $arrUpdate = [
            'email' => $request->input('email'),
            'user_name' => $request->input('user_name'),
            'status' => $request->input('status'),
            'locked' => $request->input('locked'),
        ];

        if( $request->has('is_change_password') ){
            $arrUpdate['password'] = Hash::make($request->input('password'));
        }

        $user->update($arrUpdate);

        if( $request->has('role') && $request->input('role') != '' ){
            $role = Role::findOrFail($request->input('role'));

            if( !$user->hasRole($role)  ){
                $user->roles()->detach();
                $user->attachRole($role);
            }
        }

        if ($user)
            return back()->with('status', trans('app.success') );
        return back()->with('status', trans('app.fail') );
    }


    public function change_password(){
        $user = auth('admin')->user();
        return view('admin.sysusers.change_password',compact('user'));
    }


    public function save_change_password(Request $request){
        $user = auth('admin')->user();
        $old_password = $request->input('old_pass');
        $rules['old_pass'] = 'required';

        if( !empty($old_password) ){
            $rules['password'] = 'required|min:6|max:100|confirmed';
        }
        $validator = Validator::make($request->all(), $rules,[
            'old_pass.required' => 'Vui lòng nhập mật khẩu cũ',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Vui lòng nhập mật khẩu ít nhất 6 kí tự',
            'password.max' => 'Vui lòng nhập mật khẩu tối đa 100 kí tự',
            'password.confirmed' => 'Nhắc lại mật khẩu không trùng khớp',
        ]);
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        if( !empty($old_password) ) {
            $new_password = $request->input('password');
            if (Hash::check($old_password, $user->getAuthPassword())) {
                $user->password = Hash::make($new_password);
            } else {
                return back()->with(['warning' => 'Mật khẩu cũ không đúng']);
            }
        }

        if($user->save()) {
            return back()->with(['status' => 'Cập nhật thành công']);
        }

        return back()->with(['warning' => 'Cập nhật lỗi']);;
    }
}
