<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Priority Version v2019_1
 * 
 * Model for Priority
 *
 * @property integer $id
 * @property string $name
 * @property string $color
 * @property integer $sortOrder
 * @property boolean $defaultFlag
 * @property string $imageLink
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 */
class Priority extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'color' => 'string',
        'sortOrder' => 'integer',
        'defaultFlag' => 'boolean',
        'imageLink' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
    ];
}
