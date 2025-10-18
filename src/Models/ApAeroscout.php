<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApAeroscout
 */
class ApAeroscout extends BaseModel
{
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $host;
    /** @var boolean */
    public bool $locate_connected;
    /** @var integer */
    public int $port;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}