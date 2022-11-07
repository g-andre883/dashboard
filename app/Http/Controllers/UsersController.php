<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Task;


class UsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $model = new User();
        $list = $model->Paginate(10);
        return view('users',['list'=>$list]);
    }

    public function edit($user){
        $model = User::find($user);
       
        
        // dd($model); 
        return view('users_edit',['item'=>$model]);
        
    }

    public function create(){
        $model = new User();
        return view('users_edit',['item'=>$model]);
    }



    public function store(UserRequest $request,){

        // $validated = $request->validate();
        $model = new User;
        $model->family_name = $request['family_name'];
        $model->family_name_hiragana = $request['family_name_hiragana'];
        $model->personal_name = $request['personal_name'];
        $model->personal_name_hiragana = $request['personal_name_hiragana'];
        $model->login_id = $request['login_id'];
        $model->password = $request['password'];
        // $model->password_confirm = $request['password_confirm'];
        $model->email = $request['email'];
        $model->save();
        
        return redirect('users');
    }

    public function update(UserRequest $request, $user){
        // dd($request);
        // $validated = $request->validate();
        $model = User::find($user);
        $model->family_name = $request['family_name'];
        $model->family_name_hiragana = $request['family_name_hiragana'];
        $model->personal_name = $request['personal_name'];
        $model->personal_name_hiragana = $request['personal_name_hiragana'];
        $model->login_id = $request['login_id'];
        $model->password = $request['password'];
        // $model->password_confirm = $request['password_confirm'];
        $model->email = $request['email'];
        $model->save();
        
        return redirect('users');

    }
}
