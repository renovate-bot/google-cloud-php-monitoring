<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/span_context.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The context of a span. This is attached to an
 * [Exemplar][google.api.Distribution.Exemplar]
 * in [Distribution][google.api.Distribution] values during aggregation.
 * It contains the name of a span with format:
 *     projects/[PROJECT_ID_OR_NUMBER]/traces/[TRACE_ID]/spans/[SPAN_ID]
 *
 * Generated from protobuf message <code>google.monitoring.v3.SpanContext</code>
 */
class SpanContext extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the span. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/traces/[TRACE_ID]/spans/[SPAN_ID]
     * `[TRACE_ID]` is a unique identifier for a trace within a project;
     * it is a 32-character hexadecimal encoding of a 16-byte array.
     * `[SPAN_ID]` is a unique identifier for a span within a trace; it
     * is a 16-character hexadecimal encoding of an 8-byte array.
     *
     * Generated from protobuf field <code>string span_name = 1;</code>
     */
    protected $span_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $span_name
     *           The resource name of the span. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/traces/[TRACE_ID]/spans/[SPAN_ID]
     *           `[TRACE_ID]` is a unique identifier for a trace within a project;
     *           it is a 32-character hexadecimal encoding of a 16-byte array.
     *           `[SPAN_ID]` is a unique identifier for a span within a trace; it
     *           is a 16-character hexadecimal encoding of an 8-byte array.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\SpanContext::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the span. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/traces/[TRACE_ID]/spans/[SPAN_ID]
     * `[TRACE_ID]` is a unique identifier for a trace within a project;
     * it is a 32-character hexadecimal encoding of a 16-byte array.
     * `[SPAN_ID]` is a unique identifier for a span within a trace; it
     * is a 16-character hexadecimal encoding of an 8-byte array.
     *
     * Generated from protobuf field <code>string span_name = 1;</code>
     * @return string
     */
    public function getSpanName()
    {
        return $this->span_name;
    }

    /**
     * The resource name of the span. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/traces/[TRACE_ID]/spans/[SPAN_ID]
     * `[TRACE_ID]` is a unique identifier for a trace within a project;
     * it is a 32-character hexadecimal encoding of a 16-byte array.
     * `[SPAN_ID]` is a unique identifier for a span within a trace; it
     * is a 16-character hexadecimal encoding of an 8-byte array.
     *
     * Generated from protobuf field <code>string span_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpanName($var)
    {
        GPBUtil::checkString($var, True);
        $this->span_name = $var;

        return $this;
    }

}

