<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ProgramExport;
use App\Http\Filters\UserFilter;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;


use Validator;
use Carbon\Carbon;
use DB;


class UserController extends Controller
{

    //
    public function index(Request $request, UserFilter $filters){

        $action = $request->input('action');
        
        if( $action == 'export' && $request->has('program') ){
            $data = User::filter($filters)
                ->orderBy('created_at','DESC')
                ->get();

            return Excel::download( new ProgramExport($request->input('program'), $data), 'users.xlsx' );
        }

        $data = User::filter($filters)
            ->orderBy('created_at','DESC')
            ->paginate();
    
        return view('admin.users.index', compact('data'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function show( $id ){
        $user = User::findOrFail( $id );
        return view('admin.users.show', compact('user'));
    }

    public function store( Request $request){


    }

    public function edit( $id ){
        $user = User::findOrFail($id);
        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request, $id){

    }

    public function active( $id ){
        $user = User::findOrFail( $id );
        return view('admin.users.active', compact('user'));
    }

    public function activeUser(Request $request, $user_id){

    }




    public function transaction(Request $request, $id, UserTransactionFilter $filter){
        $user = User::findOrFail( $id );
        $transaction = UserTransaction::filter($filter)
            ->where('user_id',$user->user_id )
            ->orderBy('created_at','DESC')
            ->paginate();

        return view('admin.users.transaction', compact('user','transaction'));
    }

    public function banks(Request $request, $id){
        $user = User::findOrFail($id);
        $banks = $user->banks()->paginate();
//        dd($banks);

        return view('admin.users.banks', compact('banks','user'));
    }

    public function banksEdit(Request $request, $user_id, $bank_id){
        $bank = UserBanks::find($bank_id);
        $user = User::where('user_id',$user_id)->firstOrFail();
        if( !$bank ){
            return back()->with('status', 'Không tồn tại');
        }
        return view('admin.users.bank_edit', compact('bank','user'));
    }


    public function banksUpdate(Request $request, $user_id, $bank_id){
        $rules = [
            'bank_full_name' => 'required|max:120',
            'bank_acc_number' => 'required|numeric',
            'bank_location' => 'required|max:254',
        ];

        $messages = array(
            'bank_full_name.required' => 'Vui lòng nhập Tên tài khoản',
            'bank_full_name.max' => 'Vui lòng nhập Tên tài khoản tối đa 254 ký tự',
            'bank_acc_number.required' => 'Vui lòng nhập số tài khoản',
            'bank_acc_number.numeric' => 'Vui lòng nhập số tài khoản dạng số',
            //'bank_acc_number.unique' => 'Số tài khoản đã tồn tại',
            'bank_location.required' => 'Vui lòng nhập chi nhánh ngân hàng',
            'bank_location.max' => 'Vui lòng nhập chi nhánh ngân hàng tối đa 254 ký tự',
        );


        $validator = Validator::make($request->all(), $rules, $messages );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $bank = UserBanks::findOrFail($bank_id);

        $bank->bank_name = $request->input('bank_name');
        $bank->bank_full_name = $request->input('bank_full_name');
        $bank->bank_acc_number = $request->input('bank_acc_number');
        $bank->bank_location = $request->input('bank_location');
        $bank->bank_swift_code = $request->input('bank_swift_code');
        $bank->locked = $request->input('locked');

        if( $bank->save() ){
            return back()->with('status','Sửa thành công');
        }
        return back()->with('warning','Cập nhật lỗi');

    }

    public function gridAction(Request $request){
        $action = $request->input('action');

        if( $action == 'export_all' ){
            return Excel::download( new UsersExport, 'users.xlsx' );
        }
    }

}
