<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\app\Http\Controller\PrincipalController;


class Usuarios extends Model
{
    protected $table="usuarios";
    protected $primarykey="id";
    public $timestamps = false;
    use HasFactory;
}
