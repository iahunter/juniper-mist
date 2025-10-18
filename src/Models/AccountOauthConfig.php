<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountOauthConfig
 */
class AccountOauthConfig extends BaseModel
{
    /** @var string */
    public string $account_id;
    /** @var boolean */
    public bool $discard_guest_info;
    /** @var integer */
    public int $max_daily_api_requests;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}