<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = "faq";
    public $primaryKey ="id";

    protected $fillable=[
        "company_id",
        "title",
        "body",
    ];

    protected $guarded=[
        "id"
    ];
}
