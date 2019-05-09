<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeReference Version v2019_2
 * 
 * Model for ExpenseTypeReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\Metadata $_info
 */
class ExpenseTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Expense\Metadata',
    ];
}
