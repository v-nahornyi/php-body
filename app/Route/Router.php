<?php

namespace Body\Route;

use Body\Http\Request;

class Router
{

	public function __construct()
	{
		$this->processMethod();
	}

	private function processMethod()
	{
		$method = $_SERVER['REQUEST_METHOD'] ?? null;
		$protocol = $_SERVER['SERVER_PROTOCOL'] ?? 'HTTP/1.1';

		switch ($method) {
			case 'GET':
			case 'POST':
			case 'PUT':
				$request = new Request($method, $protocol);
				$this->processRequest($request);
				break;
			case 'PATCH':
			case 'DELETE':
			default:
				$this->handleUnsupportedMethods($protocol);
				break;
		}
	}

	/**
	 * Return 405 HTTP code to requests with unknown methods.
	 *
	 * @param  string  $protocol
	 * @return void
	 */
	private function handleUnsupportedMethods(string $protocol)
	{
		header("$protocol 405 Method Not Allowed");
	}

	private function processRequest(Request $request)
	{

	}
}