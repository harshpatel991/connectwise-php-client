<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplateReference Version v2019_2
 * 
 * Required when notifyType is set to: "Create a Service Ticket"
 *
 * @property integer $id
 * @property string $name
 * @property string $summary
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class ServiceTemplateReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'summary' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
