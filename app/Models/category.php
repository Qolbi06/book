<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class category extends Model
{
    use HasFactory;
    protected $fillable =[
        'name'
    ];

    public function book(){
        return $this->hasMany(book::class);
    }
}
