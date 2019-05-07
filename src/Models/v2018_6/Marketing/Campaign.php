<?php

namespace Spinen\ConnectWise\Models\v2018_6\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Campaign
 *
 * @property integer $count
 */
class Campaign extends Model
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
