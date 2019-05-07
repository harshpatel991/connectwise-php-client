<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardExcludedMember
 *
 * @property integer $id
 * @property integer $memberId
 * @property integer $boardId
 */
class BoardExcludedMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'memberId' => 'integer',
        'boardId' => 'integer',
    ];
}
