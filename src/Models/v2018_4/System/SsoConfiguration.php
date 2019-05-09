<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SsoConfiguration Version v2018_4
 * 
 * Model for SsoConfiguration
 *
 * @property integer $id
 * @property string $name
 * @property string $ssoType
 * @property boolean $inactiveFlag
 * @property string $samlEntityId
 * @property string $samlSignInUrl
 * @property string $samlIdpCertificate
 * @property string $samlCertificateName
 * @property string $samlCertificateIssuedTo
 * @property string $samlCertificateThumbprint
 * @property string $samlCertificateValidFrom
 * @property string $samlCertificateValidTo
 * @property array $locationIds
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 */
class SsoConfiguration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'ssoType' => 'string',
        'inactiveFlag' => 'boolean',
        'samlEntityId' => 'string',
        'samlSignInUrl' => 'string',
        'samlIdpCertificate' => 'string',
        'samlCertificateName' => 'string',
        'samlCertificateIssuedTo' => 'string',
        'samlCertificateThumbprint' => 'string',
        'samlCertificateValidFrom' => 'string',
        'samlCertificateValidTo' => 'string',
        'locationIds' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
    ];
}
