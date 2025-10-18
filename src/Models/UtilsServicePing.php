<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsServicePing
 */
class UtilsServicePing extends BaseModel
{
    /** @var integer */
    public int $count;
    /** @var string */
    public string $host;
    /** @var mixed */
    public $node;
    /** @var string */
    public string $service;
    /** @var integer */
    public int $size;
    /** @var string */
    public string $tenant;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}