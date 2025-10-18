<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApPwrConfig
 */
class ApPwrConfig extends BaseModel
{
    /** @var integer */
    public int $base;
    /** @var boolean */
    public bool $prefer_usb_over_wifi;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}