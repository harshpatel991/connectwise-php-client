<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyOption Version v2019_2
 * 
 * Model for SurveyOption
 *
 * @property integer $id
 * @property string $caption
 * @property integer $points
 * @property boolean $visibleflag
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 */
class SurveyOption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'caption' => 'string',
        'points' => 'integer',
        'visibleflag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
    ];
}
