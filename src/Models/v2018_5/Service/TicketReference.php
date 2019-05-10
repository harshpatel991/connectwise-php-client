<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketReference Version v2018_5
 * 
 * Model for TicketReference
 *
 * @property integer $id
 * @property string $summary
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 */
class TicketReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'summary' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
    ];
}