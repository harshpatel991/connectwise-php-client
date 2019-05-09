<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DispatchMember Version v2018_4
 * 
 * Model for DispatchMember
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $reAssignToMember
 */
class DispatchMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
    ];
}
