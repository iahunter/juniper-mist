<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RfTemplate extends BaseModel
{
    public int $ant_gain_24;
    public int $ant_gain_5;
    public int $ant_gain_6;
    public $band_24;
    public $band_24_usage;
    public $band_5;
    public $band_5_on_24_radio;
    public $band_6;
    public string $country_code;
    public $created_time;
    public bool $for_site;
    public $id;
    public array $model_specific;
    public $modified_time;
    public string $name;
    public $org_id;
    public bool $scanning_enabled;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}