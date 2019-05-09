<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaAction Version v2019_3
 * 
 * Model for RmaAction
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 */
class RmaAction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
    ];
}
