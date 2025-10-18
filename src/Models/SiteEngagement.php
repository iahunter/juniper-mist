<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteEngagement
 */
class SiteEngagement extends BaseModel
{
    /** @var mixed */
    public $dwell_tag_names;
    /** @var mixed */
    public $dwell_tags;
    /** @var mixed */
    public $hours;
    /** @var integer */
    public int $max_dwell;
    /** @var integer */
    public int $min_dwell;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}