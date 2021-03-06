<?php

namespace Tests\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test the default controller.
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * Test the route with an authenticated user.
     */
    public function testWithAuthenticationIndex()
    {
        // Create an authenticated client
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'user1',
            'PHP_AUTH_PW' => 'Aa@123',
        ]);

        // Request the route
        $client->request('GET', '/');

        // Test
        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }
}
