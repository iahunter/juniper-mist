<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model HaClusterConfig
 */
class HaClusterConfig extends BaseModel
{
    /** @var boolean */
    public bool $disable_auto_config;
    /** @var boolean */
    public bool $managed;
    /** @var mixed */
    public $nodes;
    /** @var string */
    public string $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}