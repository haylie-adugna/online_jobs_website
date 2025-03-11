<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'company',
        'location',
        'type',
        'salary',
        'start_date',
        'end_date',
    ];

    /**
     * Relationship: A Job has many JobApplications.
     */
    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }

    /**
     * Relationship: A Job belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
