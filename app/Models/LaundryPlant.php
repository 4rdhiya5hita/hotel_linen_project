<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaundryPlant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_laundry_plant';
    protected $fillable = ['id', 'id_jabatan', 'id_linen_center', 'name', 'code', 'phone', 'email', 'linen_center', 'address', 'description'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function linen_center()
    {
        return $this->belongsTo(LinenCenterDetail::class, 'id', 'id_linen_center');
    }

    // public function driver()
    // {
    //     return $this->hasMany(Driver::class, 'id_driver');
    // }
}
