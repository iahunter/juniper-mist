<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpConfig
 */
class SnmpConfig extends BaseModel
{
    /** @var mixed */
    public $client_list;
    /** @var string */
    public string $contact;
    /** @var string */
    public string $description;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $engine_id;
    /** @var mixed */
    public $engine_id_type;
    /** @var string */
    public string $location;
    /** @var string */
    public string $name;
    /** @var string */
    public string $network;
    /** @var mixed */
    public $trap_groups;
    /** @var mixed */
    public $v2c_config;
    /** @var mixed */
    public $v3_config;
    /** @var mixed */
    public $views;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}