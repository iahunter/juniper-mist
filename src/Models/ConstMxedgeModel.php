<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstMxedgeModel
 */
class ConstMxedgeModel extends BaseModel
{
    /** @var boolean */
    public bool $custom_ports;
    /** @var string */
    public string $display;
    /** @var string */
    public string $model;
    /** @var object */
    public $ports;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}