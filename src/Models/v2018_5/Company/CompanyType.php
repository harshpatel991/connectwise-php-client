<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyType
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $vendorFlag
 */
class CompanyType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'vendorFlag' => 'boolean',
    ];
}
