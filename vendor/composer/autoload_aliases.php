<?php

// Functions and constants

namespace {
    if(!function_exists('\\getallheaders')){
        function getallheaders(...$args) {
            return \resendwp_getallheaders(...func_get_args());
        }
    }
    if(!function_exists('\\trigger_deprecation')){
        function trigger_deprecation(...$args) {
            return \resendwp_trigger_deprecation(...func_get_args());
        }
    }

}
namespace GuzzleHttp {
    if(!function_exists('\\GuzzleHttp\\describe_type')){
        function describe_type(...$args) {
            return \ResendWP\GuzzleHttp\describe_type(...func_get_args());
        }
    }
    if(!function_exists('\\GuzzleHttp\\headers_from_lines')){
        function headers_from_lines(...$args) {
            return \ResendWP\GuzzleHttp\headers_from_lines(...func_get_args());
        }
    }
    if(!function_exists('\\GuzzleHttp\\debug_resource')){
        function debug_resource(...$args) {
            return \ResendWP\GuzzleHttp\debug_resource(...func_get_args());
        }
    }
    if(!function_exists('\\GuzzleHttp\\choose_handler')){
        function choose_handler(...$args) {
            return \ResendWP\GuzzleHttp\choose_handler(...func_get_args());
        }
    }
    if(!function_exists('\\GuzzleHttp\\default_user_agent')){
        function default_user_agent(...$args) {
            return \ResendWP\GuzzleHttp\default_user_agent(...func_get_args());
        }
    }
    if(!function_exists('\\GuzzleHttp\\default_ca_bundle')){
        function default_ca_bundle(...$args) {
            return \ResendWP\GuzzleHttp\default_ca_bundle(...func_get_args());
        }
    }
    if(!function_exists('\\GuzzleHttp\\normalize_header_keys')){
        function normalize_header_keys(...$args) {
            return \ResendWP\GuzzleHttp\normalize_header_keys(...func_get_args());
        }
    }
    if(!function_exists('\\GuzzleHttp\\is_host_in_noproxy')){
        function is_host_in_noproxy(...$args) {
            return \ResendWP\GuzzleHttp\is_host_in_noproxy(...func_get_args());
        }
    }
    if(!function_exists('\\GuzzleHttp\\json_decode')){
        function json_decode(...$args) {
            return \ResendWP\GuzzleHttp\json_decode(...func_get_args());
        }
    }
    if(!function_exists('\\GuzzleHttp\\json_encode')){
        function json_encode(...$args) {
            return \ResendWP\GuzzleHttp\json_encode(...func_get_args());
        }
    }
}


namespace ResendWP {

    use BrianHenryIE\Strauss\Types\AutoloadAliasInterface;

    /**
     * @see AutoloadAliasInterface
     *
     * @phpstan-type ClassAliasArray array{'type':'class',isabstract:bool,classname:string,namespace?:string,extends:string,implements:array<string>}
     * @phpstan-type InterfaceAliasArray array{'type':'interface',interfacename:string,namespace?:string,extends:array<string>}
     * @phpstan-type TraitAliasArray array{'type':'trait',traitname:string,namespace?:string,use:array<string>}
     * @phpstan-type AutoloadAliasArray array<string,ClassAliasArray|InterfaceAliasArray|TraitAliasArray>
     */
    class AliasAutoloader
    {
        private string $includeFilePath;

