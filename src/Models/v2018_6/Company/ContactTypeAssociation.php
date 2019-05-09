<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTypeAssociation Version v2018_6
 * 
 * Model for ContactTypeAssociation
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ContactTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 */
class ContactTypeAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Company\ContactTypeReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_6\Company\ContactReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
