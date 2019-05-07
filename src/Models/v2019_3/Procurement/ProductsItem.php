<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductsItem
 *
 * @property integer $count
 */
class ProductsItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
    ];
}
