<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    // Явное указание имени таблицы
    protected $table = 'subcategory';

    protected $fillable = ['tittle', 'link', 'parent'];
}
