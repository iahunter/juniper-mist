<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpVacmAccessItemPrefixListItem
 */
class SnmpVacmAccessItemPrefixListItem extends BaseModel
{
    /** @var string */
    public string $context_prefix;
    /** @var string */
    public string $notify_view;
    /** @var string */
    public string $read_view;
    /** @var mixed */
    public $security_level;
    /** @var mixed */
    public $security_model;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $write_view;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}