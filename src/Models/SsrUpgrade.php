<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SsrUpgrade
 */
class SsrUpgrade extends BaseModel
{
    /** @var mixed */
    public $channel;
    /** @var integer */
    public int $reboot_at;
    /** @var integer */
    public int $start_time;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}