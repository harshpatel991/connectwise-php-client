<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyPickerItem Version v2018_5
 * 
 * Model for CompanyPickerItem
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_5\Company\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyStatusReference $companyStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CompanyTypeReference $companyType
 * @property Spinen\ConnectWise\Models\v2018_5\Company\SiteReference $companySite
 * @property Spinen\ConnectWise\Models\v2018_5\Company\SystemLocationReference $companyLocation
 * @property Spinen\ConnectWise\Models\v2018_5\Company\CountryReference $companyCountry
 * @property boolean $vendorPickerFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 */
class CompanyPickerItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Company\MemberReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyReference',
        'companyStatus' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyStatusReference',
        'companyType' => 'Spinen\ConnectWise\Models\v2018_5\Company\CompanyTypeReference',
        'companySite' => 'Spinen\ConnectWise\Models\v2018_5\Company\SiteReference',
        'companyLocation' => 'Spinen\ConnectWise\Models\v2018_5\Company\SystemLocationReference',
        'companyCountry' => 'Spinen\ConnectWise\Models\v2018_5\Company\CountryReference',
        'vendorPickerFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
    ];
}
