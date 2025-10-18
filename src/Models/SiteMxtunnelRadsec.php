<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteMxtunnelRadsec
 */
class SiteMxtunnelRadsec extends BaseModel
{
    /** @var mixed */
    public $acct_servers;
    /** @var mixed */
    public $auth_servers;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $use_mxedge;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}