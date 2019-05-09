<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Count Version v2018_4
 * 
 * Model for Count
 *
 * @property integer $count
 */
class Count extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
    ];
}
