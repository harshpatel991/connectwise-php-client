<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Opportunity Version v2018_5
 * 
 * A list of the member's currently assigned Opportunities
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $reAssignToMember
 */
class Opportunity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
    ];
}