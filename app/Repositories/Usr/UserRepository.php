<?php

namespace App\Repositories\Usr;

use App\Constants;
use App\Models\Usr\TblAccount;

class UserRepository
{
    public function __construct()
    {   
    }

    public function getMatchUser(array $params)
    {
        $sql = TblAccount::where('mail', $params['mail']);
        $aql = $sql->where('password', $params['pass']);

        $row = $sql->first();
        
        return $row;
    }
}