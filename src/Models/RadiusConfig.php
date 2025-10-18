<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RadiusConfig
 */
class RadiusConfig extends BaseModel
{
    /** @var integer */
    public int $acct_interim_interval;
    /** @var mixed */
    public $acct_servers;
    /** @var mixed */
    public $auth_servers;
    /** @var integer */
    public int $auth_servers_retries;
    /** @var integer */
    public int $auth_servers_timeout;
    /** @var boolean */
    public bool $coa_enabled;
    /** @var integer */
    public int $coa_port;
    /** @var string */
    public string $network;
    /** @var string */
    public string $source_ip;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}