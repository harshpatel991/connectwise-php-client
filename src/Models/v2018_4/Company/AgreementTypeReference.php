<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeReference Version v2018_4
 *
 * agreementType or configurationType is required
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class AgreementTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
