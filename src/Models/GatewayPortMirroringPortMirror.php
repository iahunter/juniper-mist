<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayPortMirroringPortMirror
 */
class GatewayPortMirroringPortMirror extends BaseModel
{
    /** @var string */
    public string $family_type;
    /** @var mixed */
    public $ingress_port_ids;
    /** @var string */
    public string $output_port_id;
    /** @var integer */
    public int $rate;
    /** @var integer */
    public int $run_length;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}