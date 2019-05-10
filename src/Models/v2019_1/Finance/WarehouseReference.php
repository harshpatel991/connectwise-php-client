<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WarehouseReference Version v2019_1
 * 
 * Model for WarehouseReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
class WarehouseReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}