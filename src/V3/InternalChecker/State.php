<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\InternalChecker;

use UnexpectedValueException;

/**
 * Operational states for an internal checker.
 *
 * Protobuf type <code>google.monitoring.v3.InternalChecker.State</code>
 */
class State
{
    /**
     * An internal checker should never be in the unspecified state.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The checker is being created, provisioned, and configured. A checker in
     * this state can be returned by `ListInternalCheckers` or
     * `GetInternalChecker`, as well as by examining the [long running
     * Operation](https://cloud.google.com/apis/design/design_patterns#long_running_operations)
     * that created it.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The checker is running and available for use. A checker in this state
     * can be returned by `ListInternalCheckers` or `GetInternalChecker` as
     * well as by examining the [long running
     * Operation](https://cloud.google.com/apis/design/design_patterns#long_running_operations)
     * that created it.
     * If a checker is being torn down, it is neither visible nor usable, so
     * there is no "deleting" or "down" state.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::RUNNING => 'RUNNING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


