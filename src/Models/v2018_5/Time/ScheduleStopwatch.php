<?php

namespace Spinen\ConnectWise\Models\v2018_5\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleStopwatch Version v2018_5
 * 
 * Model for ScheduleStopwatch
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Time\AgreementReference $agreement
 * @property string $billableOption
 * @property integer $businessUnitId
 * @property string $dateEntered
 * @property string $endTime
 * @property integer $id
 * @property string $internalNotes
 * @property integer $locationId
 * @property Spinen\ConnectWise\Models\v2018_5\Time\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Guid $mobileGuid
 * @property string $notes
 * @property integer $scheduleId
 * @property Spinen\ConnectWise\Models\v2018_5\Time\Guid $scheduleMobileGuid
 * @property string $startTime
 * @property string $status
 * @property integer $totalPauseTime
 * @property Spinen\ConnectWise\Models\v2018_5\Time\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_5\Time\WorkTypeReference $workType
 */
class ScheduleStopwatch extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Time\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Time\AgreementReference',
        'billableOption' => 'string',
        'businessUnitId' => 'integer',
        'dateEntered' => 'string',
        'endTime' => 'string',
        'id' => 'integer',
        'internalNotes' => 'string',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Time\MemberReference',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Time\Guid',
        'notes' => 'string',
        'scheduleId' => 'integer',
        'scheduleMobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Time\Guid',
        'startTime' => 'string',
        'status' => 'string',
        'totalPauseTime' => 'integer',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\Time\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_5\Time\WorkTypeReference',
    ];
}
