<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2018_6
 * 
 * Model for Agreement
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $subContractCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference $subContractContact
 * @property integer $parentAgreementId
 * @property string $customerPO
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property string $startDate
 * @property string $endDate
 * @property boolean $noEndingDateFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\OpportunityReference $opportunity
 * @property boolean $cancelledFlag
 * @property string $dateCancelled
 * @property string $reasonCancelled
 * @property integer $slaId
 * @property string $workOrder
 * @property string $internalNotes
 * @property string $applicationUnits
 * @property number $applicationLimit
 * @property string $applicationCycle
 * @property boolean $applicationUnlimitedFlag
 * @property boolean $oneTimeFlag
 * @property boolean $coverAgreementTime
 * @property boolean $coverAgreementProduct
 * @property boolean $coverAgreementExpense
 * @property boolean $coverSalesTax
 * @property boolean $carryOverUnused
 * @property boolean $allowOverruns
 * @property integer $expiredDays
 * @property integer $limit
 * @property boolean $expireWhenZero
 * @property boolean $chargeToFirm
 * @property string $employeeCompRate
 * @property string $employeeCompNotExceed
 * @property number $compHourlyRate
 * @property number $compLimitAmount
 * @property integer $billCycleId
 * @property boolean $billOneTimeFlag
 * @property integer $billTermsId
 * @property string $invoicingCycle
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $billToSite
 * @property number $billAmount
 * @property boolean $taxable
 * @property number $prorateFirstBill
 * @property string $billStartDate
 * @property integer $taxCodeId
 * @property boolean $restrictDownPayment
 * @property boolean $prorateFlag
 * @property string $invoiceDescription
 * @property boolean $topComment
 * @property boolean $bottomComment
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference $workType
 * @property integer $projectTypeId
 * @property integer $invoiceTemplateSetupId
 * @property string $billTime
 * @property string $billExpenses
 * @property string $billProducts
 * @property boolean $billableTimeInvoice
 * @property boolean $billableExpenseInvoice
 * @property boolean $billableProductInvoice
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference $currency
 * @property string $periodType
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property array $customFields
 */
class Agreement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Finance\AgreementTypeReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference',
        'subContractCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'subContractContact' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference',
        'parentAgreementId' => 'integer',
        'customerPO' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'startDate' => 'string',
        'endDate' => 'string',
        'noEndingDateFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_6\Finance\OpportunityReference',
        'cancelledFlag' => 'boolean',
        'dateCancelled' => 'string',
        'reasonCancelled' => 'string',
        'slaId' => 'integer',
        'workOrder' => 'string',
        'internalNotes' => 'string',
        'applicationUnits' => 'string',
        'applicationLimit' => 'number',
        'applicationCycle' => 'string',
        'applicationUnlimitedFlag' => 'boolean',
        'oneTimeFlag' => 'boolean',
        'coverAgreementTime' => 'boolean',
        'coverAgreementProduct' => 'boolean',
        'coverAgreementExpense' => 'boolean',
        'coverSalesTax' => 'boolean',
        'carryOverUnused' => 'boolean',
        'allowOverruns' => 'boolean',
        'expiredDays' => 'integer',
        'limit' => 'integer',
        'expireWhenZero' => 'boolean',
        'chargeToFirm' => 'boolean',
        'employeeCompRate' => 'string',
        'employeeCompNotExceed' => 'string',
        'compHourlyRate' => 'number',
        'compLimitAmount' => 'number',
        'billCycleId' => 'integer',
        'billOneTimeFlag' => 'boolean',
        'billTermsId' => 'integer',
        'invoicingCycle' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'billAmount' => 'number',
        'taxable' => 'boolean',
        'prorateFirstBill' => 'number',
        'billStartDate' => 'string',
        'taxCodeId' => 'integer',
        'restrictDownPayment' => 'boolean',
        'prorateFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topComment' => 'boolean',
        'bottomComment' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_6\Finance\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference',
        'projectTypeId' => 'integer',
        'invoiceTemplateSetupId' => 'integer',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billableTimeInvoice' => 'boolean',
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference',
        'periodType' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'customFields' => 'array',
    ];
}
