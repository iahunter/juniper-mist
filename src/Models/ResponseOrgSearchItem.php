<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseOrgSearchItem
 */
class ResponseOrgSearchItem extends BaseModel
{
    /** @var mixed */
    public $msp_id;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $num_aps;
    /** @var integer */
    public int $num_gateways;
    /** @var integer */
    public int $num_sites;
    /** @var integer */
    public int $num_switches;
    /** @var integer */
    public int $num_unassigned_aps;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $sub_ana_entitled;
    /** @var integer */
    public int $sub_ana_required;
    /** @var integer */
    public int $sub_ast_entitled;
    /** @var integer */
    public int $sub_ast_required;
    /** @var integer */
    public int $sub_eng_entitled;
    /** @var integer */
    public int $sub_eng_required;
    /** @var integer */
    public int $sub_ex12_required;
    /** @var boolean */
    public bool $sub_insufficient;
    /** @var integer */
    public int $sub_man_entitled;
    /** @var integer */
    public int $sub_man_required;
    /** @var integer */
    public int $sub_me_entitled;
    /** @var integer */
    public int $sub_vna_entitled;
    /** @var integer */
    public int $sub_vna_required;
    /** @var mixed */
    public $timestamp;
    /** @var boolean */
    public bool $trial_enabled;
    /** @var mixed */
    public $usage_types;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}