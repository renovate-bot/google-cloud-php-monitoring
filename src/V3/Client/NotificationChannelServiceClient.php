<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/monitoring/v3/notification_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Monitoring\V3\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Monitoring\V3\CreateNotificationChannelRequest;
use Google\Cloud\Monitoring\V3\DeleteNotificationChannelRequest;
use Google\Cloud\Monitoring\V3\GetNotificationChannelDescriptorRequest;
use Google\Cloud\Monitoring\V3\GetNotificationChannelRequest;
use Google\Cloud\Monitoring\V3\GetNotificationChannelVerificationCodeRequest;
use Google\Cloud\Monitoring\V3\GetNotificationChannelVerificationCodeResponse;
use Google\Cloud\Monitoring\V3\ListNotificationChannelDescriptorsRequest;
use Google\Cloud\Monitoring\V3\ListNotificationChannelsRequest;
use Google\Cloud\Monitoring\V3\NotificationChannel;
use Google\Cloud\Monitoring\V3\NotificationChannelDescriptor;
use Google\Cloud\Monitoring\V3\SendNotificationChannelVerificationCodeRequest;
use Google\Cloud\Monitoring\V3\UpdateNotificationChannelRequest;
use Google\Cloud\Monitoring\V3\VerifyNotificationChannelRequest;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: The Notification Channel API provides access to configuration that
 * controls how messages related to incidents are sent.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<NotificationChannel> createNotificationChannelAsync(CreateNotificationChannelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteNotificationChannelAsync(DeleteNotificationChannelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<NotificationChannel> getNotificationChannelAsync(GetNotificationChannelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<NotificationChannelDescriptor> getNotificationChannelDescriptorAsync(GetNotificationChannelDescriptorRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<GetNotificationChannelVerificationCodeResponse> getNotificationChannelVerificationCodeAsync(GetNotificationChannelVerificationCodeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listNotificationChannelDescriptorsAsync(ListNotificationChannelDescriptorsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listNotificationChannelsAsync(ListNotificationChannelsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> sendNotificationChannelVerificationCodeAsync(SendNotificationChannelVerificationCodeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<NotificationChannel> updateNotificationChannelAsync(UpdateNotificationChannelRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<NotificationChannel> verifyNotificationChannelAsync(VerifyNotificationChannelRequest $request, array $optionalArgs = [])
 */
final class NotificationChannelServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.monitoring.v3.NotificationChannelService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'monitoring.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'monitoring.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/monitoring',
        'https://www.googleapis.com/auth/monitoring.read',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/notification_channel_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/notification_channel_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/notification_channel_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/notification_channel_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_channel_descriptor resource.
     *
     * @param string $folder
     * @param string $channelDescriptor
     *
     * @return string The formatted folder_channel_descriptor resource.
     */
    public static function folderChannelDescriptorName(string $folder, string $channelDescriptor): string
    {
        return self::getPathTemplate('folderChannelDescriptor')->render([
            'folder' => $folder,
            'channel_descriptor' => $channelDescriptor,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_notification_channel resource.
     *
     * @param string $folder
     * @param string $notificationChannel
     *
     * @return string The formatted folder_notification_channel resource.
     */
    public static function folderNotificationChannelName(string $folder, string $notificationChannel): string
    {
        return self::getPathTemplate('folderNotificationChannel')->render([
            'folder' => $folder,
            'notification_channel' => $notificationChannel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * notification_channel resource.
     *
     * @param string $project
     * @param string $notificationChannel
     *
     * @return string The formatted notification_channel resource.
     */
    public static function notificationChannelName(string $project, string $notificationChannel): string
    {
        return self::getPathTemplate('notificationChannel')->render([
            'project' => $project,
            'notification_channel' => $notificationChannel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * notification_channel_descriptor resource.
     *
     * @param string $project
     * @param string $channelDescriptor
     *
     * @return string The formatted notification_channel_descriptor resource.
     */
    public static function notificationChannelDescriptorName(string $project, string $channelDescriptor): string
    {
        return self::getPathTemplate('notificationChannelDescriptor')->render([
            'project' => $project,
            'channel_descriptor' => $channelDescriptor,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_channel_descriptor resource.
     *
     * @param string $organization
     * @param string $channelDescriptor
     *
     * @return string The formatted organization_channel_descriptor resource.
     */
    public static function organizationChannelDescriptorName(string $organization, string $channelDescriptor): string
    {
        return self::getPathTemplate('organizationChannelDescriptor')->render([
            'organization' => $organization,
            'channel_descriptor' => $channelDescriptor,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_notification_channel resource.
     *
     * @param string $organization
     * @param string $notificationChannel
     *
     * @return string The formatted organization_notification_channel resource.
     */
    public static function organizationNotificationChannelName(string $organization, string $notificationChannel): string
    {
        return self::getPathTemplate('organizationNotificationChannel')->render([
            'organization' => $organization,
            'notification_channel' => $notificationChannel,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_channel_descriptor resource.
     *
     * @param string $project
     * @param string $channelDescriptor
     *
     * @return string The formatted project_channel_descriptor resource.
     */
    public static function projectChannelDescriptorName(string $project, string $channelDescriptor): string
    {
        return self::getPathTemplate('projectChannelDescriptor')->render([
            'project' => $project,
            'channel_descriptor' => $channelDescriptor,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_notification_channel resource.
     *
     * @param string $project
     * @param string $notificationChannel
     *
     * @return string The formatted project_notification_channel resource.
     */
    public static function projectNotificationChannelName(string $project, string $notificationChannel): string
    {
        return self::getPathTemplate('projectNotificationChannel')->render([
            'project' => $project,
            'notification_channel' => $notificationChannel,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - folderChannelDescriptor: folders/{folder}/notificationChannelDescriptors/{channel_descriptor}
     * - folderNotificationChannel: folders/{folder}/notificationChannels/{notification_channel}
     * - notificationChannel: projects/{project}/notificationChannels/{notification_channel}
     * - notificationChannelDescriptor: projects/{project}/notificationChannelDescriptors/{channel_descriptor}
     * - organizationChannelDescriptor: organizations/{organization}/notificationChannelDescriptors/{channel_descriptor}
     * - organizationNotificationChannel: organizations/{organization}/notificationChannels/{notification_channel}
     * - projectChannelDescriptor: projects/{project}/notificationChannelDescriptors/{channel_descriptor}
     * - projectNotificationChannel: projects/{project}/notificationChannels/{notification_channel}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, ?string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'monitoring.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a new notification channel, representing a single notification
     * endpoint such as an email address, SMS number, or PagerDuty service.
     *
     * Design your application to single-thread API calls that modify the state of
     * notification channels in a single project. This includes calls to
     * CreateNotificationChannel, DeleteNotificationChannel and
     * UpdateNotificationChannel.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::createNotificationChannelAsync()} .
     *
     * @example samples/V3/NotificationChannelServiceClient/create_notification_channel.php
     *
     * @param CreateNotificationChannelRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return NotificationChannel
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createNotificationChannel(CreateNotificationChannelRequest $request, array $callOptions = []): NotificationChannel
    {
        return $this->startApiCall('CreateNotificationChannel', $request, $callOptions)->wait();
    }

    /**
     * Deletes a notification channel.
     *
     * Design your application to single-thread API calls that modify the state of
     * notification channels in a single project. This includes calls to
     * CreateNotificationChannel, DeleteNotificationChannel and
     * UpdateNotificationChannel.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::deleteNotificationChannelAsync()} .
     *
     * @example samples/V3/NotificationChannelServiceClient/delete_notification_channel.php
     *
     * @param DeleteNotificationChannelRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteNotificationChannel(DeleteNotificationChannelRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteNotificationChannel', $request, $callOptions)->wait();
    }

    /**
     * Gets a single notification channel. The channel includes the relevant
     * configuration details with which the channel was created. However, the
     * response may truncate or omit passwords, API keys, or other private key
     * matter and thus the response may not be 100% identical to the information
     * that was supplied in the call to the create method.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::getNotificationChannelAsync()} .
     *
     * @example samples/V3/NotificationChannelServiceClient/get_notification_channel.php
     *
     * @param GetNotificationChannelRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return NotificationChannel
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getNotificationChannel(GetNotificationChannelRequest $request, array $callOptions = []): NotificationChannel
    {
        return $this->startApiCall('GetNotificationChannel', $request, $callOptions)->wait();
    }

    /**
     * Gets a single channel descriptor. The descriptor indicates which fields
     * are expected / permitted for a notification channel of the given type.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::getNotificationChannelDescriptorAsync()}
     * .
     *
     * @example samples/V3/NotificationChannelServiceClient/get_notification_channel_descriptor.php
     *
     * @param GetNotificationChannelDescriptorRequest $request     A request to house fields associated with the call.
     * @param array                                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return NotificationChannelDescriptor
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getNotificationChannelDescriptor(GetNotificationChannelDescriptorRequest $request, array $callOptions = []): NotificationChannelDescriptor
    {
        return $this->startApiCall('GetNotificationChannelDescriptor', $request, $callOptions)->wait();
    }

    /**
     * Requests a verification code for an already verified channel that can then
     * be used in a call to VerifyNotificationChannel() on a different channel
     * with an equivalent identity in the same or in a different project. This
     * makes it possible to copy a channel between projects without requiring
     * manual reverification of the channel. If the channel is not in the
     * verified state, this method will fail (in other words, this may only be
     * used if the SendNotificationChannelVerificationCode and
     * VerifyNotificationChannel paths have already been used to put the given
     * channel into the verified state).
     *
     * There is no guarantee that the verification codes returned by this method
     * will be of a similar structure or form as the ones that are delivered
     * to the channel via SendNotificationChannelVerificationCode; while
     * VerifyNotificationChannel() will recognize both the codes delivered via
     * SendNotificationChannelVerificationCode() and returned from
     * GetNotificationChannelVerificationCode(), it is typically the case that
     * the verification codes delivered via
     * SendNotificationChannelVerificationCode() will be shorter and also
     * have a shorter expiration (e.g. codes such as "G-123456") whereas
     * GetVerificationCode() will typically return a much longer, websafe base
     * 64 encoded string that has a longer expiration time.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::getNotificationChannelVerificationCodeAsync()}
     * .
     *
     * @example samples/V3/NotificationChannelServiceClient/get_notification_channel_verification_code.php
     *
     * @param GetNotificationChannelVerificationCodeRequest $request     A request to house fields associated with the call.
     * @param array                                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return GetNotificationChannelVerificationCodeResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getNotificationChannelVerificationCode(GetNotificationChannelVerificationCodeRequest $request, array $callOptions = []): GetNotificationChannelVerificationCodeResponse
    {
        return $this->startApiCall('GetNotificationChannelVerificationCode', $request, $callOptions)->wait();
    }

    /**
     * Lists the descriptors for supported channel types. The use of descriptors
     * makes it possible for new channel types to be dynamically added.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::listNotificationChannelDescriptorsAsync()}
     * .
     *
     * @example samples/V3/NotificationChannelServiceClient/list_notification_channel_descriptors.php
     *
     * @param ListNotificationChannelDescriptorsRequest $request     A request to house fields associated with the call.
     * @param array                                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listNotificationChannelDescriptors(ListNotificationChannelDescriptorsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListNotificationChannelDescriptors', $request, $callOptions);
    }

    /**
     * Lists the notification channels that have been created for the project.
     * To list the types of notification channels that are supported, use
     * the `ListNotificationChannelDescriptors` method.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::listNotificationChannelsAsync()} .
     *
     * @example samples/V3/NotificationChannelServiceClient/list_notification_channels.php
     *
     * @param ListNotificationChannelsRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listNotificationChannels(ListNotificationChannelsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListNotificationChannels', $request, $callOptions);
    }

    /**
     * Causes a verification code to be delivered to the channel. The code
     * can then be supplied in `VerifyNotificationChannel` to verify the channel.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::sendNotificationChannelVerificationCodeAsync()}
     * .
     *
     * @example samples/V3/NotificationChannelServiceClient/send_notification_channel_verification_code.php
     *
     * @param SendNotificationChannelVerificationCodeRequest $request     A request to house fields associated with the call.
     * @param array                                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function sendNotificationChannelVerificationCode(SendNotificationChannelVerificationCodeRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('SendNotificationChannelVerificationCode', $request, $callOptions)->wait();
    }

    /**
     * Updates a notification channel. Fields not specified in the field mask
     * remain unchanged.
     *
     * Design your application to single-thread API calls that modify the state of
     * notification channels in a single project. This includes calls to
     * CreateNotificationChannel, DeleteNotificationChannel and
     * UpdateNotificationChannel.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::updateNotificationChannelAsync()} .
     *
     * @example samples/V3/NotificationChannelServiceClient/update_notification_channel.php
     *
     * @param UpdateNotificationChannelRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return NotificationChannel
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateNotificationChannel(UpdateNotificationChannelRequest $request, array $callOptions = []): NotificationChannel
    {
        return $this->startApiCall('UpdateNotificationChannel', $request, $callOptions)->wait();
    }

    /**
     * Verifies a `NotificationChannel` by proving receipt of the code
     * delivered to the channel as a result of calling
     * `SendNotificationChannelVerificationCode`.
     *
     * The async variant is
     * {@see NotificationChannelServiceClient::verifyNotificationChannelAsync()} .
     *
     * @example samples/V3/NotificationChannelServiceClient/verify_notification_channel.php
     *
     * @param VerifyNotificationChannelRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return NotificationChannel
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function verifyNotificationChannel(VerifyNotificationChannelRequest $request, array $callOptions = []): NotificationChannel
    {
        return $this->startApiCall('VerifyNotificationChannel', $request, $callOptions)->wait();
    }
}
