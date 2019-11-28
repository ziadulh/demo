<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Http\User;*/

use App\User;


class testController extends Controller
{


    public function __construct()
    {
        $this->middleware('test');
    }


    public function adminPannel(){
    		$id = User::all();
    		return view('adminPannel')->with('id',$id);

    		/*return view('auth.register');*/
    }
    public function edit($id){
    		$data = User::find($id);
    		return view('editapuser')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->userrole = $request->input('userrole');

        $data->save();
    	return redirect('/');

        /*print_r($req->input());*/
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/adminPannel');
    }

    


}