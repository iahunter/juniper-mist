<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingPcap
 */
class OrgSettingPcap extends BaseModel
{
    /** @var string */
    public string $bucket;
    /** @var integer */
    public int $max_pkt_len;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}