<?php

namespace App\Models\Usr;

use Illuminate\Database\Eloquent\Model;

class TblAccount extends Model
{
    protected $table = 'tbl_account';

    protected $guarded = [
        'id',
    ]; 
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';
}
