<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstOtherDeviceModel
 */
class ConstOtherDeviceModel extends BaseModel
{
    /** @var string */
    public string $_vendor_model_id;
    /** @var string */
    public string $display;
    /** @var string */
    public string $model;
    /** @var string */
    public string $type;
    /** @var string */
    public string $vendor;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}