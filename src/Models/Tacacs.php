<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Tacacs
 */
class Tacacs extends BaseModel
{
    /** @var mixed */
    public $acct_servers;
    /** @var mixed */
    public $default_role;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $network;
    /** @var mixed */
    public $tacplus_servers;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}