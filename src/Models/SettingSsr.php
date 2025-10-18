<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SettingSsr
 */
class SettingSsr extends BaseModel
{
    /** @var mixed */
    public $auto_upgrade;
    /** @var mixed */
    public $conductor_hosts;
    /** @var string */
    public string $conductor_token;
    /** @var boolean */
    public bool $disable_stats;
    /** @var mixed */
    public $proxy;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}