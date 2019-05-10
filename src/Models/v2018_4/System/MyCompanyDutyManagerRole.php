<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyCompanyDutyManagerRole Version v2018_4
 * 
 * Model for MyCompanyDutyManagerRole
 *
 * @property integer $count
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $reAssignToMember
 */
class MyCompanyDutyManagerRole extends Model
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