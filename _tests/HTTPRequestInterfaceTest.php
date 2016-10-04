<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use SevenPercent\HTTPRequestInterface;
use SevenPercent\URL;

class HTTPRequestInterfaceTest extends TestCase {

	public function testBasicFunctionality() {
		$this->assertTrue(new class implements HTTPRequestInterface {
			public function setMethod(string $method) {
			}
			public function getMethod(): string {
			}
			public function setURL(URL $url) {
			}
			public function getURL(): URL {
			}
			public function setHeaders(array $headers) {
			}
			public function getHeader(string $name, string $defaultValue = NULL) {
			}
			public function setBody(string $body) {
			}
			public function getBody(): string {
			}
		} instanceof HTTPRequestInterface);
	}
}
