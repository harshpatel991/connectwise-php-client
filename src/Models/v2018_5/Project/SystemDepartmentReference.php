<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SystemDepartmentReference Version v2018_5
 * 
 * Model for SystemDepartmentReference
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_5\Project\Metadata $_info
 */
class SystemDepartmentReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Project\Metadata',
    ];
}