<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CallTroubleshootSummaryData
 */
class CallTroubleshootSummaryData extends BaseModel
{
    /** @var number */
    public float $ap_num_clients;
    /** @var number */
    public float $ap_rtt;
    /** @var number */
    public float $client_cpu;
    /** @var number */
    public float $client_n_streams;
    /** @var number */
    public float $client_radio_band;
    /** @var number */
    public float $client_rssi;
    /** @var number */
    public float $client_rx_bytes;
    /** @var number */
    public float $client_rx_rates;
    /** @var number */
    public float $client_tx_bytes;
    /** @var number */
    public float $client_tx_rates;
    /** @var number */
    public float $client_tx_retries;
    /** @var number */
    public float $client_vpn_distance;
    /** @var number */
    public float $client_wifi_version;
    /** @var number */
    public float $expected;
    /** @var number */
    public float $radio_bandwidth;
    /** @var number */
    public float $radio_channel;
    /** @var number */
    public float $radio_tx_power;
    /** @var number */
    public float $radio_util;
    /** @var number */
    public float $radio_util_interference;
    /** @var number */
    public float $site_num_clients;
    /** @var number */
    public float $wan_avg_download_mbps;
    /** @var number */
    public float $wan_avg_upload_mbps;
    /** @var number */
    public float $wan_jitter;
    /** @var number */
    public float $wan_max_download_mbps;
    /** @var number */
    public float $wan_max_upload_mbps;
    /** @var number */
    public float $wan_rtt;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}