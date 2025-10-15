<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class NacRule extends BaseModel
{
    public $action;
    public $apply_tags;
    public $created_time;
    public bool $enabled;
    public $guest_auth_state;
    public $id;
    public $matching;
    public $modified_time;
    public string $name;
    public $not_matching;
    public int $order;
    public $org_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}