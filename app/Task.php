<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'job',
    'month_salary'
  ];

  public function employees() {
    return $this -> belongsToMany(Employee::class);
  }
}
