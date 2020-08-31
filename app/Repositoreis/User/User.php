<?php


namespace App\Repositoreis\User;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;
class User extends Model implements JWTSubject
{
    use SoftDeletes;

    protected $fillable = ["user", "password", "email", "phone", "email_verified_at"];

    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return [
            "id"        => $this->id,
            "phone"     => $this->phone,
            "model"     => "user"
        ];
    }

    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }
}
