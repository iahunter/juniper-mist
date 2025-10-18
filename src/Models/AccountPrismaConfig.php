<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountPrismaConfig
 */
class AccountPrismaConfig extends BaseModel
{
    /** @var string */
    public string $auto_probe_subnet;
    /** @var string */
    public string $client_id;
    /** @var string */
    public string $client_secret;
    /** @var boolean */
    public bool $enable_probe;
    /** @var string */
    public string $tsg_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}