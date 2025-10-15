<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseMapImportAp extends BaseModel
{
    public $action;
    public string $floorplan_id;
    public float $height;
    public string $mac;
    public string $map_id;
    public int $orientation;
    public string $reason;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}