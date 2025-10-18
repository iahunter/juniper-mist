<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TunnelConfig
 */
class TunnelConfig extends BaseModel
{
    /** @var mixed */
    public $auto_provision;
    /** @var integer */
    public int $ike_lifetime;
    /** @var mixed */
    public $ike_mode;
    /** @var mixed */
    public $ike_proposals;
    /** @var integer */
    public int $ipsec_lifetime;
    /** @var mixed */
    public $ipsec_proposals;
    /** @var string */
    public string $local_id;
    /** @var mixed */
    public $local_subnets;
    /** @var mixed */
    public $mode;
    /** @var mixed */
    public $networks;
    /** @var mixed */
    public $primary;
    /** @var mixed */
    public $probe;
    /** @var mixed */
    public $protocol;
    /** @var mixed */
    public $provider;
    /** @var string */
    public string $psk;
    /** @var mixed */
    public $remote_subnets;
    /** @var mixed */
    public $secondary;
    /** @var mixed */
    public $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}