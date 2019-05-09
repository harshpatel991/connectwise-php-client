<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleDetail Version v2019_2
 * 
 * Model for ScheduleDetail
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\ScheduleEntryReference $scheduleEntry
 * @property string $dateStart
 * @property string $dateEnd
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata $_info
 */
class ScheduleDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'scheduleEntry' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\ScheduleEntryReference',
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\MemberReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata',
    ];
}
