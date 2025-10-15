<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RemoteSyslog extends BaseModel
{
    public $archive;
    public $cacerts;
    public $console;
    public bool $enabled;
    public $files;
    public string $network;
    public bool $send_to_all_servers;
    public $servers;
    public $time_format;
    public $users;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}