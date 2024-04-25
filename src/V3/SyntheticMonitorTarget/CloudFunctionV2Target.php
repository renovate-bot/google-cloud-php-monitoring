<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\SyntheticMonitorTarget;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Synthetic Monitor deployed to a Cloud Functions V2 instance.
 *
 * Generated from protobuf message <code>google.monitoring.v3.SyntheticMonitorTarget.CloudFunctionV2Target</code>
 */
class CloudFunctionV2Target extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Fully qualified GCFv2 resource name
     * i.e. `projects/{project}/locations/{location}/functions/{function}`
     * Required.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Output only. The `cloud_run_revision` Monitored Resource associated with
     * the GCFv2. The Synthetic Monitor execution results (metrics, logs, and
     * spans) are reported against this Monitored Resource. This field is output
     * only.
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource cloud_run_revision = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cloud_run_revision = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Fully qualified GCFv2 resource name
     *           i.e. `projects/{project}/locations/{location}/functions/{function}`
     *           Required.
     *     @type \Google\Api\MonitoredResource $cloud_run_revision
     *           Output only. The `cloud_run_revision` Monitored Resource associated with
     *           the GCFv2. The Synthetic Monitor execution results (metrics, logs, and
     *           spans) are reported against this Monitored Resource. This field is output
     *           only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Fully qualified GCFv2 resource name
     * i.e. `projects/{project}/locations/{location}/functions/{function}`
     * Required.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Fully qualified GCFv2 resource name
     * i.e. `projects/{project}/locations/{location}/functions/{function}`
     * Required.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The `cloud_run_revision` Monitored Resource associated with
     * the GCFv2. The Synthetic Monitor execution results (metrics, logs, and
     * spans) are reported against this Monitored Resource. This field is output
     * only.
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource cloud_run_revision = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Api\MonitoredResource|null
     */
    public function getCloudRunRevision()
    {
        return $this->cloud_run_revision;
    }

    public function hasCloudRunRevision()
    {
        return isset($this->cloud_run_revision);
    }

    public function clearCloudRunRevision()
    {
        unset($this->cloud_run_revision);
    }

    /**
     * Output only. The `cloud_run_revision` Monitored Resource associated with
     * the GCFv2. The Synthetic Monitor execution results (metrics, logs, and
     * spans) are reported against this Monitored Resource. This field is output
     * only.
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource cloud_run_revision = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Api\MonitoredResource $var
     * @return $this
     */
    public function setCloudRunRevision($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MonitoredResource::class);
        $this->cloud_run_revision = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudFunctionV2Target::class, \Google\Cloud\Monitoring\V3\SyntheticMonitorTarget_CloudFunctionV2Target::class);
