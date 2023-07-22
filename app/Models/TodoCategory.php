<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoCategory extends Model
{
    protected $table = 'todo_categories';
    protected $primaryKey = 'CategoryID';
    public $timestamps = false;

    // カテゴリに属するTodoアイテムを取得するためのリレーション
    public function todoItems()
    {
        return $this->hasMany(TodoDetail::class, 'CategoryID', 'CategoryID');
    }
}
