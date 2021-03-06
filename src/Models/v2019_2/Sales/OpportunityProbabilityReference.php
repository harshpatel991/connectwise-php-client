<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityProbabilityReference Version v2019_2
 *
 * Model for OpportunityProbabilityReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class OpportunityProbabilityReference extends Model
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
