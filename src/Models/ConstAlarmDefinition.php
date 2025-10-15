<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstAlarmDefinition extends BaseModel
{
    public string $display;
    public array $example;
    public $fields;
    public string $group;
    public string $key;
    public string $marvis_suggestion_category;
    public string $severity;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}