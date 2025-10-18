<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeUpgradeInfoItems
 */
class MxedgeUpgradeInfoItems extends BaseModel
{
    /** @var boolean */
    public bool $default;
    /** @var string */
    public string $distro;
    /** @var string */
    public string $package;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}