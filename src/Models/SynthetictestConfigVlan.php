<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SynthetictestConfigVlan
 */
class SynthetictestConfigVlan extends BaseModel
{
    /** @var mixed */
    public $custom_test_urls;
    /** @var boolean */
    public bool $disabled;
    /** @var mixed */
    public $probes;
    /** @var mixed */
    public $vlan_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}