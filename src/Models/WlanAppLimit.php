<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanAppLimit
 */
class WlanAppLimit extends BaseModel
{
    /** @var object */
    public $apps;
    /** @var boolean */
    public bool $enabled;
    /** @var object */
    public $wxtag_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}