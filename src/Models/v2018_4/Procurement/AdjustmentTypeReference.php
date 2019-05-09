<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentTypeReference Version v2018_4
 * 
 * Model for AdjustmentTypeReference
 *
 * @property integer $id
 * @property string $identifier
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 */
class AdjustmentTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
    ];
}
