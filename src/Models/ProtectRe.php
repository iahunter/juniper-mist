<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ProtectRe
 */
class ProtectRe extends BaseModel
{
    /** @var mixed */
    public $allowed_services;
    /** @var mixed */
    public $custom;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $hit_count;
    /** @var mixed */
    public $trusted_hosts;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}