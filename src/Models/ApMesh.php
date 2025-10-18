<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApMesh
 */
class ApMesh extends BaseModel
{
    /** @var mixed */
    public $bands;
    /** @var boolean */
    public bool $enabled;
    /** @var integer */
    public int $group;
    /** @var mixed */
    public $role;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}