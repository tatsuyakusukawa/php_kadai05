<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoDetail extends Model
{
    protected $table = 'todo_details';
    protected $primaryKey = 'TodoID';
    public $timestamps = true;

    // Todoアイテムが所属するカテゴリを取得するためのリレーション
    public function category()
    {
        return $this->belongsTo(TodoCategory::class, 'CategoryID', 'CategoryID');
    }
}
