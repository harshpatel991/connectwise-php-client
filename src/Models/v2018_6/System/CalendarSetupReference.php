<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CalendarSetupReference Version v2018_6
 * 
 * Model for CalendarSetupReference
 *
 * @property integer $id
 * @property integer $ownerId
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 */
class CalendarSetupReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ownerId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}
