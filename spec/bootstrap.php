<?php

// Used for real return type check

if (!interface_exists('Http\Client\HttpClient')) {
    eval('namespace Http\Client; interface HttpClient {}');
}

if (!interface_exists('Http\Client\HttpAsyncClient')) {
    eval('namespace Http\Client; interface HttpAsyncClient {}');
}

if (!class_exists('Http\Adapter\Guzzle6HttpAdapter')) {
    eval('namespace Http\Adapter; class Guzzle6HttpAdapter implements \Http\Client\HttpClient, \Http\Client\HttpAsyncClient {}');
}

