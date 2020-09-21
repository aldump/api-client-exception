<?php declare(strict_types=1);

namespace DoclerLabs\ApiClientException;

use Psr\Http\Client\ClientExceptionInterface;

class NotFoundResponseException extends UnexpectedResponseException implements ClientExceptionInterface
{
    const STATUS_CODE = 404;

    public function __construct(string $serializedErrors = '')
    {
        parent::__construct(self::STATUS_CODE, $serializedErrors);
    }

    public function getStatusCode(): int
    {
        return self::STATUS_CODE;
    }
}