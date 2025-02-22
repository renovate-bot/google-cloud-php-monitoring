<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification.proto

namespace GPBMetadata\Google\Monitoring\V3;

class Notification
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Label::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Common::initOnce();
        \GPBMetadata\Google\Monitoring\V3\MutationRecord::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'google/monitoring/v3/notification.protogoogle.monitoring.v3google/api/label.protogoogle/api/launch_stage.protogoogle/api/resource.proto!google/monitoring/v3/common.proto*google/monitoring/v3/mutation_record.protogoogle/protobuf/wrappers.proto"�
NotificationChannelDescriptor
name (	
type (	
display_name (	
description (	+
labels (2.google.api.LabelDescriptor>
supported_tiers (2!.google.monitoring.v3.ServiceTierB-
launch_stage (2.google.api.LaunchStage:��A�
7monitoring.googleapis.com/NotificationChannelDescriptorFprojects/{project}/notificationChannelDescriptors/{channel_descriptor}Porganizations/{organization}/notificationChannelDescriptors/{channel_descriptor}Dfolders/{folder}/notificationChannelDescriptors/{channel_descriptor}*"�
NotificationChannel
type (	
name (	B�A
display_name (	
description (	E
labels (25.google.monitoring.v3.NotificationChannel.LabelsEntryN
user_labels (29.google.monitoring.v3.NotificationChannel.UserLabelsEntryY
verification_status	 (2<.google.monitoring.v3.NotificationChannel.VerificationStatus+
enabled (2.google.protobuf.BoolValue=
creation_record (2$.google.monitoring.v3.MutationRecord>
mutation_records (2$.google.monitoring.v3.MutationRecord-
LabelsEntry
key (	
value (	:81
UserLabelsEntry
key (	
value (	:8"W
VerificationStatus#
VERIFICATION_STATUS_UNSPECIFIED 

UNVERIFIED
VERIFIED:��A�
-monitoring.googleapis.com/NotificationChannel>projects/{project}/notificationChannels/{notification_channel}Horganizations/{organization}/notificationChannels/{notification_channel}<folders/{folder}/notificationChannels/{notification_channel}*B�
com.google.monitoring.v3BNotificationProtoPZAcloud.google.com/go/monitoring/apiv3/v2/monitoringpb;monitoringpb�Google.Cloud.Monitoring.V3�Google\\Cloud\\Monitoring\\V3�Google::Cloud::Monitoring::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

