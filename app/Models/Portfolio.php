<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tbl_portfolio';

    protected $fillable = [
        'slug','project_type','project_name','project_short_description','project_long_description','project_image','project_logo',
        'project_banner','about_title','country_name','targeted_audience','industry','technology','screenshort_banner','screenshort_images',
        'created_by','created_at','updated_by','updated_at','deleted_at'
    ];
}