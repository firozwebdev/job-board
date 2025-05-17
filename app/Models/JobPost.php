<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'category',
        'company_name',
        'company_logo',
        'status',
        'is_active',
        'expiry_date',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
