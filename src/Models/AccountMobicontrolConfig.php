<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountMobicontrolConfig
 */
class AccountMobicontrolConfig extends BaseModel
{
    /** @var string */
    public string $client_id;
    /** @var string */
    public string $client_secret;
    /** @var string */
    public string $instance_url;
    /** @var string */
    public string $password;
    /** @var string */
    public string $username;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}