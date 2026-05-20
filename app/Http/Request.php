<?php

namespace Body\Http;

class Request
{
	public string $method;
	public string $protocol;
	public function __construct(string $method, string $protocol)
	{
		$this->method = $method;
		$this->protocol = $protocol;
	}
}