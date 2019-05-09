<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ClosedInvoice Version v2019_2
 * 
 * Model for ClosedInvoice
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\BillingStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 */
class ClosedInvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2019_2\Finance\BillingStatusReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
