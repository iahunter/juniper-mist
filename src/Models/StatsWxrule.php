<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsWxrule
 */
class StatsWxrule extends BaseModel
{
    /** @var mixed */
    public $action;
    /** @var mixed */
    public $client_mac;
    /** @var mixed */
    public $dst_allow_wxtags;
    /** @var mixed */
    public $dst_deny_wxtags;
    /** @var mixed */
    public $dst_wxtags;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $order;
    /** @var mixed */
    public $src_wxtags;
    /** @var object */
    public $usage;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}