<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InternalTransaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guards = [];
    protected $table = 'tb_internal_transaction';
    protected $fillable = ['id_internal_transaction', 'id_jabatan', 'id_packed', 'id_laundry_plant', 'trans_code', 'trans_date', 'delivery_type', 'laundry_name', 'total_packing', 'delivery_status'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id', 'id');
    }

    public function linen()
    {
        return $this->belongsTo(Linen::class, 'id_packed', 'id_packed');
    }

    public function laundry_plant()
    {
        return $this->belongsTo(LaundryPlant::class, 'id_laundry_plant', 'id_laundry_plant');
    }
}
