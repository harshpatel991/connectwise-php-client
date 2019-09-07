<?php

namespace Spinen\ConnectWise\Models\v2019_4\Internal;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReportReference Version v2019_4
 *
 * Model for ExpenseReportReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ExpenseReportReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
