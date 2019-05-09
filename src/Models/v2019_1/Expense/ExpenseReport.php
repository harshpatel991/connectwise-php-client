<?php

namespace Spinen\ConnectWise\Models\v2019_1\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReport Version v2019_1
 * 
 * Model for ExpenseReport
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\MemberReference $member
 * @property integer $year
 * @property integer $period
 * @property string $dateStart
 * @property string $dateEnd
 * @property string $status
 * @property number $total
 * @property string $dueDate
 * @property Spinen\ConnectWise\Models\v2019_1\Expense\Metadata $_info
 */
class ExpenseReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Expense\MemberReference',
        'year' => 'integer',
        'period' => 'integer',
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'status' => 'string',
        'total' => 'number',
        'dueDate' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Expense\Metadata',
    ];
}
