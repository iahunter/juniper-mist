<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanAirwatch
 */
class WlanAirwatch extends BaseModel
{
    /** @var string */
    public string $api_key;
    /** @var string */
    public string $console_url;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $password;
    /** @var string */
    public string $username;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}