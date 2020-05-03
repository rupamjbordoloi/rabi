<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionPaper extends Model
{
    protected $append = ['status_show'];
    protected $guarded = [
        'id'
    ];

    public function getStatusShowAttribute()
    {
        if($this->status==1){
            return 'Active';
        }else{
            return 'Inactive';
        }
    }
}
