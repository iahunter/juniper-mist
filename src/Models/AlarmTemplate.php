<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AlarmTemplate extends BaseModel
{
    public $created_time;
    public $delivery;
    public $id;
    public $modified_time;
    public string $name;
    public $org_id;
    public array $rules;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}