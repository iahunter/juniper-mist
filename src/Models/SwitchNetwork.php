<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchNetwork
 */
class SwitchNetwork extends BaseModel
{
    /** @var string */
    public string $gateway;
    /** @var string */
    public string $gateway6;
    /** @var boolean */
    public bool $isolation;
    /** @var string */
    public string $isolation_vlan_id;
    /** @var string */
    public string $subnet;
    /** @var string */
    public string $subnet6;
    /** @var mixed */
    public $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}