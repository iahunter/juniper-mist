<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model License
 */
class License extends BaseModel
{
    /** @var mixed */
    public $amendments;
    /** @var object */
    public $entitled;
    /** @var mixed */
    public $fully_loaded;
    /** @var mixed */
    public $licenses;
    /** @var mixed */
    public $summary;
    /** @var mixed */
    public $usages;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}