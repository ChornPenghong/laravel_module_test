<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'gender', 'phone'];
    
    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\StudentFactory::new();
    }

    // public function setGenderAttribute() {
    //     $this->gender = ucwords('gender');
    // }
}
