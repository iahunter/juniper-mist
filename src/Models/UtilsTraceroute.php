<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsTraceroute
 */
class UtilsTraceroute extends BaseModel
{
    /** @var string */
    public string $host;
    /** @var string */
    public string $network;
    /** @var mixed */
    public $node;
    /** @var integer */
    public int $port;
    /** @var mixed */
    public $protocol;
    /** @var integer */
    public int $timeout;
    /** @var string */
    public string $vrf;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}