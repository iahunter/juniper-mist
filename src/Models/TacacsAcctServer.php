<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TacacsAcctServer
 */
class TacacsAcctServer extends BaseModel
{
    /** @var string */
    public string $host;
    /** @var string */
    public string $port;
    /** @var string */
    public string $secret;
    /** @var integer */
    public int $timeout;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}