<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() {
        $data ['users'] = User::get();
        return view('admin.user.listData', $data); //compact
    }

    public function create() {
        return view('admin.user.create');
    }

    public function store(Request $request) {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'email'=> 'required|email',
        ]);

        if ($validator->passes()) {
            User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password' => $request->password
            ]);
            Toastr::success('User Create Successfully', 'Success'); 
        } else {
            $errorSmg = $validator->messages();
            foreach ($errorSmg->all() as $singelSmg) {
                Toastr::error($singelSmg, 'Requeard');
            }
        }       

        return redirect()->back();
    }

    public function edit($id) {
        // User::where('id', '=', $id)->first();
        $data['userInfo'] = User::find($id); //findOrfail
        return view('admin.user.update', $data);
    }

    public function update(Request $request, $id) {
        // dd($requsat->all());
        User::find($id)->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password
        ]);
        Toastr::success('User Update Successfully', 'Success'); 
        return redirect()->back();
    }

    public function destroy($id) {               
        User::find($id)->delete();
        Toastr::success('User Delete Successfully', 'Success'); 
        return redirect()->back();
    }
}
