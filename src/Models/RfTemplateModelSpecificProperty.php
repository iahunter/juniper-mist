<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RfTemplateModelSpecificProperty extends BaseModel
{
    public int $ant_gain_24;
    public int $ant_gain_5;
    public int $ant_gain_6;
    public $band_24;
    public $band_24_usage;
    public $band_5;
    public $band_5_on_24_radio;
    public $band_6;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}