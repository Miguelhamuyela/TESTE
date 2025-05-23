<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'companies';
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];


    public function members(){

        return $this->hasMany(CompanyMember::class, 'company_id');
    }
}
