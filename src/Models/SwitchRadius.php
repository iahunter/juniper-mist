<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchRadius
 */
class SwitchRadius extends BaseModel
{
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $radius_config;
    /** @var string */
    public string $use_different_radius;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}