<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgUiSettingsTile extends BaseModel
{
    public string $description;
    public $id;
    public bool $isAutoTitle;
    public string $name;
    public string $nl_query;
    public $position;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}