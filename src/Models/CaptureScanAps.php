<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CaptureScanAps
 */
class CaptureScanAps extends BaseModel
{
    /** @var mixed */
    public $band;
    /** @var string */
    public string $channel;
    /** @var string */
    public string $tcpdump_expression;
    /** @var string */
    public string $width;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}