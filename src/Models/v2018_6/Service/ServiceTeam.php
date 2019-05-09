<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTeam Version v2018_6
 * 
 * Model for ServiceTeam
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Service\MemberReference $leader
 * @property Spinen\ConnectWise\Models\v2018_6\Service\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_6\Service\SystemDepartmentReference $department
 * @property boolean $deleteNotifyFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 */
class ServiceTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'leader' => 'Spinen\ConnectWise\Models\v2018_6\Service\MemberReference',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Service\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\Service\SystemDepartmentReference',
        'deleteNotifyFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
    ];
}
