<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanDynamicPsk
 */
class WlanDynamicPsk extends BaseModel
{
    /** @var string */
    public string $default_psk;
    /** @var mixed */
    public $default_vlan_id;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $force_lookup;
    /** @var mixed */
    public $source;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}