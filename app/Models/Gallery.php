<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table="gallery";
    public $primaryKey="id";

    protected $fillable=[
        "company_id",
        "title",
        "attachment",
        "placement",
    ];

    protected $guarded=[
        "id"
    ];

}
