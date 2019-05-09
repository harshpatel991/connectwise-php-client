<?php

namespace Spinen\ConnectWise\Models\v2018_4\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PaymentMethodReference Version v2018_4
 * 
 * Model for PaymentMethodReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Internal\Metadata $_info
 */
class PaymentMethodReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Internal\Metadata',
    ];
}
