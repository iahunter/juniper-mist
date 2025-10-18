<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanInjectDhcpOption82
 */
class WlanInjectDhcpOption82 extends BaseModel
{
    /** @var string */
    public string $circuit_id;
    /** @var boolean */
    public bool $enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}