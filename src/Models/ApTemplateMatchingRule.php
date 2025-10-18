<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApTemplateMatchingRule
 */
class ApTemplateMatchingRule extends BaseModel
{
    /** @var string */
    public string $match_model;
    /** @var string */
    public string $name;
    /** @var object */
    public $port_config;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}