<?php

namespace Spinen\ConnectWise\Models\v2019_2\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExternalWorkTypeIntegrationReference Version v2019_2
 * 
 * Model for ExternalWorkTypeIntegrationReference
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Time\Metadata $_info
 */
class ExternalWorkTypeIntegrationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Time\Metadata',
    ];
}
