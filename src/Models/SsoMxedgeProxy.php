<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SsoMxedgeProxy
 */
class SsoMxedgeProxy extends BaseModel
{
    /** @var mixed */
    public $acct_servers;
    /** @var mixed */
    public $auth_servers;
    /** @var string */
    public string $mxcluster_id;
    /** @var string */
    public string $operator_name;
    /** @var mixed */
    public $proxy_hosts;
    /** @var mixed */
    public $ssids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}