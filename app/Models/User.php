<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = "users";
    public $primaryKey ="id";

    protected $fillable=[
        "name",
        "surname",
        "phone",
        "email",
        "avatar",
        "role",
    ];

    protected $guarded=[
        "id",
    ];
}
