<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Commission Version v2018_6
 * 
 * Model for Commission
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference $member
 * @property number $commissionPercent
 * @property string $dateStart
 * @property string $dateEnd
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\TicketReference $ticket
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\SystemLocationReference $territory
 * @property string $billingMethod
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ProjectBoardReference $projectBoard
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ProjectTypeReference $projectType
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\AgreementTypeReference $agreementType
 * @property integer $numberOfMonths
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ProductCategoryReference $productCategory
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ProductSubCategoryReference $productSubCategory
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\IvItemReference $item
 * @property string $commissionBasis
 * @property string $invoiceOption
 * @property boolean $servicesFlag
 * @property boolean $agreementsFlag
 * @property boolean $productsFlag
 * @property boolean $myOpportunitiesFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 */
class Commission extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference',
        'commissionPercent' => 'number',
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\Sales\SystemLocationReference',
        'department' => 'Spinen\ConnectWise\Models\v2018_6\Sales\SystemDepartmentReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Sales\CompanyReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_6\Sales\SiteReference',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_6\Sales\AgreementReference',
        'project' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ProjectReference',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2018_6\Sales\BoardReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_6\Sales\TicketReference',
        'territory' => 'Spinen\ConnectWise\Models\v2018_6\Sales\SystemLocationReference',
        'billingMethod' => 'string',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ServiceTypeReference',
        'projectBoard' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ProjectBoardReference',
        'projectType' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ProjectTypeReference',
        'agreementType' => 'Spinen\ConnectWise\Models\v2018_6\Sales\AgreementTypeReference',
        'numberOfMonths' => 'integer',
        'productCategory' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ProductCategoryReference',
        'productSubCategory' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ProductSubCategoryReference',
        'item' => 'Spinen\ConnectWise\Models\v2018_6\Sales\IvItemReference',
        'commissionBasis' => 'string',
        'invoiceOption' => 'string',
        'servicesFlag' => 'boolean',
        'agreementsFlag' => 'boolean',
        'productsFlag' => 'boolean',
        'myOpportunitiesFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
    ];
}
