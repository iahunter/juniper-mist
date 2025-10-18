<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TunnelProviderOptionsJse
 */
class TunnelProviderOptionsJse extends BaseModel
{
    /** @var integer */
    public int $num_users;
    /** @var string */
    public string $org_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}