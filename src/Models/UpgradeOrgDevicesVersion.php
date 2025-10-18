<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UpgradeOrgDevicesVersion
 */
class UpgradeOrgDevicesVersion extends BaseModel
{
    /** @var mixed */
    public $firmware_type;
    /** @var boolean */
    public bool $force;
    /** @var mixed */
    public $model_version;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}