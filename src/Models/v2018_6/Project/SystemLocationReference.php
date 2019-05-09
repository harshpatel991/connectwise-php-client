<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SystemLocationReference Version v2018_6
 * 
 * Model for SystemLocationReference
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Project\Metadata $_info
 */
class SystemLocationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Project\Metadata',
    ];
}
