<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','receiver','sender'
        ];
}
