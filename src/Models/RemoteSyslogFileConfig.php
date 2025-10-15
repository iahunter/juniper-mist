<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RemoteSyslogFileConfig extends BaseModel
{
    public $archive;
    public $contents;
    public bool $enable_tls;
    public bool $explicit_priority;
    public string $file;
    public string $match;
    public bool $structured_data;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}