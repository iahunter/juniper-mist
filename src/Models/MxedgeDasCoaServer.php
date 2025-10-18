<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeDasCoaServer
 */
class MxedgeDasCoaServer extends BaseModel
{
    /** @var boolean */
    public bool $disable_event_timestamp_check;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $host;
    /** @var integer */
    public int $port;
    /** @var boolean */
    public bool $require_message_authenticator;
    /** @var string */
    public string $secret;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}