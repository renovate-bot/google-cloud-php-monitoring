<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListMetricDescriptors` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListMetricDescriptorsRequest</code>
 */
class ListMetricDescriptorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) on which
     * to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. If this field is empty, all custom and
     * system-defined metric descriptors are returned.
     * Otherwise, the [filter](https://cloud.google.com/monitoring/api/v3/filters)
     * specifies which metric descriptors are to be
     * returned. For example, the following filter matches all
     * [custom metrics](https://cloud.google.com/monitoring/custom-metrics):
     *     metric.type = starts_with("custom.googleapis.com/")
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. A positive number that is the maximum number of results to
     * return. The default and maximum value is 10,000. If a page_size <= 0 or >
     * 10,000 is submitted, will instead return a maximum of 10,000 results.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. If this field is not empty then it must contain the
     * `nextPageToken` value returned by a previous call to this method.  Using
     * this field causes the method to return additional results from the previous
     * method call.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. If true, only metrics and monitored resource types that have
     * recent data (within roughly 25 hours) will be included in the response.
     *  - If a metric descriptor enumerates monitored resource types, only the
     *    monitored resource types for which the metric type has recent data will
     *    be included in the returned metric descriptor, and if none of them have
     *    recent data, the metric descriptor will not be returned.
     *  - If a metric descriptor does not enumerate the compatible monitored
     *    resource types, it will be returned only if the metric type has recent
     *    data for some monitored resource type. The returned descriptor will not
     *    enumerate any monitored resource types.
     *
     * Generated from protobuf field <code>bool active_only = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $active_only = false;

    /**
     * @param string $name Required. The
     *                     [project](https://cloud.google.com/monitoring/api/v3#project_name) on which
     *                     to execute the request. The format is:
     *
     *                     projects/[PROJECT_ID_OR_NUMBER]
     *
     * @return \Google\Cloud\Monitoring\V3\ListMetricDescriptorsRequest
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
     *           Required. The
     *           [project](https://cloud.google.com/monitoring/api/v3#project_name) on which
     *           to execute the request. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]
     *     @type string $filter
     *           Optional. If this field is empty, all custom and
     *           system-defined metric descriptors are returned.
     *           Otherwise, the [filter](https://cloud.google.com/monitoring/api/v3/filters)
     *           specifies which metric descriptors are to be
     *           returned. For example, the following filter matches all
     *           [custom metrics](https://cloud.google.com/monitoring/custom-metrics):
     *               metric.type = starts_with("custom.googleapis.com/")
     *     @type int $page_size
     *           Optional. A positive number that is the maximum number of results to
     *           return. The default and maximum value is 10,000. If a page_size <= 0 or >
     *           10,000 is submitted, will instead return a maximum of 10,000 results.
     *     @type string $page_token
     *           Optional. If this field is not empty then it must contain the
     *           `nextPageToken` value returned by a previous call to this method.  Using
     *           this field causes the method to return additional results from the previous
     *           method call.
     *     @type bool $active_only
     *           Optional. If true, only metrics and monitored resource types that have
     *           recent data (within roughly 25 hours) will be included in the response.
     *            - If a metric descriptor enumerates monitored resource types, only the
     *              monitored resource types for which the metric type has recent data will
     *              be included in the returned metric descriptor, and if none of them have
     *              recent data, the metric descriptor will not be returned.
     *            - If a metric descriptor does not enumerate the compatible monitored
     *              resource types, it will be returned only if the metric type has recent
     *              data for some monitored resource type. The returned descriptor will not
     *              enumerate any monitored resource types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) on which
     * to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) on which
     * to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. If this field is empty, all custom and
     * system-defined metric descriptors are returned.
     * Otherwise, the [filter](https://cloud.google.com/monitoring/api/v3/filters)
     * specifies which metric descriptors are to be
     * returned. For example, the following filter matches all
     * [custom metrics](https://cloud.google.com/monitoring/custom-metrics):
     *     metric.type = starts_with("custom.googleapis.com/")
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. If this field is empty, all custom and
     * system-defined metric descriptors are returned.
     * Otherwise, the [filter](https://cloud.google.com/monitoring/api/v3/filters)
     * specifies which metric descriptors are to be
     * returned. For example, the following filter matches all
     * [custom metrics](https://cloud.google.com/monitoring/custom-metrics):
     *     metric.type = starts_with("custom.googleapis.com/")
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. A positive number that is the maximum number of results to
     * return. The default and maximum value is 10,000. If a page_size <= 0 or >
     * 10,000 is submitted, will instead return a maximum of 10,000 results.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. A positive number that is the maximum number of results to
     * return. The default and maximum value is 10,000. If a page_size <= 0 or >
     * 10,000 is submitted, will instead return a maximum of 10,000 results.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. If this field is not empty then it must contain the
     * `nextPageToken` value returned by a previous call to this method.  Using
     * this field causes the method to return additional results from the previous
     * method call.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If this field is not empty then it must contain the
     * `nextPageToken` value returned by a previous call to this method.  Using
     * this field causes the method to return additional results from the previous
     * method call.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. If true, only metrics and monitored resource types that have
     * recent data (within roughly 25 hours) will be included in the response.
     *  - If a metric descriptor enumerates monitored resource types, only the
     *    monitored resource types for which the metric type has recent data will
     *    be included in the returned metric descriptor, and if none of them have
     *    recent data, the metric descriptor will not be returned.
     *  - If a metric descriptor does not enumerate the compatible monitored
     *    resource types, it will be returned only if the metric type has recent
     *    data for some monitored resource type. The returned descriptor will not
     *    enumerate any monitored resource types.
     *
     * Generated from protobuf field <code>bool active_only = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getActiveOnly()
    {
        return $this->active_only;
    }

    /**
     * Optional. If true, only metrics and monitored resource types that have
     * recent data (within roughly 25 hours) will be included in the response.
     *  - If a metric descriptor enumerates monitored resource types, only the
     *    monitored resource types for which the metric type has recent data will
     *    be included in the returned metric descriptor, and if none of them have
     *    recent data, the metric descriptor will not be returned.
     *  - If a metric descriptor does not enumerate the compatible monitored
     *    resource types, it will be returned only if the metric type has recent
     *    data for some monitored resource type. The returned descriptor will not
     *    enumerate any monitored resource types.
     *
     * Generated from protobuf field <code>bool active_only = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setActiveOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->active_only = $var;

        return $this;
    }

}

