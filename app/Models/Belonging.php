<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Belonging extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'color',
        'status',
        'belonging_type_id',
        'belonging_size_id',
        'color_name',
        'notes',
        'slot_id',
    ];

    public function size(){
        return $this->belongsTo(BelongingSize::class, 'belonging_size_id');
    }

    public function type()
    {
        return $this->belongsTo(BelongingType::class, 'belonging_type_id');
    }

}
