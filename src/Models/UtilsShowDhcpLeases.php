<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsShowDhcpLeases
 */
class UtilsShowDhcpLeases extends BaseModel
{
    /** @var string */
    public string $network;
    /** @var mixed */
    public $node;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}