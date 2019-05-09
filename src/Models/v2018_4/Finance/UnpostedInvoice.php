<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedInvoice Version v2018_4
 * 
 * Model for UnpostedInvoice
 *
 * @property integer $id
 * @property integer $billingLogId
 * @property integer $locationId
 * @property integer $departmentId
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $company
 * @property string $accountNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference $shipToSite
 * @property string $invoiceNumber
 * @property string $invoiceDate
 * @property string $invoiceType
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\BillingTermsReference $billingTerms
 * @property string $dueDays
 * @property string $dueDate
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference $currency
 * @property number $subTotal
 * @property number $total
 * @property boolean $invoiceTaxableFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 * @property boolean $avalaraTaxFlag
 * @property boolean $itemTaxableFlag
 * @property number $salesTaxAmount
 * @property boolean $stateTaxFlag
 * @property string $stateTaxXref
 * @property number $stateTaxAmount
 * @property boolean $countyTaxFlag
 * @property string $countyTaxXref
 * @property number $countyTaxAmount
 * @property boolean $cityTaxFlag
 * @property string $cityTaxXref
 * @property number $cityTaxAmount
 * @property boolean $countryTaxFlag
 * @property string $countryTaxXref
 * @property number $countryTaxAmount
 * @property boolean $compositeTaxFlag
 * @property string $compositeTaxXref
 * @property number $compositeTaxAmount
 * @property boolean $levelSixTaxFlag
 * @property string $levelSixTaxXref
 * @property number $levelSixTaxAmount
 * @property string $createdBy
 * @property string $dateClosed
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 */
class UnpostedInvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'billingLogId' => 'integer',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'accountNumber' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference',
        'invoiceNumber' => 'string',
        'invoiceDate' => 'string',
        'invoiceType' => 'string',
        'description' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_4\Finance\BillingTermsReference',
        'dueDays' => 'string',
        'dueDate' => 'string',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CurrencyReference',
        'subTotal' => 'number',
        'total' => 'number',
        'invoiceTaxableFlag' => 'boolean',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'salesTaxAmount' => 'number',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'stateTaxAmount' => 'number',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'countyTaxAmount' => 'number',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'cityTaxAmount' => 'number',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countryTaxAmount' => 'number',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'compositeTaxAmount' => 'number',
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'levelSixTaxAmount' => 'number',
        'createdBy' => 'string',
        'dateClosed' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
