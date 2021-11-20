<?php

namespace App\models;

use Jenssegers\Mongodb\Eloquent\Model;



class Student extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'students';
    protected $primaryKey = 'stdID';
    protected $fillable = ['stdID', 'Name', 'Age', 'GPA'];
}
