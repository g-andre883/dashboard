<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TaskCategorie extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'soft_order',
        // 'name',
        // 'email',
        // 'password',
    ];

    public function findAlltaskcategories(){
        return TaskCategorie::all();
    }

    public function InsetTaskCategorie($request){
        return $this->create([
            'name'             => $request->name,
            'sort_order'             => $request->sort_order,
        ]);
    }

    public function tasks()
    {
        return $this->hasMany(task::class,'task_category_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // // protected $casts = [
    // //     'email_verified_at' => 'datetime',
    // ];

}
