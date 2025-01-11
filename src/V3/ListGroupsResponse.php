<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListGroups` response.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListGroupsResponse</code>
 */
class ListGroupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The groups that match the specified filters.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Group group = 1;</code>
     */
    private $group;
    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `page_token` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Monitoring\V3\Group>|\Google\Protobuf\Internal\RepeatedField $group
     *           The groups that match the specified filters.
     *     @type string $next_page_token
     *           If there are more results than have been returned, then this field is set
     *           to a non-empty value.  To see the additional results,
     *           use that value as `page_token` in the next call to this method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * The groups that match the specified filters.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Group group = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * The groups that match the specified filters.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Group group = 1;</code>
     * @param array<\Google\Cloud\Monitoring\V3\Group>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroup($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\Group::class);
        $this->group = $arr;

        return $this;
    }

    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `page_token` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `page_token` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

