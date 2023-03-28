<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSewa_Model extends Model
{
    use HasFactory;
    protected $table = "tbsewa";
    protected $primaryKey = 'idsewa';
    protected $fillable = ['idsewa','tanggal_sewa','namalengkap_sewa','durasi_sewa','waktu_sewa','harga_sewa','metode_pembayaran'];
    protected $keyType = 'string';
    public $timestamps = false;

    public function sewa()
    {
        return $this->hasMany(DataSewa_Model::class);
    }
}
