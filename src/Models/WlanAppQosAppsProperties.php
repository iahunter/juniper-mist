<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanAppQosAppsProperties
 */
class WlanAppQosAppsProperties extends BaseModel
{
    /** @var mixed */
    public $dscp;
    /** @var string */
    public string $dst_subnet;
    /** @var string */
    public string $src_subnet;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}