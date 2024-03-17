<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Student extends Model
{
    public $fillable = ['title', 'name', 'bday', 'age', 'gender','phone', 'address', 'email', 'password', 't&c'];
}