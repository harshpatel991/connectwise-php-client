<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableXRefLevel Version v2019_2
 * 
 * Model for TaxableXRefLevel
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeLevelReference $taxCodeLevel
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 */
class TaxableXRefLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'taxCodeLevel' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeLevelReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
    ];
}
