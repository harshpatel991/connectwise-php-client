<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLCaption Version v2019_1
 * 
 * Model for GLCaption
 *
 * @property integer $id
 * @property string $segment1
 * @property string $segment2
 * @property string $segment3
 * @property string $segment4
 * @property string $segment5
 * @property string $segment6
 * @property string $segment7
 * @property string $segment8
 * @property string $segment9
 * @property string $segment10
 * @property string $cogs1
 * @property string $cogs2
 * @property string $cogs3
 * @property string $cogs4
 * @property string $cogs5
 * @property string $cogs6
 * @property string $cogs7
 * @property string $cogs8
 * @property string $cogs9
 * @property string $cogs10
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
class GLCaption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'segment1' => 'string',
        'segment2' => 'string',
        'segment3' => 'string',
        'segment4' => 'string',
        'segment5' => 'string',
        'segment6' => 'string',
        'segment7' => 'string',
        'segment8' => 'string',
        'segment9' => 'string',
        'segment10' => 'string',
        'cogs1' => 'string',
        'cogs2' => 'string',
        'cogs3' => 'string',
        'cogs4' => 'string',
        'cogs5' => 'string',
        'cogs6' => 'string',
        'cogs7' => 'string',
        'cogs8' => 'string',
        'cogs9' => 'string',
        'cogs10' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
