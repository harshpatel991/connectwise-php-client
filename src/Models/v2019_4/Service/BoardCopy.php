<?php

namespace Spinen\ConnectWise\Models\v2019_4\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardCopy Version v2019_4
 *
 * Model for BoardCopy
 *
 * @property integer $id
 * @property string $name
 */
class BoardCopy extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];
}
