<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseDeviceRadioChannels
 */
class ResponseDeviceRadioChannels extends BaseModel
{
    /** @var boolean */
    public bool $band24_40mhz_allowed;
    /** @var mixed */
    public $band24_channels;
    /** @var boolean */
    public bool $band24_enabled;
    /** @var mixed */
    public $band5_channels;
    /** @var boolean */
    public bool $band5_enabled;
    /** @var mixed */
    public $band6_channels;
    /** @var boolean */
    public bool $band6_enabled;
    /** @var boolean */
    public bool $certified;
    /** @var integer */
    public int $code;
    /** @var boolean */
    public bool $dfs_ok;
    /** @var string */
    public string $key;
    /** @var string */
    public string $name;
    /** @var string */
    public string $uses;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}