<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CaseStudy extends Model
{
    use HasFactory;
    protected $table = 'tbl_case_study';

    protected $fillable = [
        'id',
        'title',
        'slug',
        'case_study_short_description',
        'case_study_long_description',
        'case_study_banner',
        'about_title',
        'about_description',
        'technology'
    ];
}
