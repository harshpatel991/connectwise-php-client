<?php

namespace Spinen\ConnectWise\Models\v2018_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatus Version v2018_5
 * 
 * Model for RmaStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property integer $sortOrder
 * @property boolean $closedFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\RmaStatusEmailTemplateReference $emailTemplate
 * @property Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata $_info
 */
class RmaStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'sortOrder' => 'integer',
        'closedFlag' => 'boolean',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\RmaStatusEmailTemplateReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Procurement\Metadata',
    ];
}
