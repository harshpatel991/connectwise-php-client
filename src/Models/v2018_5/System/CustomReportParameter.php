<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReportParameter Version v2018_5
 * 
 * Model for CustomReportParameter
 *
 * @property integer $id
 * @property string $name
 * @property string $captionName
 * @property Spinen\ConnectWise\Models\v2018_5\System\CustomReportReference $customReport
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class CustomReportParameter extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'captionName' => 'string',
        'customReport' => 'Spinen\ConnectWise\Models\v2018_5\System\CustomReportReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
