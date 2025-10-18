<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SsoMxedgeProxyAuthServer
 */
class SsoMxedgeProxyAuthServer extends BaseModel
{
    /** @var string */
    public string $host;
    /** @var integer */
    public int $port;
    /** @var boolean */
    public bool $require_message_authenticator;
    /** @var integer */
    public int $retry;
    /** @var string */
    public string $secret;
    /** @var integer */
    public int $timeout;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}