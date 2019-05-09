<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityStatusReference Version v2018_4
 * 
 * Model for ActivityStatusReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
 */
class ActivityStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
    ];
}
