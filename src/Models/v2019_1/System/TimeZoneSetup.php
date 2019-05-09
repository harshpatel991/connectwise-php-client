<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZoneSetup Version v2019_1
 * 
 * Model for TimeZoneSetup
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\System\TimeZoneReference $timeZone
 * @property number $offset
 * @property boolean $defaultFlag
 * @property boolean $daylightSavingsFlag
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class TimeZoneSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'timeZone' => 'Spinen\ConnectWise\Models\v2019_1\System\TimeZoneReference',
        'offset' => 'number',
        'defaultFlag' => 'boolean',
        'daylightSavingsFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
