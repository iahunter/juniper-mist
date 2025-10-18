<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingSkyatp
 */
class SiteSettingSkyatp extends BaseModel
{
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $send_ip_mac_mapping;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}