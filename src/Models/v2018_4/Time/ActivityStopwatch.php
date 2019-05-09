<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityStopwatch Version v2018_4
 * 
 * Model for ActivityStopwatch
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Metadata $_info
 * @property integer $activityId
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Guid $activityMobileGuid
 * @property Spinen\ConnectWise\Models\v2018_4\Time\AgreementReference $agreement
 * @property string $billableOption
 * @property integer $businessUnitId
 * @property string $dateEntered
 * @property string $endTime
 * @property integer $id
 * @property string $internalNotes
 * @property integer $locationId
 * @property Spinen\ConnectWise\Models\v2018_4\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Guid $mobileGuid
 * @property string $notes
 * @property string $startTime
 * @property string $status
 * @property integer $totalPauseTime
 * @property Spinen\ConnectWise\Models\v2018_4\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_4\Time\WorkTypeReference $workType
 */
class ActivityStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Time\Metadata',
        'activityId' => 'integer',
        'activityMobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Time\Guid',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_4\Time\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'string',
        'endTime' => 'string',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Time\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Time\Guid',
        'notes' => 'string',
        'startTime' => 'string',
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_4\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_4\Time\WorkTypeReference',
    ];
}
