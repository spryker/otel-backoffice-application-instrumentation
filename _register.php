<?php

declare(strict_types=1);

use Spryker\Shared\Opentelemetry\Instrumentation\CachedInstrumentation;
use Spryker\Shared\Opentelemetry\Request\RequestProcessor;
use Spryker\Service\OtelBackofficeApplicationInstrumentation\OpenTelemetry\BackofficeApplicationInstrumentation;

if (extension_loaded('opentelemetry') === false) {
    return;
}

BackofficeApplicationInstrumentation::register(new CachedInstrumentation(), new RequestProcessor());
