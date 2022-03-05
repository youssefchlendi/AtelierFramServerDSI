<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table ="todo";
    protected $primaryKey = "ID";
    protected $fillable = ['title','description','due_date','complete'];
}
