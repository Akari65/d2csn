<?php

namespace App\Models\registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;
    protected $table = 't_role_master';
    protected $fillable = [
        'name',
        'status',
        'updated_at',
        'updated_by',
        'created_at',
        'created_by',
    ];
}
