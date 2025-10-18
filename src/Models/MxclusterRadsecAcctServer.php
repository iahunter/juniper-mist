<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxclusterRadsecAcctServer
 */
class MxclusterRadsecAcctServer extends BaseModel
{
    /** @var string */
    public string $host;
    /** @var integer */
    public int $port;
    /** @var string */
    public string $secret;
    /** @var mixed */
    public $ssids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}