<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Technology extends Model
{
    use HasFactory;
    protected $table = 'tbl_technology';
    
    protected $fillable = [
        'id','tech_name','logo','is_active',
        'created_by','created_at','updated_by','updated_at','deleted_at'      
    ];
}