<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiMember Version v2019_2
 * 
 * Model for ApiMember
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property string $emailAddress
 * @property boolean $inactiveFlag
 * @property string $inactiveDate
 * @property Spinen\ConnectWise\Models\v2019_2\System\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2019_2\System\SecurityRoleReference $securityRole
 * @property Spinen\ConnectWise\Models\v2019_2\System\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference $defaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $salesDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\BoardReference $serviceDefaultBoard
 * @property string $notes
 * @property array $excludedServiceBoardIds
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class ApiMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'emailAddress' => 'string',
        'inactiveFlag' => 'boolean',
        'inactiveDate' => 'string',
        'timeZone' => 'Spinen\ConnectWise\Models\v2019_2\System\TimeZoneSetupReference',
        'securityRole' => 'Spinen\ConnectWise\Models\v2019_2\System\SecurityRoleReference',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2019_2\System\StructureReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'defaultDepartment' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference',
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'serviceDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_2\System\BoardReference',
        'notes' => 'string',
        'excludedServiceBoardIds' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
