<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RadiusAuthServer
 */
class RadiusAuthServer extends BaseModel
{
    /** @var string */
    public string $host;
    /** @var boolean */
    public bool $keywrap_enabled;
    /** @var mixed */
    public $keywrap_format;
    /** @var string */
    public string $keywrap_kek;
    /** @var string */
    public string $keywrap_mack;
    /** @var mixed */
    public $port;
    /** @var boolean */
    public bool $require_message_authenticator;
    /** @var string */
    public string $secret;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}