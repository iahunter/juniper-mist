<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteRogue
 */
class SiteRogue extends BaseModel
{
    /** @var mixed */
    public $allowed_vlan_ids;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $honeypot_enabled;
    /** @var integer */
    public int $min_duration;
    /** @var integer */
    public int $min_rogue_duration;
    /** @var integer */
    public int $min_rogue_rssi;
    /** @var integer */
    public int $min_rssi;
    /** @var mixed */
    public $whitelisted_bssids;
    /** @var mixed */
    public $whitelisted_ssids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}