<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsReleaseDhcp
 */
class UtilsReleaseDhcp extends BaseModel
{
    /** @var mixed */
    public $node;
    /** @var string */
    public string $port_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}