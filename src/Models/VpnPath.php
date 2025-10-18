<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model VpnPath
 */
class VpnPath extends BaseModel
{
    /** @var mixed */
    public $bfd_profile;
    /** @var boolean */
    public bool $bfd_use_tunnel_mode;
    /** @var string */
    public string $ip;
    /** @var mixed */
    public $peer_paths;
    /** @var integer */
    public int $pod;
    /** @var mixed */
    public $traffic_shaping;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}