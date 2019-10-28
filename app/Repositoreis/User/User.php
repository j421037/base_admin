<?php


namespace App\Repositoreis\User;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $fillable = ["user", "password", "email", "phone", "email_verified_at"];
}
