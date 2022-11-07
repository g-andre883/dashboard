<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $model = new Task();
        $list = $model->Paginate(10);
        return view('home', ['list' => $list]);
    }

    public function twoButtonsResult(Request $request)
    {
        if ($request->has('button')) {
        } elseif ($request->has('button')) {
        }

        return view();
    }


}
