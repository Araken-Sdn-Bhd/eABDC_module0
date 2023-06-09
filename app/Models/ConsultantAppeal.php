<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ConsultantAppeal extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    protected $table = 'CONSULTANT_APPEAL';

    protected $primaryKey = 'CONSULTANT_APPEAL_ID';

    public $timestamps = false;
}