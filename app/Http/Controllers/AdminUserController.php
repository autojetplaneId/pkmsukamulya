<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class AdminUserController extends Controller
{
    function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('is_active', function($data){
                    if ($data->is_active == 0) {
                        $labelText = '<span class="badge bg-danger">Tidak Aktif</span>';
                    }else
                        $labelText = '<span class="badge bg-success">Aktif</span>';
                    return $labelText;
                })
                ->addColumn('action', function($data){
                    $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm"> <i class="bi bi-pencil-square"></i>Edit</button>';
                    $button .= '<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm"> <i class="bi bi-backspace-reverse-fill"></i> Delete</button>';
                    return $button;
                })
                // ->addColumn('checkbox', '<input type="checkbox" name="users_checkbox[]" class="users_checkbox" value="{{$id}}" />')
                ->rawColumns(['is_active','action'])
                ->make(true);
        }
        return view('user.adminuser');
    }

}
