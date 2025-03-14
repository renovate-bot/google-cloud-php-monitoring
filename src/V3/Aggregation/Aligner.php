<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace Google\Cloud\Monitoring\V3\Aggregation;

use UnexpectedValueException;

/**
 * The `Aligner` specifies the operation that will be applied to the data
 * points in each alignment period in a time series. Except for
 * `ALIGN_NONE`, which specifies that no operation be applied, each alignment
 * operation replaces the set of data values in each alignment period with
 * a single value: the result of applying the operation to the data values.
 * An aligned time series has a single data value at the end of each
 * `alignment_period`.
 * An alignment operation can change the data type of the values, too. For
 * example, if you apply a counting operation to boolean values, the data
 * `value_type` in the original time series is `BOOLEAN`, but the `value_type`
 * in the aligned result is `INT64`.
 *
 * Protobuf type <code>google.monitoring.v3.Aggregation.Aligner</code>
 */
class Aligner
{
    /**
     * No alignment. Raw data is returned. Not valid if cross-series reduction
     * is requested. The `value_type` of the result is the same as the
     * `value_type` of the input.
     *
     * Generated from protobuf enum <code>ALIGN_NONE = 0;</code>
     */
    const ALIGN_NONE = 0;
    /**
     * Align and convert to
     * [DELTA][google.api.MetricDescriptor.MetricKind.DELTA].
     * The output is `delta = y1 - y0`.
     * This alignment is valid for
     * [CUMULATIVE][google.api.MetricDescriptor.MetricKind.CUMULATIVE] and
     * `DELTA` metrics. If the selected alignment period results in periods
     * with no data, then the aligned value for such a period is created by
     * interpolation. The `value_type`  of the aligned result is the same as
     * the `value_type` of the input.
     *
     * Generated from protobuf enum <code>ALIGN_DELTA = 1;</code>
     */
    const ALIGN_DELTA = 1;
    /**
     * Align and convert to a rate. The result is computed as
     * `rate = (y1 - y0)/(t1 - t0)`, or "delta over time".
     * Think of this aligner as providing the slope of the line that passes
     * through the value at the start and at the end of the `alignment_period`.
     * This aligner is valid for `CUMULATIVE`
     * and `DELTA` metrics with numeric values. If the selected alignment
     * period results in periods with no data, then the aligned value for
     * such a period is created by interpolation. The output is a `GAUGE`
     * metric with `value_type` `DOUBLE`.
     * If, by "rate", you mean "percentage change", see the
     * `ALIGN_PERCENT_CHANGE` aligner instead.
     *
     * Generated from protobuf enum <code>ALIGN_RATE = 2;</code>
     */
    const ALIGN_RATE = 2;
    /**
     * Align by interpolating between adjacent points around the alignment
     * period boundary. This aligner is valid for `GAUGE` metrics with
     * numeric values. The `value_type` of the aligned result is the same as the
     * `value_type` of the input.
     *
     * Generated from protobuf enum <code>ALIGN_INTERPOLATE = 3;</code>
     */
    const ALIGN_INTERPOLATE = 3;
    /**
     * Align by moving the most recent data point before the end of the
     * alignment period to the boundary at the end of the alignment
     * period. This aligner is valid for `GAUGE` metrics. The `value_type` of
     * the aligned result is the same as the `value_type` of the input.
     *
     * Generated from protobuf enum <code>ALIGN_NEXT_OLDER = 4;</code>
     */
    const ALIGN_NEXT_OLDER = 4;
    /**
     * Align the time series by returning the minimum value in each alignment
     * period. This aligner is valid for `GAUGE` and `DELTA` metrics with
     * numeric values. The `value_type` of the aligned result is the same as
     * the `value_type` of the input.
     *
     * Generated from protobuf enum <code>ALIGN_MIN = 10;</code>
     */
    const ALIGN_MIN = 10;
    /**
     * Align the time series by returning the maximum value in each alignment
     * period. This aligner is valid for `GAUGE` and `DELTA` metrics with
     * numeric values. The `value_type` of the aligned result is the same as
     * the `value_type` of the input.
     *
     * Generated from protobuf enum <code>ALIGN_MAX = 11;</code>
     */
    const ALIGN_MAX = 11;
    /**
     * Align the time series by returning the mean value in each alignment
     * period. This aligner is valid for `GAUGE` and `DELTA` metrics with
     * numeric values. The `value_type` of the aligned result is `DOUBLE`.
     *
     * Generated from protobuf enum <code>ALIGN_MEAN = 12;</code>
     */
    const ALIGN_MEAN = 12;
    /**
     * Align the time series by returning the number of values in each alignment
     * period. This aligner is valid for `GAUGE` and `DELTA` metrics with
     * numeric or Boolean values. The `value_type` of the aligned result is
     * `INT64`.
     *
     * Generated from protobuf enum <code>ALIGN_COUNT = 13;</code>
     */
    const ALIGN_COUNT = 13;
    /**
     * Align the time series by returning the sum of the values in each
     * alignment period. This aligner is valid for `GAUGE` and `DELTA`
     * metrics with numeric and distribution values. The `value_type` of the
     * aligned result is the same as the `value_type` of the input.
     *
     * Generated from protobuf enum <code>ALIGN_SUM = 14;</code>
     */
    const ALIGN_SUM = 14;
    /**
     * Align the time series by returning the standard deviation of the values
     * in each alignment period. This aligner is valid for `GAUGE` and
     * `DELTA` metrics with numeric values. The `value_type` of the output is
     * `DOUBLE`.
     *
     * Generated from protobuf enum <code>ALIGN_STDDEV = 15;</code>
     */
    const ALIGN_STDDEV = 15;
    /**
     * Align the time series by returning the number of `True` values in
     * each alignment period. This aligner is valid for `GAUGE` metrics with
     * Boolean values. The `value_type` of the output is `INT64`.
     *
     * Generated from protobuf enum <code>ALIGN_COUNT_TRUE = 16;</code>
     */
    const ALIGN_COUNT_TRUE = 16;
    /**
     * Align the time series by returning the number of `False` values in
     * each alignment period. This aligner is valid for `GAUGE` metrics with
     * Boolean values. The `value_type` of the output is `INT64`.
     *
     * Generated from protobuf enum <code>ALIGN_COUNT_FALSE = 24;</code>
     */
    const ALIGN_COUNT_FALSE = 24;
    /**
     * Align the time series by returning the ratio of the number of `True`
     * values to the total number of values in each alignment period. This
     * aligner is valid for `GAUGE` metrics with Boolean values. The output
     * value is in the range [0.0, 1.0] and has `value_type` `DOUBLE`.
     *
     * Generated from protobuf enum <code>ALIGN_FRACTION_TRUE = 17;</code>
     */
    const ALIGN_FRACTION_TRUE = 17;
    /**
     * Align the time series by using [percentile
     * aggregation](https://en.wikipedia.org/wiki/Percentile). The resulting
     * data point in each alignment period is the 99th percentile of all data
     * points in the period. This aligner is valid for `GAUGE` and `DELTA`
     * metrics with distribution values. The output is a `GAUGE` metric with
     * `value_type` `DOUBLE`.
     *
     * Generated from protobuf enum <code>ALIGN_PERCENTILE_99 = 18;</code>
     */
    const ALIGN_PERCENTILE_99 = 18;
    /**
     * Align the time series by using [percentile
     * aggregation](https://en.wikipedia.org/wiki/Percentile). The resulting
     * data point in each alignment period is the 95th percentile of all data
     * points in the period. This aligner is valid for `GAUGE` and `DELTA`
     * metrics with distribution values. The output is a `GAUGE` metric with
     * `value_type` `DOUBLE`.
     *
     * Generated from protobuf enum <code>ALIGN_PERCENTILE_95 = 19;</code>
     */
    const ALIGN_PERCENTILE_95 = 19;
    /**
     * Align the time series by using [percentile
     * aggregation](https://en.wikipedia.org/wiki/Percentile). The resulting
     * data point in each alignment period is the 50th percentile of all data
     * points in the period. This aligner is valid for `GAUGE` and `DELTA`
     * metrics with distribution values. The output is a `GAUGE` metric with
     * `value_type` `DOUBLE`.
     *
     * Generated from protobuf enum <code>ALIGN_PERCENTILE_50 = 20;</code>
     */
    const ALIGN_PERCENTILE_50 = 20;
    /**
     * Align the time series by using [percentile
     * aggregation](https://en.wikipedia.org/wiki/Percentile). The resulting
     * data point in each alignment period is the 5th percentile of all data
     * points in the period. This aligner is valid for `GAUGE` and `DELTA`
     * metrics with distribution values. The output is a `GAUGE` metric with
     * `value_type` `DOUBLE`.
     *
     * Generated from protobuf enum <code>ALIGN_PERCENTILE_05 = 21;</code>
     */
    const ALIGN_PERCENTILE_05 = 21;
    /**
     * Align and convert to a percentage change. This aligner is valid for
     * `GAUGE` and `DELTA` metrics with numeric values. This alignment returns
     * `((current - previous)/previous) * 100`, where the value of `previous` is
     * determined based on the `alignment_period`.
     * If the values of `current` and `previous` are both 0, then the returned
     * value is 0. If only `previous` is 0, the returned value is infinity.
     * A 10-minute moving mean is computed at each point of the alignment period
     * prior to the above calculation to smooth the metric and prevent false
     * positives from very short-lived spikes. The moving mean is only
     * applicable for data whose values are `>= 0`. Any values `< 0` are
     * treated as a missing datapoint, and are ignored. While `DELTA`
     * metrics are accepted by this alignment, special care should be taken that
     * the values for the metric will always be positive. The output is a
     * `GAUGE` metric with `value_type` `DOUBLE`.
     *
     * Generated from protobuf enum <code>ALIGN_PERCENT_CHANGE = 23;</code>
     */
    const ALIGN_PERCENT_CHANGE = 23;

