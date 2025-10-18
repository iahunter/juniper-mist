<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Radsec
 */
class Radsec extends BaseModel
{
    /** @var boolean */
    public bool $coa_enabled;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $idle_timeout;
    /** @var mixed */
    public $mxcluster_ids;
    /** @var mixed */
    public $proxy_hosts;
    /** @var string */
    public string $server_name;
    /** @var mixed */
    public $servers;
    /** @var boolean */
    public bool $use_mxedge;
    /** @var boolean */
    public bool $use_site_mxedge;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}