<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TunnelConfigIkeProposal
 */
class TunnelConfigIkeProposal extends BaseModel
{
    /** @var mixed */
    public $auth_algo;
    /** @var mixed */
    public $dh_group;
    /** @var mixed */
    public $enc_algo;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}