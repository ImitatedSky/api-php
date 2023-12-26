<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'dbtable.test';

    // protected $primaryKey = 'ID'; // 如果主鍵不是 id，要另外指定
    public $timestamps = false; // 如果表格中沒有 created_at 和 updated_at 欄位，可以設定為 false

    protected $fillable = [
        'ID',
        'column1'=> 'string',
        'column2'=> 'interger',
        'time'=> 'datetime',
    ];

    protected $casts = [
        'column1'=> 'string',
        'column2'=> 'interger',
        'time'=> 'datetime',
    ];
}



