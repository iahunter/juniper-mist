<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseSearchVarItem extends BaseModel
{
    public $created_time;
    public $modified_time;
    public $org_id;
    public $site_id;
    public string $src;
    public string $var;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}