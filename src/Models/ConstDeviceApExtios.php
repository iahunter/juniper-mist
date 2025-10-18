<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstDeviceApExtios
 */
class ConstDeviceApExtios extends BaseModel
{
    /** @var mixed */
    public $default_dir;
    /** @var boolean */
    public bool $input;
    /** @var boolean */
    public bool $output;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}