<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UpgradeDevicesTargets
 */
class UpgradeDevicesTargets extends BaseModel
{
    /** @var mixed */
    public $download_requested;
    /** @var mixed */
    public $downloaded;
    /** @var mixed */
    public $downloading;
    /** @var mixed */
    public $failed;
    /** @var mixed */
    public $reboot_in_progress;
    /** @var mixed */
    public $rebooted;
    /** @var mixed */
    public $scheduled;
    /** @var mixed */
    public $skipped;
    /** @var integer */
    public int $total;
    /** @var mixed */
    public $upgraded;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}