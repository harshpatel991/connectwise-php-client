<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectTypeReference Version v2019_2
 * 
 * Model for ProjectTypeReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 */
class ProjectTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
