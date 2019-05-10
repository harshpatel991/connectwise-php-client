<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeAccrualReference Version v2018_4
 * 
 * Model for TimeAccrualReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Metadata $_info
 */
class TimeAccrualReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Time\Metadata',
    ];
}