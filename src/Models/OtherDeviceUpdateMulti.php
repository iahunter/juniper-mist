<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OtherDeviceUpdateMulti
 */
class OtherDeviceUpdateMulti extends BaseModel
{
    /** @var mixed */
    public $macs;
    /** @var mixed */
    public $op;
    /** @var string */
    public string $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}