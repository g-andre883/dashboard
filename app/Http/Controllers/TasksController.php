<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;


class TasksController extends Controller
{
    public function model()
    {
        // Frameworksモデルのインスタンス化
        $md = new Task();
        // データ取得
        $list = $md->getData();

        // ビューを返す
        return view('sample.model', ['data' => $list]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
            $model = new Task();

            $list = $model->Paginate(10);
            // dd($list);
            return view('tasks', ['list' => $list]);
    }




    public function search(Request $request)
    {
        //  dd($request->name);
        $keyword_plans_work_start_date = $request->plans_work_start_date;
        $keyword_task_category_id = $request->task_category_id;
        $keyword_state = $request->state;
        // $userBuilder = User::whereIn('id', [3, 6, 8]);
        // dd($userBuilder->toSql(), $userBuilder->getBindings());


        $message = "検索結果はありません。";
        $model = [];


        if (!empty($keyword_plans_work_start_date) && !empty($keyword_task_category_id) && !empty($keyword_state)) {
            $query = Task::query();
            $model = $query->where('work_start_date', '%' . $keyword_plans_work_start_date . '%');
            $model = $model->where('task_category_id', '%' . $keyword_task_category_id . '%');
            $model = $model->where('state', '%' . $keyword_state . '%')->get();
            // $users = $query->paginate(2)->withQueryString();
            // ->get();
            //   dd($query->toSql(), $query->getBindings());

            $message = "「" . $keyword_plans_work_start_date . '  ' . $keyword_task_category_id . '   ' . $keyword_state . "」を含む名前の検索が完了しました。";
        }
        return view('search')->with([
            'users' => $model,
            'message' => $message,
        ]);
    }

    public function edit($task)
    {
        $model = Task::find($task);
        $url = '/tasks/' . $model->id;
        // dd($model->plans_work_start_date->format('Y年m月d日'));

        return view('tasks_edit', ['item' => $model, 'url' => $url]);
    }


    public function create()
    {
        $model = new Task();
        $url = '/tasks/store';
        return view('tasks_edit', ['item' => $model, 'url' => $url]);
    }



    public function store(TaskRequest $request,)
    {

        // $validated = $request->validate();
        $model = new Task;

        $model->user_id = $request['user_id'];
        $model->task_category_id = $request['task_category_id'];
        $model->name = $request['name'];
        $model->plans_work_start_date = $request['plans_work_start_date'];
        $model->plans_work_completion_date = $request['plans_work_completion_date'];
        $model->deadline = $request['deadline'];
        $model->state = $request['state'];


        $model->save();

        return redirect('tasks');
    }

    public function update(TaskRequest $request, $task)
    {
        // dd($request);
        // $validated = $request->validate();
        $model = Task::find($task);
        $model->task_category_id = $request['task_category_id'];
        $model->name = $request['name'];
        $model->plans_work_start_date = $request['plans_work_start_date'];
        $model->plans_work_completion_date = $request['plans_work_completion_date'];
        $model->deadline = $request['deadline'];
        // $model->state = $request['state'];
        $model->save();

        return redirect('tasks');
    }



    public function start($task)
    {
        $model = Task::find($task);
        $model->work_start_date=\Carbon\Carbon::now();
        $model->state=1;
        $model->save();


        
        // dd($task);  

        // $model = Task::find($task);
        // $url = '/tasks/' . $model->id;
        // // dd($model->plans_work_start_date->format('Y年m月d日'));
        return redirect()->to(url()->previous());    
    
    
    }
    public function end($task)
    {

        $model = Task::find($task);
        $model->work_completion_date=\Carbon\Carbon::now();
        $model->state=2;
        $model->work_date = $model->work_start_date->diffInMinutes($model->work_completion_date);

         

        
        $model->save();
        // state
        // work_completion_date
        // work_date
        // $model = Task::find($task);
        // $url = '/tasks/' . $model->id;
        // // dd($model->plans_work_start_date->format('Y年m月d日'));

        return redirect()->to(url()->previous());    }
}
