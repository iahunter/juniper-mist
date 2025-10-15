<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseOrgSearchItem extends BaseModel
{
    public $msp_id;
    public string $name;
    public int $num_aps;
    public int $num_gateways;
    public int $num_sites;
    public int $num_switches;
    public int $num_unassigned_aps;
    public $org_id;
    public int $sub_ana_entitled;
    public int $sub_ana_required;
    public int $sub_ast_entitled;
    public int $sub_ast_required;
    public int $sub_eng_entitled;
    public int $sub_eng_required;
    public int $sub_ex12_required;
    public bool $sub_insufficient;
    public int $sub_man_entitled;
    public int $sub_man_required;
    public int $sub_me_entitled;
    public int $sub_vna_entitled;
    public int $sub_vna_required;
    public $timestamp;
    public bool $trial_enabled;
    public $usage_types;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}