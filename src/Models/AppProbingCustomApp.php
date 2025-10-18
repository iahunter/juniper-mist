<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AppProbingCustomApp
 */
class AppProbingCustomApp extends BaseModel
{
    /** @var string */
    public string $address;
    /** @var string */
    public string $app_type;
    /** @var mixed */
    public $hostnames;
    /** @var string */
    public string $key;
    /** @var string */
    public string $name;
    /** @var string */
    public string $network;
    /** @var integer */
    public int $packetSize;
    /** @var mixed */
    public $protocol;
    /** @var string */
    public string $url;
    /** @var string */
    public string $vrf;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}