<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Linen extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_linen';
    protected $fillable = ['id_linen', 'id_jabatan', 'id_template', 'id_supplier', 'id_hotel', 'tag_id', 'linen_name', 'size', 'price', 'hotel_name', 'color', 'linen_code', 'linen_code', 'linen_type', 'template', 'supplier', 'linen_status'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function total_template()
    {
        return $this->belongsTo(Template::class, 'id_template', 'id');
    }

    public function total_supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id');
    }

    public function total_hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel', 'id');
    }
}
