<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class LocationInfo Version v2019_2
 *
 * Model for LocationInfo
 *
 * @property Metadata $_info
 * @property boolean $location_flag
 * @property integer $id
 * @property string $name
 */
class LocationInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'location_flag' => 'boolean',
        'name' => 'string'
    ];
}
