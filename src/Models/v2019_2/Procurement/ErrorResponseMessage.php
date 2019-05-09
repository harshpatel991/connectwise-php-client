<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ErrorResponseMessage Version v2019_2
 * 
 * Model for ErrorResponseMessage
 *
 * @property string $code
 * @property string $message
 * @property array $errors
 */
class ErrorResponseMessage extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        'message' => 'string',
        'errors' => 'array',
    ];
}
