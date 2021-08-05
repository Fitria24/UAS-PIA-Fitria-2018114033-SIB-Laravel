<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table ="profiles";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama','no_tlp','alamat','jenis_kelamin','jabatan','photo'];
}
