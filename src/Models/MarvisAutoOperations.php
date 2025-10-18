<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MarvisAutoOperations
 */
class MarvisAutoOperations extends BaseModel
{
    /** @var boolean */
    public bool $bounce_port_for_abnormal_poe_client;
    /** @var boolean */
    public bool $disable_port_when_ddos_protocol_violation;
    /** @var boolean */
    public bool $disable_port_when_rogue_dhcp_server_detected;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}