<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountCrowdstrikeConfig
 */
class AccountCrowdstrikeConfig extends BaseModel
{
    /** @var string */
    public string $client_id;
    /** @var string */
    public string $client_secret;
    /** @var string */
    public string $customer_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}