<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AamwProfile extends BaseModel
{
    public $categories;
    public $created_time;
    public $fallback_action;
    public $file_action;
    public $id;
    public $modified_time;
    public string $name;
    public $org_id;
    public $site_id;
    public int $verdict_threshold;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}