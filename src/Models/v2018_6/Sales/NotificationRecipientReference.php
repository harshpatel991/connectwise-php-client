<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class NotificationRecipientReference Version v2018_6
 * 
 * Model for NotificationRecipientReference
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 */
class NotificationRecipientReference extends Model
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
    ];
}