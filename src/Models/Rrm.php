<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Rrm extends BaseModel
{
    public array $band_24;
    public $band_24_metric;
    public array $band_5;
    public $band_5_metric;
    public array $band_6;
    public $band_6_metric;
    public $rftemplate;
    public string $rftemplate_id;
    public string $rftemplate_name;
    public $status;
    public $timestamp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}