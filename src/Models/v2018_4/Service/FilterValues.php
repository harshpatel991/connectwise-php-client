<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class FilterValues Version v2018_4
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