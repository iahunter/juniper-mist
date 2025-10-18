<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApIotOutput
 */
class ApIotOutput extends BaseModel
{
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $name;
    /** @var boolean */
    public bool $output;
    /** @var mixed */
    public $pullup;
    /** @var integer */
    public int $value;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}