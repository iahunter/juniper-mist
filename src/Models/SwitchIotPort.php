<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchIotPort
 */
class SwitchIotPort extends BaseModel
{
    /** @var mixed */
    public $alarm_class;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $input_src;
    /** @var string */
    public string $name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}