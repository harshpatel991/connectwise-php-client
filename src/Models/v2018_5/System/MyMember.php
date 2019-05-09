<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyMember Version v2018_5
 * 
 * Model for MyMember
 *
 * @property integer $id
 * @property string $identifier
 * @property string $password
 * @property string $firstName
 * @property string $middleInitial
 * @property string $lastName
 * @property string $title
 * @property Spinen\ConnectWise\Models\v2018_5\System\ReportCardReference $reportCard
 * @property string $licenseClass
 * @property boolean $disableOnlineFlag
 * @property boolean $enableMobileFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberTypeReference $type
 * @property string $employeeIdentifer
 * @property string $vendorNumber
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2018_5\System\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2018_5\System\CountryReference $country
 * @property array $serviceBoardTeamIds
 * @property boolean $enableMobileGpsFlag
 * @property string $inactiveDate
 * @property boolean $inactiveFlag
 * @property string $lastLogin
 * @property Spinen\ConnectWise\Models\v2018_5\System\DocumentReference $photo
 * @property string $officeEmail
 * @property string $officePhone
 * @property string $officeExtension
 * @property string $mobileEmail
 * @property string $mobilePhone
 * @property string $mobileExtension
 * @property string $homeEmail
 * @property string $homePhone
 * @property string $homeExtension
 * @property string $defaultEmail
 * @property string $defaultPhone
 * @property Spinen\ConnectWise\Models\v2018_5\System\SecurityRoleReference $securityRole
 * @property boolean $adminFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference $defaultDepartment
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $reportsTo
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictDepartmentFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_5\System\WorkTypeReference $workType
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $expenseApprover
 * @property number $billableForecast
 * @property number $dailyCapacity
 * @property number $hourlyCost
 * @property number $hourlyRate
 * @property boolean $includeInUtilizationReportingFlag
 * @property boolean $requireExpenseEntryFlag
 * @property boolean $requireTimeSheetEntryFlag
 * @property boolean $requireStartAndEndTimeOnTimeEntryFlag
 * @property boolean $allowInCellEntryOnTimeSheet
 * @property boolean $enterTimeAgainstCompanyFlag
 * @property boolean $allowExpensesEnteredAgainstCompaniesFlag
 * @property boolean $timeReminderEmailFlag
 * @property integer $daysTolerance
 * @property number $minimumHours
 * @property string $timeSheetStartDate
 * @property string $hireDate
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $serviceDefaultLocation
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference $serviceDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2018_5\System\BoardReference $serviceDefaultBoard
 * @property boolean $restrictServiceDefaultLocationFlag
 * @property boolean $restrictServiceDefaultDepartmentFlag
 * @property array $excludedServiceBoardIds
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $projectDefaultLocation
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference $projectDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2018_5\System\ProjectBoardReference $projectDefaultBoard
 * @property boolean $restrictProjectDefaultLocationFlag
 * @property boolean $restrictProjectDefaultDepartmentFlag
 * @property array $excludedProjectBoardIds
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $scheduleDefaultLocation
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference $scheduleDefaultDepartment
 * @property number $scheduleCapacity
 * @property Spinen\ConnectWise\Models\v2018_5\System\ServiceLocationReference $serviceLocation
 * @property boolean $restrictScheduleFlag
 * @property boolean $hideMemberInDispatchPortalFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference $salesDefaultLocation
 * @property boolean $restrictDefaultSalesTerritoryFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2018_5\System\WarehouseBinReference $warehouseBin
 * @property boolean $restrictDefaultWarehouseFlag
 * @property boolean $restrictDefaultWarehouseBinFlag
 * @property string $mapiName
 * @property boolean $calendarSyncIntegrationFlag
 * @property boolean $enableLdapAuthenticationFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\LdapConfigurationReference $ldapConfiguration
 * @property string $ldapUserName
 * @property string $companyActivityTabFormat
 * @property string $invoiceTimeTabFormat
 * @property string $invoiceScreenDefaultTabFormat
 * @property string $invoicingDisplayOptions
 * @property string $agreementInvoicingDisplayOptions
 * @property string $corelyticsUsername
 * @property string $corelyticsPassword
 * @property string $remotePackage
 * @property string $remotePackagePlatform
 * @property string $remotePackageUserName
 * @property string $remotePackagePassword
 * @property string $remotePackageAccount
 * @property string $authenticationServiceType
 * @property boolean $timebasedOneTimePasswordActivated
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class MyMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'password' => 'string',
        'firstName' => 'string',
        'middleInitial' => 'string',
        'lastName' => 'string',
        'title' => 'string',
        'reportCard' => 'Spinen\ConnectWise\Models\v2018_5\System\ReportCardReference',
        'licenseClass' => 'string',
        'disableOnlineFlag' => 'boolean',
        'enableMobileFlag' => 'boolean',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberTypeReference',
        'employeeIdentifer' => 'string',
        'vendorNumber' => 'string',
        'notes' => 'string',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_5\System\TimeZoneSetupReference',
        'country' => 'Spinen\ConnectWise\Models\v2018_5\System\CountryReference',
        'serviceBoardTeamIds' => 'array',
        'enableMobileGpsFlag' => 'boolean',
        'inactiveDate' => 'string',
        'inactiveFlag' => 'boolean',
        'lastLogin' => 'string',
        'photo' => 'Spinen\ConnectWise\Models\v2018_5\System\DocumentReference',
        'officeEmail' => 'string',
        'officePhone' => 'string',
        'officeExtension' => 'string',
        'mobileEmail' => 'string',
        'mobilePhone' => 'string',
        'mobileExtension' => 'string',
        'homeEmail' => 'string',
        'homePhone' => 'string',
        'homeExtension' => 'string',
        'defaultEmail' => 'string',
        'defaultPhone' => 'string',
        'securityRole' => 'Spinen\ConnectWise\Models\v2018_5\System\SecurityRoleReference',
        'adminFlag' => 'boolean',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2018_5\System\StructureReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'defaultDepartment' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference',
        'reportsTo' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_5\System\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_5\System\WorkTypeReference',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
        'billableForecast' => 'number',
        'dailyCapacity' => 'number',
        'hourlyCost' => 'number',
        'hourlyRate' => 'number',
        'includeInUtilizationReportingFlag' => 'boolean',
        'requireExpenseEntryFlag' => 'boolean',
        'requireTimeSheetEntryFlag' => 'boolean',
        'requireStartAndEndTimeOnTimeEntryFlag' => 'boolean',
        'allowInCellEntryOnTimeSheet' => 'boolean',
        'enterTimeAgainstCompanyFlag' => 'boolean',
        'allowExpensesEnteredAgainstCompaniesFlag' => 'boolean',
        'timeReminderEmailFlag' => 'boolean',
        'daysTolerance' => 'integer',
        'minimumHours' => 'number',
        'timeSheetStartDate' => 'string',
        'hireDate' => 'string',
        'serviceDefaultLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'serviceDefaultDepartment' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference',
        'serviceDefaultBoard' => 'Spinen\ConnectWise\Models\v2018_5\System\BoardReference',
        'restrictServiceDefaultLocationFlag' => 'boolean',
        'restrictServiceDefaultDepartmentFlag' => 'boolean',
        'excludedServiceBoardIds' => 'array',
        'projectDefaultLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'projectDefaultDepartment' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference',
        'projectDefaultBoard' => 'Spinen\ConnectWise\Models\v2018_5\System\ProjectBoardReference',
        'restrictProjectDefaultLocationFlag' => 'boolean',
        'restrictProjectDefaultDepartmentFlag' => 'boolean',
        'excludedProjectBoardIds' => 'array',
        'scheduleDefaultLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'scheduleDefaultDepartment' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemDepartmentReference',
        'scheduleCapacity' => 'number',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\ServiceLocationReference',
        'restrictScheduleFlag' => 'boolean',
        'hideMemberInDispatchPortalFlag' => 'boolean',
        'calendar' => 'Spinen\ConnectWise\Models\v2018_5\System\CalendarReference',
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2018_5\System\SystemLocationReference',
        'restrictDefaultSalesTerritoryFlag' => 'boolean',
        'warehouse' => 'Spinen\ConnectWise\Models\v2018_5\System\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2018_5\System\WarehouseBinReference',
        'restrictDefaultWarehouseFlag' => 'boolean',
        'restrictDefaultWarehouseBinFlag' => 'boolean',
        'mapiName' => 'string',
        'calendarSyncIntegrationFlag' => 'boolean',
        'enableLdapAuthenticationFlag' => 'boolean',
        'ldapConfiguration' => 'Spinen\ConnectWise\Models\v2018_5\System\LdapConfigurationReference',
        'ldapUserName' => 'string',
        'companyActivityTabFormat' => 'string',
        'invoiceTimeTabFormat' => 'string',
        'invoiceScreenDefaultTabFormat' => 'string',
        'invoicingDisplayOptions' => 'string',
        'agreementInvoicingDisplayOptions' => 'string',
        'corelyticsUsername' => 'string',
        'corelyticsPassword' => 'string',
        'remotePackage' => 'string',
        'remotePackagePlatform' => 'string',
        'remotePackageUserName' => 'string',
        'remotePackagePassword' => 'string',
        'remotePackageAccount' => 'string',
        'authenticationServiceType' => 'string',
        'timebasedOneTimePasswordActivated' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
