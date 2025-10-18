<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SynthetictestConfigCustomProbe
 */
class SynthetictestConfigCustomProbe extends BaseModel
{
    /** @var mixed */
    public $aggressiveness;
    /** @var string */
    public string $host;
    /** @var integer */
    public int $port;
    /** @var integer */
    public int $threshold;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}