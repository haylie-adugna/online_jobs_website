<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'job_id',
        'applicant_name',
        'applicant_email',
        'resume',
        'cover_letter',
        'status',
    ];

    /**
     * Relationship: A JobApplication belongs to a Job.
     */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
