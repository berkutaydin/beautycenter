<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table="reviews";
    public $primaryKey="id";

    protected $fillable=[
        "user_id",
        "service_id",
        "message",
        "rating",
        "attachment",
        "is_approved"
    ];

    protected $guarded=[
        "id"
    ];
}
