<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsCall
 */
class StatsCall extends BaseModel
{
    /** @var string */
    public string $app;
    /** @var integer */
    public int $audio_quality;
    /** @var integer */
    public int $end_time;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $meeting_id;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $rating;
    /** @var integer */
    public int $screen_share_quality;
    /** @var mixed */
    public $site_id;
    /** @var integer */
    public int $start_time;
    /** @var integer */
    public int $video_quality;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}