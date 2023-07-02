<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'menu_id',
    ];

    public function menus()
    {
        return $this->belongsTo(Menu::class, 'menu_id','id');
    }
}
