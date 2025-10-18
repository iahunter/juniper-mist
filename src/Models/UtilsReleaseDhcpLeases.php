<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsReleaseDhcpLeases
 */
class UtilsReleaseDhcpLeases extends BaseModel
{
    /** @var mixed */
    public $mac;
    /** @var string */
    public string $network;
    /** @var mixed */
    public $node;
    /** @var string */
    public string $port_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}