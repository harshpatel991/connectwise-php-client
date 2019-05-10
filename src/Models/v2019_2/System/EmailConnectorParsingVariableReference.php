<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingVariableReference Version v2019_2
 * 
 * Model for EmailConnectorParsingVariableReference
 *
 * @property integer $id
 * @property string $name
 * @property string $identifier
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class EmailConnectorParsingVariableReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'identifier' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}