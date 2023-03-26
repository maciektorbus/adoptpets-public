<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactTest extends TestCase {

	public function test_contact_page_is_displayed() {
		$response = $this->get('/contact');
		$response->assertOk();
	}
}
