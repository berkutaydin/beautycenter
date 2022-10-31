<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;

    protected $table ="companies";
    public $primaryKey="id";

    protected $fillable=[
        "name",
        "address",
        "city",
        "phone",
        "email",
        "logo",
        "cover",
        "bio",
        "appointment_start_hour",
        "appointment_end_hour",
        "appointment_time",
        "businness_days",
        "lat",
        "lng",
        "linkedin",
        "facebok",
        "instagram",
        "twitter",
        "since",
        "price_range",
        "user_id",
    ];

    protected $guarded=[
        "id"
    ];
}
