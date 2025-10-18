<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteTemplate
 */
class SiteTemplate extends BaseModel
{
    /** @var mixed */
    public $auto_upgrade;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $vars;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}