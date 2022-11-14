<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Service extends Model
{
    use HasFactory;

    protected $table="services";
    protected $fillable=['id','name','details','photo'];
    protected $hidden=['created_at','updated_at'];
}
