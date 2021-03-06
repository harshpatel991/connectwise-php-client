<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesTeam Version v2018_4
 *
 * Model for SalesTeam
 *
 * @property Metadata $_info
 * @property SystemLocationReference $salesTeamLocation
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $salesTeamDescription
 * @property string $salesTeamIdentifier
 */
class SalesTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'salesTeamDescription' => 'string',
        'salesTeamIdentifier' => 'string',
        'salesTeamLocation' => SystemLocationReference::class
    ];
}