        /**
         * @var AutoloadAliasArray
         */
        private array $autoloadAliases = array (
  'GuzzleHttp\\BodySummarizer' => 
  array (
    'type' => 'class',
    'classname' => 'BodySummarizer',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\BodySummarizer',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\BodySummarizerInterface',
    ),
  ),
  'GuzzleHttp\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\Client',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\ClientInterface',
      1 => 'Psr\\Http\\Client\\ClientInterface',
    ),
  ),
  'GuzzleHttp\\Cookie\\CookieJar' => 
  array (
    'type' => 'class',
    'classname' => 'CookieJar',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Cookie',
    'extends' => 'ResendWP\\GuzzleHttp\\Cookie\\CookieJar',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Cookie\\CookieJarInterface',
    ),
  ),
  'GuzzleHttp\\Cookie\\FileCookieJar' => 
  array (
    'type' => 'class',
    'classname' => 'FileCookieJar',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Cookie',
    'extends' => 'ResendWP\\GuzzleHttp\\Cookie\\FileCookieJar',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Cookie\\SessionCookieJar' => 
  array (
    'type' => 'class',
    'classname' => 'SessionCookieJar',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Cookie',
    'extends' => 'ResendWP\\GuzzleHttp\\Cookie\\SessionCookieJar',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Cookie\\SetCookie' => 
  array (
    'type' => 'class',
    'classname' => 'SetCookie',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Cookie',
    'extends' => 'ResendWP\\GuzzleHttp\\Cookie\\SetCookie',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Exception\\BadResponseException' => 
  array (
    'type' => 'class',
    'classname' => 'BadResponseException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Exception',
    'extends' => 'ResendWP\\GuzzleHttp\\Exception\\BadResponseException',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Exception\\ClientException' => 
  array (
    'type' => 'class',
    'classname' => 'ClientException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Exception',
    'extends' => 'ResendWP\\GuzzleHttp\\Exception\\ClientException',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Exception\\ConnectException' => 
  array (
    'type' => 'class',
    'classname' => 'ConnectException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Exception',
    'extends' => 'ResendWP\\GuzzleHttp\\Exception\\ConnectException',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Client\\NetworkExceptionInterface',
    ),
  ),
  'GuzzleHttp\\Exception\\InvalidArgumentException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidArgumentException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Exception',
    'extends' => 'ResendWP\\GuzzleHttp\\Exception\\InvalidArgumentException',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Exception\\GuzzleException',
    ),
  ),
  'GuzzleHttp\\Exception\\RequestException' => 
  array (
    'type' => 'class',
    'classname' => 'RequestException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Exception',
    'extends' => 'ResendWP\\GuzzleHttp\\Exception\\RequestException',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Client\\RequestExceptionInterface',
    ),
  ),
  'GuzzleHttp\\Exception\\ServerException' => 
  array (
    'type' => 'class',
    'classname' => 'ServerException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Exception',
    'extends' => 'ResendWP\\GuzzleHttp\\Exception\\ServerException',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Exception\\TooManyRedirectsException' => 
  array (
    'type' => 'class',
    'classname' => 'TooManyRedirectsException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Exception',
    'extends' => 'ResendWP\\GuzzleHttp\\Exception\\TooManyRedirectsException',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Exception\\TransferException' => 
  array (
    'type' => 'class',
    'classname' => 'TransferException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Exception',
    'extends' => 'ResendWP\\GuzzleHttp\\Exception\\TransferException',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Exception\\GuzzleException',
    ),
  ),
  'GuzzleHttp\\Handler\\CurlFactory' => 
  array (
    'type' => 'class',
    'classname' => 'CurlFactory',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Handler',
    'extends' => 'ResendWP\\GuzzleHttp\\Handler\\CurlFactory',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Handler\\CurlFactoryInterface',
    ),
  ),
  'GuzzleHttp\\Handler\\CurlHandler' => 
  array (
    'type' => 'class',
    'classname' => 'CurlHandler',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Handler',
    'extends' => 'ResendWP\\GuzzleHttp\\Handler\\CurlHandler',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Handler\\CurlMultiHandler' => 
  array (
    'type' => 'class',
    'classname' => 'CurlMultiHandler',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Handler',
    'extends' => 'ResendWP\\GuzzleHttp\\Handler\\CurlMultiHandler',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Handler\\EasyHandle' => 
  array (
    'type' => 'class',
    'classname' => 'EasyHandle',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Handler',
    'extends' => 'ResendWP\\GuzzleHttp\\Handler\\EasyHandle',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Handler\\HeaderProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'HeaderProcessor',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Handler',
    'extends' => 'ResendWP\\GuzzleHttp\\Handler\\HeaderProcessor',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Handler\\MockHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MockHandler',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Handler',
    'extends' => 'ResendWP\\GuzzleHttp\\Handler\\MockHandler',
    'implements' => 
    array (
      0 => 'Countable',
    ),
  ),
  'GuzzleHttp\\Handler\\Proxy' => 
  array (
    'type' => 'class',
    'classname' => 'Proxy',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Handler',
    'extends' => 'ResendWP\\GuzzleHttp\\Handler\\Proxy',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Handler\\StreamHandler' => 
  array (
    'type' => 'class',
    'classname' => 'StreamHandler',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Handler',
    'extends' => 'ResendWP\\GuzzleHttp\\Handler\\StreamHandler',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\HandlerStack' => 
  array (
    'type' => 'class',
    'classname' => 'HandlerStack',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\HandlerStack',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\MessageFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'MessageFormatter',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\MessageFormatter',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\MessageFormatterInterface',
    ),
  ),
  'GuzzleHttp\\Middleware' => 
  array (
    'type' => 'class',
    'classname' => 'Middleware',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\Middleware',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Pool' => 
  array (
    'type' => 'class',
    'classname' => 'Pool',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\Pool',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Promise\\PromisorInterface',
    ),
  ),
  'GuzzleHttp\\PrepareBodyMiddleware' => 
  array (
    'type' => 'class',
    'classname' => 'PrepareBodyMiddleware',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\PrepareBodyMiddleware',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\RedirectMiddleware' => 
  array (
    'type' => 'class',
    'classname' => 'RedirectMiddleware',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\RedirectMiddleware',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\RequestOptions' => 
  array (
    'type' => 'class',
    'classname' => 'RequestOptions',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\RequestOptions',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\RetryMiddleware' => 
  array (
    'type' => 'class',
    'classname' => 'RetryMiddleware',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\RetryMiddleware',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\TransferStats' => 
  array (
    'type' => 'class',
    'classname' => 'TransferStats',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\TransferStats',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Utils' => 
  array (
    'type' => 'class',
    'classname' => 'Utils',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp',
    'extends' => 'ResendWP\\GuzzleHttp\\Utils',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Promise\\AggregateException' => 
  array (
    'type' => 'class',
    'classname' => 'AggregateException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\AggregateException',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Promise\\CancellationException' => 
  array (
    'type' => 'class',
    'classname' => 'CancellationException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\CancellationException',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Promise\\Coroutine' => 
  array (
    'type' => 'class',
    'classname' => 'Coroutine',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\Coroutine',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Promise\\PromiseInterface',
    ),
  ),
  'GuzzleHttp\\Promise\\Create' => 
  array (
    'type' => 'class',
    'classname' => 'Create',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\Create',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Promise\\Each' => 
  array (
    'type' => 'class',
    'classname' => 'Each',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\Each',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Promise\\EachPromise' => 
  array (
    'type' => 'class',
    'classname' => 'EachPromise',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\EachPromise',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Promise\\PromisorInterface',
    ),
  ),
  'GuzzleHttp\\Promise\\FulfilledPromise' => 
  array (
    'type' => 'class',
    'classname' => 'FulfilledPromise',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\FulfilledPromise',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Promise\\PromiseInterface',
    ),
  ),
  'GuzzleHttp\\Promise\\Is' => 
  array (
    'type' => 'class',
    'classname' => 'Is',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\Is',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Promise\\Promise' => 
  array (
    'type' => 'class',
    'classname' => 'Promise',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\Promise',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Promise\\PromiseInterface',
    ),
  ),
  'GuzzleHttp\\Promise\\RejectedPromise' => 
  array (
    'type' => 'class',
    'classname' => 'RejectedPromise',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\RejectedPromise',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Promise\\PromiseInterface',
    ),
  ),
  'GuzzleHttp\\Promise\\RejectionException' => 
  array (
    'type' => 'class',
    'classname' => 'RejectionException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\RejectionException',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Promise\\TaskQueue' => 
  array (
    'type' => 'class',
    'classname' => 'TaskQueue',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\TaskQueue',
    'implements' => 
    array (
      0 => 'GuzzleHttp\\Promise\\TaskQueueInterface',
    ),
  ),
  'GuzzleHttp\\Promise\\Utils' => 
  array (
    'type' => 'class',
    'classname' => 'Utils',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 'ResendWP\\GuzzleHttp\\Promise\\Utils',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\AppendStream' => 
  array (
    'type' => 'class',
    'classname' => 'AppendStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\AppendStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\BufferStream' => 
  array (
    'type' => 'class',
    'classname' => 'BufferStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\BufferStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\CachingStream' => 
  array (
    'type' => 'class',
    'classname' => 'CachingStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\CachingStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\DroppingStream' => 
  array (
    'type' => 'class',
    'classname' => 'DroppingStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\DroppingStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => 
  array (
    'type' => 'class',
    'classname' => 'MalformedUriException',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7\\Exception',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Exception\\MalformedUriException',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\FnStream' => 
  array (
    'type' => 'class',
    'classname' => 'FnStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\FnStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\Header' => 
  array (
    'type' => 'class',
    'classname' => 'Header',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Header',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\HttpFactory' => 
  array (
    'type' => 'class',
    'classname' => 'HttpFactory',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\HttpFactory',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\RequestFactoryInterface',
      1 => 'Psr\\Http\\Message\\ResponseFactoryInterface',
      2 => 'Psr\\Http\\Message\\ServerRequestFactoryInterface',
      3 => 'Psr\\Http\\Message\\StreamFactoryInterface',
      4 => 'Psr\\Http\\Message\\UploadedFileFactoryInterface',
      5 => 'Psr\\Http\\Message\\UriFactoryInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\InflateStream' => 
  array (
    'type' => 'class',
    'classname' => 'InflateStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\InflateStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\LazyOpenStream' => 
  array (
    'type' => 'class',
    'classname' => 'LazyOpenStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\LazyOpenStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\LimitStream' => 
  array (
    'type' => 'class',
    'classname' => 'LimitStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\LimitStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\Message' => 
  array (
    'type' => 'class',
    'classname' => 'Message',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Message',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\MimeType' => 
  array (
    'type' => 'class',
    'classname' => 'MimeType',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\MimeType',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\MultipartStream' => 
  array (
    'type' => 'class',
    'classname' => 'MultipartStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\MultipartStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\NoSeekStream' => 
  array (
    'type' => 'class',
    'classname' => 'NoSeekStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\NoSeekStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\PumpStream' => 
  array (
    'type' => 'class',
    'classname' => 'PumpStream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\PumpStream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\Query' => 
  array (
    'type' => 'class',
    'classname' => 'Query',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Query',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\Request' => 
  array (
    'type' => 'class',
    'classname' => 'Request',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Request',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\RequestInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\Response' => 
  array (
    'type' => 'class',
    'classname' => 'Response',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Response',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\ResponseInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\Rfc7230' => 
  array (
    'type' => 'class',
    'classname' => 'Rfc7230',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Rfc7230',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\ServerRequest' => 
  array (
    'type' => 'class',
    'classname' => 'ServerRequest',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\ServerRequest',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\ServerRequestInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\Stream' => 
  array (
    'type' => 'class',
    'classname' => 'Stream',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Stream',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\StreamWrapper' => 
  array (
    'type' => 'class',
    'classname' => 'StreamWrapper',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\StreamWrapper',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\UploadedFile' => 
  array (
    'type' => 'class',
    'classname' => 'UploadedFile',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\UploadedFile',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\UploadedFileInterface',
    ),
  ),
  'GuzzleHttp\\Psr7\\Uri' => 
  array (
    'type' => 'class',
    'classname' => 'Uri',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Uri',
    'implements' => 
    array (
      0 => 'Psr\\Http\\Message\\UriInterface',
      1 => 'JsonSerializable',
    ),
  ),
  'GuzzleHttp\\Psr7\\UriComparator' => 
  array (
    'type' => 'class',
    'classname' => 'UriComparator',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\UriComparator',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\UriNormalizer' => 
  array (
    'type' => 'class',
    'classname' => 'UriNormalizer',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\UriNormalizer',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\UriResolver' => 
  array (
    'type' => 'class',
    'classname' => 'UriResolver',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\UriResolver',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\Psr7\\Utils' => 
  array (
    'type' => 'class',
    'classname' => 'Utils',
    'isabstract' => false,
    'namespace' => 'GuzzleHttp\\Psr7',
    'extends' => 'ResendWP\\GuzzleHttp\\Psr7\\Utils',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Attribute\\AsMonologProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'AsMonologProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Attribute',
    'extends' => 'ResendWP\\Monolog\\Attribute\\AsMonologProcessor',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Attribute\\WithMonologChannel' => 
  array (
    'type' => 'class',
    'classname' => 'WithMonologChannel',
    'isabstract' => false,
    'namespace' => 'Monolog\\Attribute',
    'extends' => 'ResendWP\\Monolog\\Attribute\\WithMonologChannel',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\DateTimeImmutable' => 
  array (
    'type' => 'class',
    'classname' => 'DateTimeImmutable',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'ResendWP\\Monolog\\DateTimeImmutable',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\ErrorHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ErrorHandler',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'ResendWP\\Monolog\\ErrorHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\ChromePHPFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'ChromePHPFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\ChromePHPFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\ElasticaFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'ElasticaFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\ElasticaFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\ElasticsearchFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'ElasticsearchFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\ElasticsearchFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\FlowdockFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'FlowdockFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\FlowdockFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\FluentdFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'FluentdFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\FluentdFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\GelfMessageFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'GelfMessageFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\GelfMessageFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\GoogleCloudLoggingFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'GoogleCloudLoggingFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\GoogleCloudLoggingFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\HtmlFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'HtmlFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\HtmlFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\JsonFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'JsonFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\JsonFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\LineFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'LineFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\LineFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\LogglyFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'LogglyFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\LogglyFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\LogmaticFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'LogmaticFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\LogmaticFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\LogstashFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'LogstashFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\LogstashFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\MongoDBFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'MongoDBFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\MongoDBFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\NormalizerFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'NormalizerFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\NormalizerFormatter',
    'implements' => 
    array (
      0 => 'Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Formatter\\ScalarFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'ScalarFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\ScalarFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\SyslogFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'SyslogFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\SyslogFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Formatter\\WildfireFormatter' => 
  array (
    'type' => 'class',
    'classname' => 'WildfireFormatter',
    'isabstract' => false,
    'namespace' => 'Monolog\\Formatter',
    'extends' => 'ResendWP\\Monolog\\Formatter\\WildfireFormatter',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\AbstractHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractHandler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\AbstractHandler',
    'implements' => 
    array (
      0 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Handler\\AbstractProcessingHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractProcessingHandler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\AbstractProcessingHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\AbstractSyslogHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractSyslogHandler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\AbstractSyslogHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\AmqpHandler' => 
  array (
    'type' => 'class',
    'classname' => 'AmqpHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\AmqpHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\BrowserConsoleHandler' => 
  array (
    'type' => 'class',
    'classname' => 'BrowserConsoleHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\BrowserConsoleHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\BufferHandler' => 
  array (
    'type' => 'class',
    'classname' => 'BufferHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\BufferHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\ChromePHPHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ChromePHPHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\ChromePHPHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\CouchDBHandler' => 
  array (
    'type' => 'class',
    'classname' => 'CouchDBHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\CouchDBHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\CubeHandler' => 
  array (
    'type' => 'class',
    'classname' => 'CubeHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\CubeHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\Curl\\Util' => 
  array (
    'type' => 'class',
    'classname' => 'Util',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\Curl',
    'extends' => 'ResendWP\\Monolog\\Handler\\Curl\\Util',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\DeduplicationHandler' => 
  array (
    'type' => 'class',
    'classname' => 'DeduplicationHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\DeduplicationHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\DoctrineCouchDBHandler' => 
  array (
    'type' => 'class',
    'classname' => 'DoctrineCouchDBHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\DoctrineCouchDBHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\DynamoDbHandler' => 
  array (
    'type' => 'class',
    'classname' => 'DynamoDbHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\DynamoDbHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ElasticaHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ElasticaHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\ElasticaHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ElasticsearchHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ElasticsearchHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\ElasticsearchHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ErrorLogHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ErrorLogHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\ErrorLogHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\FallbackGroupHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FallbackGroupHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\FallbackGroupHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\FilterHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FilterHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\FilterHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\ResettableInterface',
      2 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy' => 
  array (
    'type' => 'class',
    'classname' => 'ChannelLevelActivationStrategy',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\FingersCrossed',
    'extends' => 'ResendWP\\Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface',
    ),
  ),
  'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy' => 
  array (
    'type' => 'class',
    'classname' => 'ErrorLevelActivationStrategy',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\FingersCrossed',
    'extends' => 'ResendWP\\Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface',
    ),
  ),
  'Monolog\\Handler\\FingersCrossedHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FingersCrossedHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\FingersCrossedHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\ResettableInterface',
      2 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\FirePHPHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FirePHPHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\FirePHPHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\FleepHookHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FleepHookHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\FleepHookHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\FlowdockHandler' => 
  array (
    'type' => 'class',
    'classname' => 'FlowdockHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\FlowdockHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\GelfHandler' => 
  array (
    'type' => 'class',
    'classname' => 'GelfHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\GelfHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\GroupHandler' => 
  array (
    'type' => 'class',
    'classname' => 'GroupHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\GroupHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Handler\\Handler' => 
  array (
    'type' => 'class',
    'classname' => 'Handler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\Handler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\HandlerInterface',
    ),
  ),
  'Monolog\\Handler\\HandlerWrapper' => 
  array (
    'type' => 'class',
    'classname' => 'HandlerWrapper',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\HandlerWrapper',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\HandlerInterface',
      1 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      2 => 'Monolog\\Handler\\FormattableHandlerInterface',
      3 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Handler\\IFTTTHandler' => 
  array (
    'type' => 'class',
    'classname' => 'IFTTTHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\IFTTTHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\InsightOpsHandler' => 
  array (
    'type' => 'class',
    'classname' => 'InsightOpsHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\InsightOpsHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\LogEntriesHandler' => 
  array (
    'type' => 'class',
    'classname' => 'LogEntriesHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\LogEntriesHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\LogglyHandler' => 
  array (
    'type' => 'class',
    'classname' => 'LogglyHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\LogglyHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\LogmaticHandler' => 
  array (
    'type' => 'class',
    'classname' => 'LogmaticHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\LogmaticHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\MailHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MailHandler',
    'isabstract' => true,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\MailHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\MandrillHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MandrillHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\MandrillHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\MissingExtensionException' => 
  array (
    'type' => 'class',
    'classname' => 'MissingExtensionException',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\MissingExtensionException',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\MongoDBHandler' => 
  array (
    'type' => 'class',
    'classname' => 'MongoDBHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\MongoDBHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\NativeMailerHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NativeMailerHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\NativeMailerHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\NewRelicHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NewRelicHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\NewRelicHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\NoopHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NoopHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\NoopHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\NullHandler' => 
  array (
    'type' => 'class',
    'classname' => 'NullHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\NullHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\OverflowHandler' => 
  array (
    'type' => 'class',
    'classname' => 'OverflowHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\OverflowHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\PHPConsoleHandler' => 
  array (
    'type' => 'class',
    'classname' => 'PHPConsoleHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\PHPConsoleHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ProcessHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ProcessHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\ProcessHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\PsrHandler' => 
  array (
    'type' => 'class',
    'classname' => 'PsrHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\PsrHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\PushoverHandler' => 
  array (
    'type' => 'class',
    'classname' => 'PushoverHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\PushoverHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\RedisHandler' => 
  array (
    'type' => 'class',
    'classname' => 'RedisHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\RedisHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\RedisPubSubHandler' => 
  array (
    'type' => 'class',
    'classname' => 'RedisPubSubHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\RedisPubSubHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\RollbarHandler' => 
  array (
    'type' => 'class',
    'classname' => 'RollbarHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\RollbarHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\RotatingFileHandler' => 
  array (
    'type' => 'class',
    'classname' => 'RotatingFileHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\RotatingFileHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SamplingHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SamplingHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\SamplingHandler',
    'implements' => 
    array (
      0 => 'Monolog\\Handler\\ProcessableHandlerInterface',
      1 => 'Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\SendGridHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SendGridHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\SendGridHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\Slack\\SlackRecord' => 
  array (
    'type' => 'class',
    'classname' => 'SlackRecord',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\Slack',
    'extends' => 'ResendWP\\Monolog\\Handler\\Slack\\SlackRecord',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SlackHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SlackHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\SlackHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SlackWebhookHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SlackWebhookHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\SlackWebhookHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SocketHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SocketHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\SocketHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SqsHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SqsHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\SqsHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\StreamHandler' => 
  array (
    'type' => 'class',
    'classname' => 'StreamHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\StreamHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SymfonyMailerHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SymfonyMailerHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\SymfonyMailerHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SyslogHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SyslogHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\SyslogHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SyslogUdp\\UdpSocket' => 
  array (
    'type' => 'class',
    'classname' => 'UdpSocket',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler\\SyslogUdp',
    'extends' => 'ResendWP\\Monolog\\Handler\\SyslogUdp\\UdpSocket',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\SyslogUdpHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SyslogUdpHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\SyslogUdpHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\TelegramBotHandler' => 
  array (
    'type' => 'class',
    'classname' => 'TelegramBotHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\TelegramBotHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\TestHandler' => 
  array (
    'type' => 'class',
    'classname' => 'TestHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\TestHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\WhatFailureGroupHandler' => 
  array (
    'type' => 'class',
    'classname' => 'WhatFailureGroupHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\WhatFailureGroupHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Handler\\ZendMonitorHandler' => 
  array (
    'type' => 'class',
    'classname' => 'ZendMonitorHandler',
    'isabstract' => false,
    'namespace' => 'Monolog\\Handler',
    'extends' => 'ResendWP\\Monolog\\Handler\\ZendMonitorHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\JsonSerializableDateTimeImmutable' => 
  array (
    'type' => 'class',
    'classname' => 'JsonSerializableDateTimeImmutable',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'ResendWP\\Monolog\\JsonSerializableDateTimeImmutable',
    'implements' => 
    array (
      0 => 'JsonSerializable',
    ),
  ),
  'Monolog\\LogRecord' => 
  array (
    'type' => 'class',
    'classname' => 'LogRecord',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'ResendWP\\Monolog\\LogRecord',
    'implements' => 
    array (
      0 => 'ArrayAccess',
    ),
  ),
  'Monolog\\Logger' => 
  array (
    'type' => 'class',
    'classname' => 'Logger',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'ResendWP\\Monolog\\Logger',
    'implements' => 
    array (
      0 => 'Psr\\Log\\LoggerInterface',
      1 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Processor\\ClosureContextProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'ClosureContextProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\ClosureContextProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\GitProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'GitProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\GitProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\HostnameProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'HostnameProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\HostnameProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\IntrospectionProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'IntrospectionProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\IntrospectionProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\LoadAverageProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'LoadAverageProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\LoadAverageProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\MemoryPeakUsageProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'MemoryPeakUsageProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\MemoryPeakUsageProcessor',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Processor\\MemoryProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'MemoryProcessor',
    'isabstract' => true,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\MemoryProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\MemoryUsageProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'MemoryUsageProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\MemoryUsageProcessor',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Processor\\MercurialProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'MercurialProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\MercurialProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\ProcessIdProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'ProcessIdProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\ProcessIdProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\PsrLogMessageProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'PsrLogMessageProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\PsrLogMessageProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\TagProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'TagProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\TagProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Processor\\UidProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'UidProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\UidProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
      1 => 'Monolog\\ResettableInterface',
    ),
  ),
  'Monolog\\Processor\\WebProcessor' => 
  array (
    'type' => 'class',
    'classname' => 'WebProcessor',
    'isabstract' => false,
    'namespace' => 'Monolog\\Processor',
    'extends' => 'ResendWP\\Monolog\\Processor\\WebProcessor',
    'implements' => 
    array (
      0 => 'Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\Registry' => 
  array (
    'type' => 'class',
    'classname' => 'Registry',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'ResendWP\\Monolog\\Registry',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\SignalHandler' => 
  array (
    'type' => 'class',
    'classname' => 'SignalHandler',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'ResendWP\\Monolog\\SignalHandler',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Test\\MonologTestCase' => 
  array (
    'type' => 'class',
    'classname' => 'MonologTestCase',
    'isabstract' => false,
    'namespace' => 'Monolog\\Test',
    'extends' => 'ResendWP\\Monolog\\Test\\MonologTestCase',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Test\\TestCase' => 
  array (
    'type' => 'class',
    'classname' => 'TestCase',
    'isabstract' => false,
    'namespace' => 'Monolog\\Test',
    'extends' => 'ResendWP\\Monolog\\Test\\TestCase',
    'implements' => 
    array (
    ),
  ),
  'Monolog\\Utils' => 
  array (
    'type' => 'class',
    'classname' => 'Utils',
    'isabstract' => false,
    'namespace' => 'Monolog',
    'extends' => 'ResendWP\\Monolog\\Utils',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\AbstractLogger' => 
  array (
    'type' => 'class',
    'classname' => 'AbstractLogger',
    'isabstract' => true,
    'namespace' => 'Psr\\Log',
    'extends' => 'ResendWP\\Psr\\Log\\AbstractLogger',
    'implements' => 
    array (
      0 => 'Psr\\Log\\LoggerInterface',
    ),
  ),
  'Psr\\Log\\InvalidArgumentException' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidArgumentException',
    'isabstract' => false,
    'namespace' => 'Psr\\Log',
    'extends' => 'ResendWP\\Psr\\Log\\InvalidArgumentException',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\LogLevel' => 
  array (
    'type' => 'class',
    'classname' => 'LogLevel',
    'isabstract' => false,
    'namespace' => 'Psr\\Log',
    'extends' => 'ResendWP\\Psr\\Log\\LogLevel',
    'implements' => 
    array (
    ),
  ),
  'Psr\\Log\\NullLogger' => 
  array (
    'type' => 'class',
    'classname' => 'NullLogger',
    'isabstract' => false,
    'namespace' => 'Psr\\Log',
    'extends' => 'ResendWP\\Psr\\Log\\NullLogger',
    'implements' => 
    array (
    ),
  ),
  'Resend\\ApiKey' => 
  array (
    'type' => 'class',
    'classname' => 'ApiKey',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\ApiKey',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Audience' => 
  array (
    'type' => 'class',
    'classname' => 'Audience',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Audience',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Broadcast' => 
  array (
    'type' => 'class',
    'classname' => 'Broadcast',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Broadcast',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Client' => 
  array (
    'type' => 'class',
    'classname' => 'Client',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Client',
    'implements' => 
    array (
      0 => 'Resend\\Contracts\\Client',
    ),
  ),
  'Resend\\Collection' => 
  array (
    'type' => 'class',
    'classname' => 'Collection',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Collection',
    'implements' => 
    array (
      0 => 'IteratorAggregate',
    ),
  ),
  'Resend\\Contact' => 
  array (
    'type' => 'class',
    'classname' => 'Contact',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Contact',
    'implements' => 
    array (
    ),
  ),
  'Resend\\ContactProperty' => 
  array (
    'type' => 'class',
    'classname' => 'ContactProperty',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\ContactProperty',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Contacts\\Topic' => 
  array (
    'type' => 'class',
    'classname' => 'Topic',
    'isabstract' => false,
    'namespace' => 'Resend\\Contacts',
    'extends' => 'ResendWP\\Resend\\Contacts\\Topic',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Domain' => 
  array (
    'type' => 'class',
    'classname' => 'Domain',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Domain',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Email' => 
  array (
    'type' => 'class',
    'classname' => 'Email',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Email',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Emails\\Attachment' => 
  array (
    'type' => 'class',
    'classname' => 'Attachment',
    'isabstract' => false,
    'namespace' => 'Resend\\Emails',
    'extends' => 'ResendWP\\Resend\\Emails\\Attachment',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Emails\\Receiving' => 
  array (
    'type' => 'class',
    'classname' => 'Receiving',
    'isabstract' => false,
    'namespace' => 'Resend\\Emails',
    'extends' => 'ResendWP\\Resend\\Emails\\Receiving',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Exceptions\\ErrorException' => 
  array (
    'type' => 'class',
    'classname' => 'ErrorException',
    'isabstract' => false,
    'namespace' => 'Resend\\Exceptions',
    'extends' => 'ResendWP\\Resend\\Exceptions\\ErrorException',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Exceptions\\MissingAttributeException' => 
  array (
    'type' => 'class',
    'classname' => 'MissingAttributeException',
    'isabstract' => false,
    'namespace' => 'Resend\\Exceptions',
    'extends' => 'ResendWP\\Resend\\Exceptions\\MissingAttributeException',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Exceptions\\TransporterException' => 
  array (
    'type' => 'class',
    'classname' => 'TransporterException',
    'isabstract' => false,
    'namespace' => 'Resend\\Exceptions',
    'extends' => 'ResendWP\\Resend\\Exceptions\\TransporterException',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Exceptions\\UnserializableResponse' => 
  array (
    'type' => 'class',
    'classname' => 'UnserializableResponse',
    'isabstract' => false,
    'namespace' => 'Resend\\Exceptions',
    'extends' => 'ResendWP\\Resend\\Exceptions\\UnserializableResponse',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Exceptions\\WebhookSignatureVerificationException' => 
  array (
    'type' => 'class',
    'classname' => 'WebhookSignatureVerificationException',
    'isabstract' => false,
    'namespace' => 'Resend\\Exceptions',
    'extends' => 'ResendWP\\Resend\\Exceptions\\WebhookSignatureVerificationException',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Resource' => 
  array (
    'type' => 'class',
    'classname' => 'Resource',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Resource',
    'implements' => 
    array (
      0 => 'Resend\\Contracts\\Resource',
    ),
  ),
  'Resend\\Segment' => 
  array (
    'type' => 'class',
    'classname' => 'Segment',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Segment',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\ApiKey' => 
  array (
    'type' => 'class',
    'classname' => 'ApiKey',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\ApiKey',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Audience' => 
  array (
    'type' => 'class',
    'classname' => 'Audience',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Audience',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Batch' => 
  array (
    'type' => 'class',
    'classname' => 'Batch',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Batch',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Broadcast' => 
  array (
    'type' => 'class',
    'classname' => 'Broadcast',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Broadcast',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Contact' => 
  array (
    'type' => 'class',
    'classname' => 'Contact',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Contact',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\ContactProperty' => 
  array (
    'type' => 'class',
    'classname' => 'ContactProperty',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\ContactProperty',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Contacts\\Segment' => 
  array (
    'type' => 'class',
    'classname' => 'Segment',
    'isabstract' => false,
    'namespace' => 'Resend\\Service\\Contacts',
    'extends' => 'ResendWP\\Resend\\Service\\Contacts\\Segment',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Contacts\\Topic' => 
  array (
    'type' => 'class',
    'classname' => 'Topic',
    'isabstract' => false,
    'namespace' => 'Resend\\Service\\Contacts',
    'extends' => 'ResendWP\\Resend\\Service\\Contacts\\Topic',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Domain' => 
  array (
    'type' => 'class',
    'classname' => 'Domain',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Domain',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Email' => 
  array (
    'type' => 'class',
    'classname' => 'Email',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Email',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Emails\\Attachment' => 
  array (
    'type' => 'class',
    'classname' => 'Attachment',
    'isabstract' => false,
    'namespace' => 'Resend\\Service\\Emails',
    'extends' => 'ResendWP\\Resend\\Service\\Emails\\Attachment',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Emails\\Receiving\\Attachment' => 
  array (
    'type' => 'class',
    'classname' => 'Attachment',
    'isabstract' => false,
    'namespace' => 'Resend\\Service\\Emails\\Receiving',
    'extends' => 'ResendWP\\Resend\\Service\\Emails\\Receiving\\Attachment',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Segment' => 
  array (
    'type' => 'class',
    'classname' => 'Segment',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Segment',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Service' => 
  array (
    'type' => 'class',
    'classname' => 'Service',
    'isabstract' => true,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Service',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\ServiceFactory' => 
  array (
    'type' => 'class',
    'classname' => 'ServiceFactory',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\ServiceFactory',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Template' => 
  array (
    'type' => 'class',
    'classname' => 'Template',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Template',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Topic' => 
  array (
    'type' => 'class',
    'classname' => 'Topic',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Topic',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Service\\Webhook' => 
  array (
    'type' => 'class',
    'classname' => 'Webhook',
    'isabstract' => false,
    'namespace' => 'Resend\\Service',
    'extends' => 'ResendWP\\Resend\\Service\\Webhook',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Template' => 
  array (
    'type' => 'class',
    'classname' => 'Template',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Template',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Topic' => 
  array (
    'type' => 'class',
    'classname' => 'Topic',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Topic',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Transporters\\HttpTransporter' => 
  array (
    'type' => 'class',
    'classname' => 'HttpTransporter',
    'isabstract' => false,
    'namespace' => 'Resend\\Transporters',
    'extends' => 'ResendWP\\Resend\\Transporters\\HttpTransporter',
    'implements' => 
    array (
      0 => 'Resend\\Contracts\\Transporter',
    ),
  ),
  'Resend\\ValueObjects\\ApiKey' => 
  array (
    'type' => 'class',
    'classname' => 'ApiKey',
    'isabstract' => false,
    'namespace' => 'Resend\\ValueObjects',
    'extends' => 'ResendWP\\Resend\\ValueObjects\\ApiKey',
    'implements' => 
    array (
      0 => 'Resend\\Contracts\\Stringable',
    ),
  ),
  'Resend\\ValueObjects\\ResourceUri' => 
  array (
    'type' => 'class',
    'classname' => 'ResourceUri',
    'isabstract' => false,
    'namespace' => 'Resend\\ValueObjects',
    'extends' => 'ResendWP\\Resend\\ValueObjects\\ResourceUri',
    'implements' => 
    array (
      0 => 'Resend\\Contracts\\Stringable',
    ),
  ),
  'Resend\\ValueObjects\\Transporter\\BaseUri' => 
  array (
    'type' => 'class',
    'classname' => 'BaseUri',
    'isabstract' => false,
    'namespace' => 'Resend\\ValueObjects\\Transporter',
    'extends' => 'ResendWP\\Resend\\ValueObjects\\Transporter\\BaseUri',
    'implements' => 
    array (
      0 => 'Resend\\Contracts\\Stringable',
    ),
  ),
  'Resend\\ValueObjects\\Transporter\\Headers' => 
  array (
    'type' => 'class',
    'classname' => 'Headers',
    'isabstract' => false,
    'namespace' => 'Resend\\ValueObjects\\Transporter',
    'extends' => 'ResendWP\\Resend\\ValueObjects\\Transporter\\Headers',
    'implements' => 
    array (
    ),
  ),
  'Resend\\ValueObjects\\Transporter\\Payload' => 
  array (
    'type' => 'class',
    'classname' => 'Payload',
    'isabstract' => false,
    'namespace' => 'Resend\\ValueObjects\\Transporter',
    'extends' => 'ResendWP\\Resend\\ValueObjects\\Transporter\\Payload',
    'implements' => 
    array (
    ),
  ),
  'Resend\\Webhook' => 
  array (
    'type' => 'class',
    'classname' => 'Webhook',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\Webhook',
    'implements' => 
    array (
    ),
  ),
  'Resend\\WebhookSignature' => 
  array (
    'type' => 'class',
    'classname' => 'WebhookSignature',
    'isabstract' => false,
    'namespace' => 'Resend',
    'extends' => 'ResendWP\\Resend\\WebhookSignature',
    'implements' => 
    array (
    ),
  ),
  'GuzzleHttp\\ClientTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'ClientTrait',
    'namespace' => 'GuzzleHttp',
    'use' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\ClientTrait',
    ),
  ),
  'GuzzleHttp\\Psr7\\MessageTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'MessageTrait',
    'namespace' => 'GuzzleHttp\\Psr7',
    'use' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\Psr7\\MessageTrait',
    ),
  ),
  'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'StreamDecoratorTrait',
    'namespace' => 'GuzzleHttp\\Psr7',
    'use' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\Psr7\\StreamDecoratorTrait',
    ),
  ),
  'Monolog\\Handler\\FormattableHandlerTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'FormattableHandlerTrait',
    'namespace' => 'Monolog\\Handler',
    'use' => 
    array (
      0 => 'ResendWP\\Monolog\\Handler\\FormattableHandlerTrait',
    ),
  ),
  'Monolog\\Handler\\ProcessableHandlerTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'ProcessableHandlerTrait',
    'namespace' => 'Monolog\\Handler',
    'use' => 
    array (
      0 => 'ResendWP\\Monolog\\Handler\\ProcessableHandlerTrait',
    ),
  ),
  'Monolog\\Handler\\WebRequestRecognizerTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'WebRequestRecognizerTrait',
    'namespace' => 'Monolog\\Handler',
    'use' => 
    array (
      0 => 'ResendWP\\Monolog\\Handler\\WebRequestRecognizerTrait',
    ),
  ),
  'Psr\\Log\\LoggerAwareTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'LoggerAwareTrait',
    'namespace' => 'Psr\\Log',
    'use' => 
    array (
      0 => 'ResendWP\\Psr\\Log\\LoggerAwareTrait',
    ),
  ),
  'Psr\\Log\\LoggerTrait' => 
  array (
    'type' => 'trait',
    'traitname' => 'LoggerTrait',
    'namespace' => 'Psr\\Log',
    'use' => 
    array (
      0 => 'ResendWP\\Psr\\Log\\LoggerTrait',
    ),
  ),
  'GuzzleHttp\\BodySummarizerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BodySummarizerInterface',
    'namespace' => 'GuzzleHttp',
    'extends' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\BodySummarizerInterface',
    ),
  ),
  'GuzzleHttp\\ClientInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ClientInterface',
    'namespace' => 'GuzzleHttp',
    'extends' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\ClientInterface',
    ),
  ),
  'GuzzleHttp\\Cookie\\CookieJarInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CookieJarInterface',
    'namespace' => 'GuzzleHttp\\Cookie',
    'extends' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\Cookie\\CookieJarInterface',
    ),
  ),
  'GuzzleHttp\\Exception\\GuzzleException' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GuzzleException',
    'namespace' => 'GuzzleHttp\\Exception',
    'extends' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\Exception\\GuzzleException',
    ),
  ),
  'GuzzleHttp\\Handler\\CurlFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CurlFactoryInterface',
    'namespace' => 'GuzzleHttp\\Handler',
    'extends' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\Handler\\CurlFactoryInterface',
    ),
  ),
  'GuzzleHttp\\MessageFormatterInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MessageFormatterInterface',
    'namespace' => 'GuzzleHttp',
    'extends' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\MessageFormatterInterface',
    ),
  ),
  'GuzzleHttp\\Promise\\PromiseInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PromiseInterface',
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\Promise\\PromiseInterface',
    ),
  ),
  'GuzzleHttp\\Promise\\PromisorInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PromisorInterface',
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\Promise\\PromisorInterface',
    ),
  ),
  'GuzzleHttp\\Promise\\TaskQueueInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TaskQueueInterface',
    'namespace' => 'GuzzleHttp\\Promise',
    'extends' => 
    array (
      0 => 'ResendWP\\GuzzleHttp\\Promise\\TaskQueueInterface',
    ),
  ),
  'Monolog\\Formatter\\FormatterInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FormatterInterface',
    'namespace' => 'Monolog\\Formatter',
    'extends' => 
    array (
      0 => 'ResendWP\\Monolog\\Formatter\\FormatterInterface',
    ),
  ),
  'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ActivationStrategyInterface',
    'namespace' => 'Monolog\\Handler\\FingersCrossed',
    'extends' => 
    array (
      0 => 'ResendWP\\Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface',
    ),
  ),
  'Monolog\\Handler\\FormattableHandlerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FormattableHandlerInterface',
    'namespace' => 'Monolog\\Handler',
    'extends' => 
    array (
      0 => 'ResendWP\\Monolog\\Handler\\FormattableHandlerInterface',
    ),
  ),
  'Monolog\\Handler\\HandlerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HandlerInterface',
    'namespace' => 'Monolog\\Handler',
    'extends' => 
    array (
      0 => 'ResendWP\\Monolog\\Handler\\HandlerInterface',
    ),
  ),
  'Monolog\\Handler\\ProcessableHandlerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProcessableHandlerInterface',
    'namespace' => 'Monolog\\Handler',
    'extends' => 
    array (
      0 => 'ResendWP\\Monolog\\Handler\\ProcessableHandlerInterface',
    ),
  ),
  'Monolog\\Processor\\ProcessorInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProcessorInterface',
    'namespace' => 'Monolog\\Processor',
    'extends' => 
    array (
      0 => 'ResendWP\\Monolog\\Processor\\ProcessorInterface',
    ),
  ),
  'Monolog\\ResettableInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResettableInterface',
    'namespace' => 'Monolog',
    'extends' => 
    array (
      0 => 'ResendWP\\Monolog\\ResettableInterface',
    ),
  ),
  'Psr\\Http\\Client\\ClientExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ClientExceptionInterface',
    'namespace' => 'Psr\\Http\\Client',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Client\\ClientExceptionInterface',
    ),
  ),
  'Psr\\Http\\Client\\ClientInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ClientInterface',
    'namespace' => 'Psr\\Http\\Client',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Client\\ClientInterface',
    ),
  ),
  'Psr\\Http\\Client\\NetworkExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NetworkExceptionInterface',
    'namespace' => 'Psr\\Http\\Client',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Client\\NetworkExceptionInterface',
    ),
  ),
  'Psr\\Http\\Client\\RequestExceptionInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestExceptionInterface',
    'namespace' => 'Psr\\Http\\Client',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Client\\RequestExceptionInterface',
    ),
  ),
  'Psr\\Http\\Message\\RequestFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\RequestFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\ResponseFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResponseFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\ResponseFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\ServerRequestFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ServerRequestFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\ServerRequestFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\StreamFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StreamFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\StreamFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\UploadedFileFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UploadedFileFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\UploadedFileFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\UriFactoryInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UriFactoryInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\UriFactoryInterface',
    ),
  ),
  'Psr\\Http\\Message\\MessageInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MessageInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\MessageInterface',
    ),
  ),
  'Psr\\Http\\Message\\RequestInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RequestInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\RequestInterface',
    ),
  ),
  'Psr\\Http\\Message\\ResponseInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResponseInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\ResponseInterface',
    ),
  ),
  'Psr\\Http\\Message\\ServerRequestInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ServerRequestInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\ServerRequestInterface',
    ),
  ),
  'Psr\\Http\\Message\\StreamInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StreamInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\StreamInterface',
    ),
  ),
  'Psr\\Http\\Message\\UploadedFileInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UploadedFileInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\UploadedFileInterface',
    ),
  ),
  'Psr\\Http\\Message\\UriInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UriInterface',
    'namespace' => 'Psr\\Http\\Message',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Http\\Message\\UriInterface',
    ),
  ),
  'Psr\\Log\\LoggerAwareInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LoggerAwareInterface',
    'namespace' => 'Psr\\Log',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Log\\LoggerAwareInterface',
    ),
  ),
  'Psr\\Log\\LoggerInterface' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LoggerInterface',
    'namespace' => 'Psr\\Log',
    'extends' => 
    array (
      0 => 'ResendWP\\Psr\\Log\\LoggerInterface',
    ),
  ),
  'Resend\\Contracts\\Client' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Client',
    'namespace' => 'Resend\\Contracts',
    'extends' => 
    array (
      0 => 'ResendWP\\Resend\\Contracts\\Client',
    ),
  ),
  'Resend\\Contracts\\Resource' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Resource',
    'namespace' => 'Resend\\Contracts',
    'extends' => 
    array (
      0 => 'ResendWP\\Resend\\Contracts\\Resource',
    ),
  ),
  'Resend\\Contracts\\Stringable' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Stringable',
    'namespace' => 'Resend\\Contracts',
    'extends' => 
    array (
      0 => 'ResendWP\\Resend\\Contracts\\Stringable',
    ),
  ),
  'Resend\\Contracts\\Transporter' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Transporter',
    'namespace' => 'Resend\\Contracts',
    'extends' => 
    array (
      0 => 'ResendWP\\Resend\\Contracts\\Transporter',
    ),
  ),
);

        public function __construct()
        {
            $this->includeFilePath = __DIR__ . '/autoload_alias.php';
        }

        /**
         * @param string $class
         */
        public function autoload($class): void
        {
            if (!isset($this->autoloadAliases[$class])) {
                return;
            }
            switch ($this->autoloadAliases[$class]['type']) {
                case 'class':
                        $this->load(
                            $this->classTemplate(
                                $this->autoloadAliases[$class]
                            )
                        );
                    break;
                case 'interface':
                    $this->load(
                        $this->interfaceTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                case 'trait':
                    $this->load(
                        $this->traitTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                default:
                    // Never.
                    break;
            }
        }

        private function load(string $includeFile): void
        {
            file_put_contents($this->includeFilePath, $includeFile);
            include $this->includeFilePath;
            file_exists($this->includeFilePath) && unlink($this->includeFilePath);
        }

        /**
         * @param ClassAliasArray $class
         */
        private function classTemplate(array $class): string
        {
            $abstract = $class['isabstract'] ? 'abstract ' : '';
            $classname = $class['classname'];
            if (isset($class['namespace'])) {
                $namespace = "namespace {$class['namespace']};";
                $extends = '\\' . $class['extends'];
                $implements = empty($class['implements']) ? ''
                : ' implements \\' . implode(', \\', $class['implements']);
            } else {
                $namespace = '';
                $extends = $class['extends'];
                $implements = !empty($class['implements']) ? ''
                : ' implements ' . implode(', ', $class['implements']);
            }
            return <<<EOD
                <?php
                $namespace
                $abstract class $classname extends $extends $implements {}
                EOD;
        }

        /**
         * @param InterfaceAliasArray $interface
         */
        private function interfaceTemplate(array $interface): string
        {
            $interfacename = $interface['interfacename'];
            $namespace = isset($interface['namespace'])
            ? "namespace {$interface['namespace']};" : '';
            $extends = isset($interface['namespace'])
            ? '\\' . implode('\\ ,', $interface['extends'])
            : implode(', ', $interface['extends']);
            return <<<EOD
                <?php
                $namespace
                interface $interfacename extends $extends {}
                EOD;
        }

        /**
         * @param TraitAliasArray $trait
         */
        private function traitTemplate(array $trait): string
        {
            $traitname = $trait['traitname'];
            $namespace = isset($trait['namespace'])
            ? "namespace {$trait['namespace']};" : '';
            $uses = isset($trait['namespace'])
            ? '\\' . implode(';' . PHP_EOL . '    use \\', $trait['use'])
            : implode(';' . PHP_EOL . '    use ', $trait['use']);
            return <<<EOD
                <?php
                $namespace
                trait $traitname { 
                    use $uses; 
                }
                EOD;
        }
    }

    spl_autoload_register([ new AliasAutoloader(), 'autoload' ]);
}
