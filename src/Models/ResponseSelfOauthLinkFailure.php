<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseSelfOauthLinkFailure
 */
class ResponseSelfOauthLinkFailure extends BaseModel
{
    /** @var string */
    public string $error;
    /** @var string */
    public string $error_description;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}