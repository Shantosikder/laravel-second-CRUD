<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\crud;
use Session;

class curdController extends Controller
{
    public function showData(){
        // $showData = crud::all();
        // $showData = crud::paginate(3);
        $showData = crud::simplepaginate(3);
        return view('show_data',compact('showData'));
    }

    public function addData(){
        return view('add_data');
    }
 
    public function storeData(Request $request){

        $validation = [

            'name'=>'required | max:15',
            'email'=>'required | email',
        ];

        $cm = [
            'name.required'=>'Enter Your Full Name',
            'name.max'=>'Enter Your Name Can Not Containt 15 char',

            'email.required'=>'Enter Your Email',
            'email.email'=>'Email Must be a valid Email',
        ];

        $this->validate($request,$validation,$cm);

        $crud = new Crud();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('smg','Data successfully Insert');

        return redirect('/');
    }

    public function editData($id=null){
        $editData = Crud::find($id);
         return view('edit_data',compact('editData'));
    }

     public function updatedata(Request $request,$id){

        $validation = [

            'name'=>'required | max:15',
            'email'=>'required | email',
        ];

        $cm = [
            'name.required'=>'Enter Your Full Name',
            'name.max'=>'Enter Your Name Can Not Containt 15 char',

            'email.required'=>'Enter Your Email',
            'email.email'=>'Email Must be a valid Email',
        ];

        $this->validate($request,$validation,$cm);

        $crud = Crud::find($id);
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('smg','Data successfully Updated');
        return redirect('/');
    }

    public function deleteData($id=null){
        $deleteData = Crud::find($id);
        $deleteData->delete();
        Session::flash('smg','Data successfully Deleted');
        return redirect('/');
    }
   
}
