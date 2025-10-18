<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchAutoUpgrade
 */
class SwitchAutoUpgrade extends BaseModel
{
    /** @var mixed */
    public $custom_versions;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $snapshot;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}