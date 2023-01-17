<?php
namespace App\Models;

use CodeIgniter\Models;

class UserModel extends Model {

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id','name', 'email', 'password',];
    
    protected $useTimeStamps = false;



}
