<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scooter extends Model
{
    use HasFactory;
    protected $table = "tbscooter";
    protected $primaryKey = 'kdscooter';
    protected $fillable = ['kdscooter','namascooter','jenisscooter','warnascooter'];
    protected $keyType = 'string';
    public $timestamps = false;

}
