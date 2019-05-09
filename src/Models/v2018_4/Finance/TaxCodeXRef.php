<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeXRef Version v2018_4
 * 
 * Model for TaxCodeXRef
 *
 * @property integer $id
 * @property string $description
 * @property boolean $defaultFlag
 * @property string $levelOne
 * @property string $levelTwo
 * @property string $levelThree
 * @property string $levelFour
 * @property string $levelFive
 * @property string $levelSix
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 */
class TaxCodeXRef extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'defaultFlag' => 'boolean',
        'levelOne' => 'string',
        'levelTwo' => 'string',
        'levelThree' => 'string',
        'levelFour' => 'string',
        'levelFive' => 'string',
        'levelSix' => 'string',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
