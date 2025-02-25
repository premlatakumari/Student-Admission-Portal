<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'father_name', 'mother_name', 'dob', 'image', 'document'];

    //adding

    //protected $allowedFields = ['name', 'email', 'phone', 'address', 'parent_name', 'parent_contact', 'created_at', 'updated_at'];

}
