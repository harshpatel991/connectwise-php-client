<?php

namespace Spinen\ConnectWise\Models\v2019_4\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardExcludedMember Version v2019_4
 *
 * Model for BoardExcludedMember
 *
 * @property Metadata $_info
 * @property integer $boardId
 * @property integer $id
 * @property integer $memberId
 */
class BoardExcludedMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'boardId' => 'integer',
        'id' => 'integer',
        'memberId' => 'integer'
    ];
}
