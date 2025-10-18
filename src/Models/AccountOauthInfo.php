<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountOauthInfo
 */
class AccountOauthInfo extends BaseModel
{
    /** @var mixed */
    public $accounts;
    /** @var string */
    public string $authorization_url;
    /** @var boolean */
    public bool $linked;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}