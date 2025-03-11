<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Events extends Model
{
    use HasFactory;
    protected $table="events";
    protected $fillable = [
        'Tittle',
        'Type',
        'Body',
        'image',
        'video',
        'created_by',
        'status',

    ];
    public function user()
{
    return $this->belongsTo(user::class); // Adjust accordingly based on your implementation
}
public function notification()
{
    return $this->hasMany(notification::class); // Adjust accordingly based on your implementation
}
}
