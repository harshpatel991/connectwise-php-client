<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationProjectManager Version v2019_1
 * 
 * A list of Projects that the member is the project manager
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $reAssignToMember
 */
class MemberDeactivationProjectManager extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
    ];
}