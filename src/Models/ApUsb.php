<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApUsb
 */
class ApUsb extends BaseModel
{
    /** @var string */
    public string $cacert;
    /** @var integer */
    public int $channel;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $host;
    /** @var integer */
    public int $port;
    /** @var mixed */
    public $type;
    /** @var boolean */
    public bool $verify_cert;
    /** @var integer */
    public int $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}