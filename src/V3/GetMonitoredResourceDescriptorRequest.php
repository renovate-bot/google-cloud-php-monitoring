<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `GetMonitoredResourceDescriptor` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.GetMonitoredResourceDescriptorRequest</code>
 */
class GetMonitoredResourceDescriptorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The monitored resource descriptor to get.  The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/monitoredResourceDescriptors/[RESOURCE_TYPE]
     * The `[RESOURCE_TYPE]` is a predefined type, such as
     * `cloudsql_database`.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The monitored resource descriptor to get.  The format is:
     *
     *                     projects/[PROJECT_ID_OR_NUMBER]/monitoredResourceDescriptors/[RESOURCE_TYPE]
     *
     *                     The `[RESOURCE_TYPE]` is a predefined type, such as
     *                     `cloudsql_database`. Please see
     *                     {@see MetricServiceClient::monitoredResourceDescriptorName()} for help formatting this field.
     *
     * @return \Google\Cloud\Monitoring\V3\GetMonitoredResourceDescriptorRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The monitored resource descriptor to get.  The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/monitoredResourceDescriptors/[RESOURCE_TYPE]
     *           The `[RESOURCE_TYPE]` is a predefined type, such as
     *           `cloudsql_database`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The monitored resource descriptor to get.  The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/monitoredResourceDescriptors/[RESOURCE_TYPE]
     * The `[RESOURCE_TYPE]` is a predefined type, such as
     * `cloudsql_database`.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The monitored resource descriptor to get.  The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/monitoredResourceDescriptors/[RESOURCE_TYPE]
     * The `[RESOURCE_TYPE]` is a predefined type, such as
     * `cloudsql_database`.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

