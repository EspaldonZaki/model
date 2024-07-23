<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubjectGrade;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'city',
        'province',
        'zip',
        'birthdate'
    ]; 

    protected $appends = ['fullname', 'birthdate'];

    public function getFullnameAttribute()
    {
        return $this->fname . ' ' . $this->lname;
    }

    public function getBirthdayAttribute()
    {
        $birthdate = $this->attribute['birthdate'];
        if($birthdate){
            return Carbon::parse($birthdate)->format('F d, Y');
        }
    }

    public function grade()
    {
        return $this->hasMany(SubjectGrade::class, 'student_id');
    }
}
