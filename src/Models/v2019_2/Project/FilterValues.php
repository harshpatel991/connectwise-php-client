<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class FilterValues Version v2019_2
 * 
 * Model for FilterValues
 *
 * @property string $conditions
 * @property string $orderBy
 * @property string $childconditions
 * @property string $customfieldconditions
 */
class FilterValues extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'conditions' => 'string',
        'orderBy' => 'string',
        'childconditions' => 'string',
        'customfieldconditions' => 'string',
    ];
}