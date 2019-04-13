<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PermissionController extends Controller
{
    //
    public function index(){

        $data = Permission::paginate();
        return view('admin.permissions.index', compact('data'));
    }

    public function create(){

//        $routeCollection = Route::getRoutes();
//
//        foreach ( $routeCollection as $route ){
//            dd( $route->getAction() );
////dd($route->getAction());
//            Permission::create([
//                'name' => $route->getName(),
//                'display_name' => $route->getName() ,
//                'description' => $route->getName(),
//                'action_name' => $route->getActionName(),
//                'uri' => $route->uri(),
//                'action' =>  json_encode( $route->methods() ) ,
//            ]);
//
//        }

        return view('admin.permissions.create');
    }
}
