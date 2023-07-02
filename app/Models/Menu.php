<?php

namespace App\Models;

use App\Models\Roles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_name',
        'role_id',
    ];

    public function roles()
    {
        return $this->belongsTo(Roles::class,'role_id','id');
    }
}
