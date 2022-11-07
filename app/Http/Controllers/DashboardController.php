<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index(){
        $model = new Task();
        $list = $model->Paginate(10);
        return view('dashboard',['list'=>$list]);
    }
}
