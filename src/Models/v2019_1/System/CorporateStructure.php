<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CorporateStructure Version v2019_1
 * 
 * Model for CorporateStructure
 *
 * @property integer $id
 * @property string $levelCount
 * @property string $level1Name
 * @property string $level2Name
 * @property string $level3Name
 * @property string $level4Name
 * @property string $level5Name
 * @property string $fiscalYearStart
 * @property string $locationCaption
 * @property string $groupCaption
 * @property Spinen\ConnectWise\Models\v2019_1\System\CurrencyReference $baseCurrency
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $president
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $chiefOperatingOfficer
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $controller
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $dispatcher
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $serviceManager
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $dutyManager
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 */
class CorporateStructure extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'levelCount' => 'string',
        'level1Name' => 'string',
        'level2Name' => 'string',
        'level3Name' => 'string',
        'level4Name' => 'string',
        'level5Name' => 'string',
        'fiscalYearStart' => 'string',
        'locationCaption' => 'string',
        'groupCaption' => 'string',
        'baseCurrency' => 'Spinen\ConnectWise\Models\v2019_1\System\CurrencyReference',
        'president' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'chiefOperatingOfficer' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'controller' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'dispatcher' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
