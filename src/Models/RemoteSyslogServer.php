<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RemoteSyslogServer extends BaseModel
{
    public $contents;
    public bool $explicit_priority;
    public $facility;
    public string $host;
    public string $match;
    public $port;
    public $protocol;
    public string $routing_instance;
    public string $server_name;
    public $severity;
    public string $source_address;
    public bool $structured_data;
    public string $tag;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}