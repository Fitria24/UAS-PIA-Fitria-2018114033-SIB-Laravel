<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalamankerja extends Model
{
    protected $table ="pengalamankerjas";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama','pengalaman_kerja'];
}
