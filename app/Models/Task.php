<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $guarded = array('id');

    public $timestamps = false;

    public function getData()
    {
        $list = DB::table($this->table)->get();

        return $list;
    }


    protected $dates = [
        'deadline',
        'plans_work_start_date',
        'plans_work_completion_date',
        'work_start_date',
        'work_completion_date',
    ];

    protected $fillable = [
        'task_category_id',
        'deadline',
        'name',
        'plans_work_start_date',
        'plans_work_completion_date',
        'state',
        'comment',

    ];

    const STATUS = [
        0 => ['label_text' => '未着手', 'html_class' => 'btn-danger'],
        1 => ['label_text' => '着手中', 'html_class' => 'btn-primary'],
        2 => ['label_text' => '完了', 'html_class' => 'btn-success'],
    ];

    public function getStateLabelAttribute()
    {
        $state = $this->attributes['state'];
        if (empty(self::STATUS[$state])) {
            return '';
        }
        return self::STATUS[$state]['label_text'];
    }

    public function getDeadLineTextAttribute()
    {
        $res = null;
        if (!is_null($this->deadline)){
            $res = $this->deadline->format('Y年m月d日');
        }
        return $res;
    }


// 
// 
//     
    public function getPlansWorkCompletionDateTextAttribute()
    {
        $res = null;
        if (!is_null($this->plans_work_completion_date)){
            $res = $this->plans_work_completion_date->format('Y年m月d日');
        }
        return $res;
    }



    public function getPlansWorkStartDateTextAttribute()
    {
        $res = null;
        if (!is_null($this->plans_work_start_date)){
            $res = $this->plans_work_start_date->format('Y年m月d日');
        }
        return $res;
    }

    public function getStateTextAttribute()
    {
        $res = null;
        // var_dump($this->state);
        
        if (isset($this->state)){
            $res = self::STATUS[$this->state]['label_text'];
        }
        return $res;
    }


    public function getStateClassAttribute()
    {
        // 状態値
        $state = $this->attributes['state'];

        // 定義されていなければ空文字を返す
        if (empty(self::STATUS[$state])) {
            return '';
        }

        return self::STATUS[$state]['html_class'];
    }


    public function taskscategory()
    {
        return $this->belongsTo(TaskCategorie::class,'task_category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
    public function getFamilyNameTextAttribute()
    {
        $res = null;
        if (!is_null($this->user()->first())){
            $res = $this->user()->first()->family_name;
        }
        return $res;
    }


    public function findAlltasks()
    {
        return Task::all();
    }

    public function InsetTask($request)
    {
        return $this->create([
            'task_category_id' => $request->task_category_id,
            'deadline' => $request->deadline,
            'name' => $request->name,
            'plans_work_start_date' => $request->plans_work_start_date,
            'plans_work_completion_date' => $request->plans_work_completion_date,
            'state'  => $request->state,
            'comment' => $request->comment,

        ]);
    }

    public function getAcction()
    {

        $res = null;
        if ($this->state==0){
            $res = "/tasks/". $this->id . "/start";
            
        } elseif($this->state==1){
            $res = "/tasks/". $this->id . "/end";

        }
        
        return $res;
        
         
        
        

    }
}
