<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table ="pendidikans";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama','sd','smp','sma','perguruan_tinggi'];
}
