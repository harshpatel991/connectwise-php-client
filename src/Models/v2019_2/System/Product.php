<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Product Version v2019_2
 * 
 * Model for Product
 *
 * @property string $identifier
 * @property string $password
 * @property boolean $installedFlag
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class Product extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'identifier' => 'string',
        'password' => 'string',
        'installedFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
