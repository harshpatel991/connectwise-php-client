<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CatalogsItem
 *
 * @property integer $id
 * @property integer $onHand
 */
class CatalogsItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'onHand' => 'integer',
    ];
}
