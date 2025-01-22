<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';

    //define fillable fields
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'is_done'
    ];

    //define guarded fields -> opposite of fillable - fields that are not allowed to be mass assigned
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    //define casts -> define how the data should be casted
    protected $casts = [
        "deadline" => "date",
        "is_done" => "boolean"
    ];


    //define hidden fields -> fields that are not shown in the response
    /* protected $hidden = [
        'created_at',
        'updated_at'
    ]; */
}
