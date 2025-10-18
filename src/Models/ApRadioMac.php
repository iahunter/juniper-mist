<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApRadioMac
 */
class ApRadioMac extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $radio_macs;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}