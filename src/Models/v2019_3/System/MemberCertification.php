<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberCertification Version v2019_3
 * 
 * Model for MemberCertification
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_3\System\CertificationReference $certification
 * @property integer $percentComplete
 * @property string $dateReceived
 * @property string $dateExpires
 * @property string $certificationNumber
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\System\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 */
class MemberCertification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'certification' => 'Spinen\ConnectWise\Models\v2019_3\System\CertificationReference',
        'percentComplete' => 'integer',
        'dateReceived' => 'string',
        'dateExpires' => 'string',
        'certificationNumber' => 'string',
        'notes' => 'string',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\System\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
