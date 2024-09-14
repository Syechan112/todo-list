<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

        /**

     *
     * @var array
     */
    protected $fillable = [
        'title',
        'completed',
    ];
    protected $casts = [
        'completed' => 'boolean',
    ];
}
