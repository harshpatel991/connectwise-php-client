<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkTypeExclusion Version v2019_3
 * 
 * Model for AgreementTypeWorkTypeExclusion
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 */
class AgreementTypeWorkTypeExclusion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Finance\AgreementTypeReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WorkTypeReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
    ];
}
