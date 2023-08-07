<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBranch extends Model
{
    use HasFactory;

    protected $with = ['branch'];

    protected $hidden = [
        "created_at",
        "updated_at",
        "deleted_at",
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
