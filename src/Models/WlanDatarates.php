<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanDatarates
 */
class WlanDatarates extends BaseModel
{
    /** @var string */
    public string $eht;
    /** @var string */
    public string $he;
    /** @var string */
    public string $ht;
    /** @var mixed */
    public $legacy;
    /** @var integer */
    public int $min_rssi;
    /** @var mixed */
    public $template;
    /** @var string */
    public string $vht;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}