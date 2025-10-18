<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxclusterRadsec
 */
class MxclusterRadsec extends BaseModel
{
    /** @var mixed */
    public $acct_servers;
    /** @var mixed */
    public $auth_servers;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $match_ssid;
    /** @var mixed */
    public $nas_ip_source;
    /** @var mixed */
    public $proxy_hosts;
    /** @var mixed */
    public $server_selection;
    /** @var mixed */
    public $src_ip_source;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}