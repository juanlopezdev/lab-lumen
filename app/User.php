<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

  protected $table = 'tb_user';
  protected $primaryKey = 'user_id';
  protected $fillable = ['user_id', 'user_name', 'user_lastname'];

  const CREATED_AT = 'user_created_at';
  const UPDATED_AT = 'user_updated_at';

}
