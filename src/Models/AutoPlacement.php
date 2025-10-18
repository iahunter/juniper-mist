<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AutoPlacement
 */
class AutoPlacement extends BaseModel
{
    /** @var boolean */
    public bool $dryrun;
    /** @var boolean */
    public bool $force_collection;
    /** @var mixed */
    public $macs;
    /** @var boolean */
    public bool $override;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}