<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function getID()
    {
        $item = $this->id;
        return $item;
    }
    public function getGendar()
    {
        $item = $this->gendar;
        return $item;
    }
    public function getFullname()
    {
        $item = $this->fullname;
        return $item;
    }
    public function getEmail()
    {
        $item = $this->email;
        return $item;
    }
    public function getOpinion()
    {
        $item = $this->opinion;
        return $item;
    }


    // {
    //     $txt = 'ID:' . $this->id . ' ' . $this->name . '(' . $this->age .  '才' . ') ' . $this->nationality;
    //     return $txt;
    // }
}
