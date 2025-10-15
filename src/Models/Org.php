<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Org extends BaseModel
{
    public string $alarmtemplate_id;
    public bool $allow_mist;
    public $created_time;
    public $id;
    public $modified_time;
    public $msp_id;
    public string $msp_logo_url;
    public string $msp_name;
    public string $name;
    public $orggroup_ids;
    public int $session_expiry;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}