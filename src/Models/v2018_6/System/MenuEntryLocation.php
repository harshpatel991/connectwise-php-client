<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MenuEntryLocation Version v2018_6
 * 
 * Model for MenuEntryLocation
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_6\System\SystemMenuEntryReference $menuEntry
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 */
class MenuEntryLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemLocationReference',
        'menuEntry' => 'Spinen\ConnectWise\Models\v2018_6\System\SystemMenuEntryReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}
