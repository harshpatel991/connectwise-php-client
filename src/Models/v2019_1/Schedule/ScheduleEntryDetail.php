<?php

namespace Spinen\ConnectWise\Models\v2019_1\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleEntryDetail Version v2019_1
 * 
 * Model for ScheduleEntryDetail
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\ScheduleEntryReference $scheduleEntry
 * @property string $dateStart
 * @property string $dateEnd
 * @property number $hoursScheduled
 * @property Spinen\ConnectWise\Models\v2019_1\Schedule\Metadata $_info
 */
class ScheduleEntryDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'scheduleEntry' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\ScheduleEntryReference',
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'hoursScheduled' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Schedule\Metadata',
    ];
}