    private static $valueToName = [
        self::ALIGN_NONE => 'ALIGN_NONE',
        self::ALIGN_DELTA => 'ALIGN_DELTA',
        self::ALIGN_RATE => 'ALIGN_RATE',
        self::ALIGN_INTERPOLATE => 'ALIGN_INTERPOLATE',
        self::ALIGN_NEXT_OLDER => 'ALIGN_NEXT_OLDER',
        self::ALIGN_MIN => 'ALIGN_MIN',
        self::ALIGN_MAX => 'ALIGN_MAX',
        self::ALIGN_MEAN => 'ALIGN_MEAN',
        self::ALIGN_COUNT => 'ALIGN_COUNT',
        self::ALIGN_SUM => 'ALIGN_SUM',
        self::ALIGN_STDDEV => 'ALIGN_STDDEV',
        self::ALIGN_COUNT_TRUE => 'ALIGN_COUNT_TRUE',
        self::ALIGN_COUNT_FALSE => 'ALIGN_COUNT_FALSE',
        self::ALIGN_FRACTION_TRUE => 'ALIGN_FRACTION_TRUE',
        self::ALIGN_PERCENTILE_99 => 'ALIGN_PERCENTILE_99',
        self::ALIGN_PERCENTILE_95 => 'ALIGN_PERCENTILE_95',
        self::ALIGN_PERCENTILE_50 => 'ALIGN_PERCENTILE_50',
        self::ALIGN_PERCENTILE_05 => 'ALIGN_PERCENTILE_05',
        self::ALIGN_PERCENT_CHANGE => 'ALIGN_PERCENT_CHANGE',
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


