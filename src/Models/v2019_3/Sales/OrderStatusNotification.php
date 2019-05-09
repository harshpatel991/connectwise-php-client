<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatusNotification Version v2019_3
 * 
 * Model for OrderStatusNotification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\OrderStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference $member
 * @property string $email
 * @property integer $workflowStep
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 */
class OrderStatusNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_3\Sales\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_3\Sales\OrderStatusReference',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Sales\MemberReference',
        'email' => 'string',
        'workflowStep' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
    ];
}
