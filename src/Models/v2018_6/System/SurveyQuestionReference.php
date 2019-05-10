<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestionReference Version v2018_6
 * 
 * Model for SurveyQuestionReference
 *
 * @property integer $id
 * @property string $question
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 */
class SurveyQuestionReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
    ];
}