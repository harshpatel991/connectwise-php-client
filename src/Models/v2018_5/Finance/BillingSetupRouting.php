<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingSetupRouting Version v2018_5
 * 
 * Model for BillingSetupRouting
 *
 * @property integer $id
 * @property integer $sequenceNumber
 * @property string $invoiceRule
 * @property string $routingRule
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 */
class BillingSetupRouting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sequenceNumber' => 'integer',
        'invoiceRule' => 'string',
        'routingRule' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Finance\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
