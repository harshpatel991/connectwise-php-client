<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class IvItemReference Version v2018_6
 * 
 * Model for IvItemReference
 *
 * @property integer $id
 * @property string $identifier
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 */
class IvItemReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
    ];
}
