<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteEngagement extends BaseModel
{
    public $dwell_tag_names;
    public $dwell_tags;
    public $hours;
    public int $max_dwell;
    public int $min_dwell;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}