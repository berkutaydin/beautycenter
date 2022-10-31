<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table="questions";
    public $primaryKey="id";

    protected $fillable=[
        "company_id",
        "user_id",
        "title",
        "body",
        "answer",
    ];

    protected $guarded=[
        "id"
    ];
}
