<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = "appointments";
    public $primaryKey ="id";

    protected $fillable=[
        "company_id",
        "user_id",
        "appointment_start_at",
        "appointment_end_at",
    ];

    protected $guarded=[
        "id",
    ];
}
