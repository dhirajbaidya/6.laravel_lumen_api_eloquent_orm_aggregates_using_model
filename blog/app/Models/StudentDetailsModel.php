<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class StudentDetailsModel extends Model{
    protected $table = 'student_details';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
}
