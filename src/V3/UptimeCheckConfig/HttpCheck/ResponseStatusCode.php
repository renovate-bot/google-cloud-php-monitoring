<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A status to accept. Either a status code class like "2xx", or an integer
 * status code like "200".
 *
 * Generated from protobuf message <code>google.monitoring.v3.UptimeCheckConfig.HttpCheck.ResponseStatusCode</code>
 */
class ResponseStatusCode extends \Google\Protobuf\Internal\Message
{
    protected $status_code;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status_value
     *           A status code to accept.
     *     @type int $status_class
     *           A class of status codes to accept.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        parent::__construct($data);
    }

    /**
     * A status code to accept.
     *
     * Generated from protobuf field <code>int32 status_value = 1;</code>
     * @return int
     */
    public function getStatusValue()
    {
        return $this->readOneof(1);
    }

    public function hasStatusValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * A status code to accept.
     *
     * Generated from protobuf field <code>int32 status_value = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A class of status codes to accept.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck.ResponseStatusCode.StatusClass status_class = 2;</code>
     * @return int
     */
    public function getStatusClass()
    {
        return $this->readOneof(2);
    }

    public function hasStatusClass()
    {
        return $this->hasOneof(2);
    }

    /**
     * A class of status codes to accept.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck.ResponseStatusCode.StatusClass status_class = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusClass($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck\ResponseStatusCode\StatusClass::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->whichOneof("status_code");
    }

}


