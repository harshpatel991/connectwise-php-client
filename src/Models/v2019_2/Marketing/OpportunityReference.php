<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityReference Version v2019_2
 * 
 * Model for OpportunityReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata $_info
 */
class OpportunityReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata',
    ];
}
