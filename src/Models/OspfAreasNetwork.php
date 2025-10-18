<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OspfAreasNetwork
 */
class OspfAreasNetwork extends BaseModel
{
    /** @var object */
    public $auth_keys;
    /** @var string */
    public string $auth_password;
    /** @var mixed */
    public $auth_type;
    /** @var integer */
    public int $bfd_minimum_interval;
    /** @var integer */
    public int $dead_interval;
    /** @var string */
    public string $export_policy;
    /** @var integer */
    public int $hello_interval;
    /** @var string */
    public string $import_policy;
    /** @var mixed */
    public $interface_type;
    /** @var integer */
    public int $metric;
    /** @var boolean */
    public bool $no_readvertise_to_overlay;
    /** @var boolean */
    public bool $passive;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}