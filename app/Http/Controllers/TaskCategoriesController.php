<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskCategorie;
use App\Http\Requests\TaskCategorieRequest;


class TaskCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $model = new TaskCategorie();
        $list = $model->orderBy('soft_order', 'asc')
        ->Paginate(10);
        return view('taskcategories',['list'=>$list]);
    }

    public function edit($taskcategorie){
        $model = TaskCategorie::find($taskcategorie);
        return view('taskcategories_edit',['item'=>$model]);
    }


    public function create(){
        $model = new TaskCategorie();
        return view('taskcategories_edit',['item'=>$model]);
    }



    public function store(TaskCategorieRequest $request,){

        // $validated = $request->validate();
        $model = new TaskCategorie;
        $model->name = $request['name'];
        $model->soft_order = $request['soft_order'];
        $model->save();
        
        return redirect('taskcategories');
    }

    public function update(TaskCategorieRequest $request, $taskcategories){
        // dd($request);
        // $validated = $request->validate();
        $model = TaskCategorie::find($taskcategories);
        $model->name = $request['name'];
        $model->soft_order = $request['soft_order'];
        $model->save();
        
        return redirect('taskcategories');

    }


}
