<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseConfigHistorySearchItem
 */
class ResponseConfigHistorySearchItem extends BaseModel
{
    /** @var integer */
    public int $channel_24;
    /** @var integer */
    public int $channel_5;
    /** @var mixed */
    public $radio_macs;
    /** @var mixed */
    public $radios;
    /** @var boolean */
    public bool $secpolicy_violated;
    /** @var mixed */
    public $ssids;
    /** @var mixed */
    public $ssids_24;
    /** @var mixed */
    public $ssids_5;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $version;
    /** @var mixed */
    public $wlans;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}