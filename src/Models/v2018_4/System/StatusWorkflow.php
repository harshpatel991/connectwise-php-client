<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class StatusWorkflow Version v2018_4
 *
 * Model for StatusWorkflow
 *
 * @property MemberReference $reAssignToMember
 * @property integer $count
 * @property integer $id
 * @property string $name
 */
class StatusWorkflow extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'id' => 'integer',
        'name' => 'string',
        'reAssignToMember' => MemberReference::class
    ];
}
