<?php

namespace App\Repositories\Usr;

use App\Constants;
use App\Models\Usr\TblAccount;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function __construct()
    {   
    }

    public function getMatchUser(array $params)
    {
        $sql = TblAccount::where('mail', $params['mail']);

        $row = $sql->first();

        return $row;
    }

    /**
     * ユーザーアカウント新規登録
     * 
     * @param array $formData
     */
    public function insTblAccount(array $data)
    {
        $nowTimeStamp = now();

        $model = new TblAccount();
        $data['user_kbn']               = 1;
        $data['family_name']            = $data['last_name'];
        $data['password']               = HASH::make($data['pass']);
        $data['tel1']                   = null;
        $data['tel2']                   = null;
        $data['tel3']                   = null;
        $data['zip']                    = null;
        $data['address']                = null;
        $data['create_at']             = $nowTimeStamp;
        $data['update_at']             = $nowTimeStamp;
        $data['last_login_timestamp']   = $nowTimeStamp;
        $data['upd_password_timestamp']  = null;
        $data['del_flg']                = 0;

        $model->fill($data)->save();

    }
}