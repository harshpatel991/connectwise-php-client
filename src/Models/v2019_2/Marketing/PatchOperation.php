<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PatchOperation Version v2019_2
 * 
 * Model for PatchOperation
 *
 * @property string $op
 * @property string $path
 * @property string $value
 */
class PatchOperation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'op' => 'string',
        'path' => 'string',
        'value' => 'string',
    ];
}
