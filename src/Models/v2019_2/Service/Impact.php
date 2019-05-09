<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Impact Version v2019_2
 * 
 * Model for Impact
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property boolean $defaultFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 */
class Impact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'defaultFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
    ];
}
