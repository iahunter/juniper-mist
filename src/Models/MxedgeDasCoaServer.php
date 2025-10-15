<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MxedgeDasCoaServer extends BaseModel
{
    public bool $disable_event_timestamp_check;
    public bool $enabled;
    public string $host;
    public int $port;
    public bool $require_message_authenticator;
    public string $secret;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}