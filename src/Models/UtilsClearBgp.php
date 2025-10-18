<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsClearBgp
 */
class UtilsClearBgp extends BaseModel
{
    /** @var string */
    public string $neighbor;
    /** @var mixed */
    public $node;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $vrf;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}