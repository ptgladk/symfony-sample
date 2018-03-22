<?php

namespace Tests\AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    /**
     * indexAction test
     */
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/');
        $this->assertEquals(Response::HTTP_FOUND, $client->getResponse()->getStatusCode());
        $this->assertRegExp('/\/login$/', $client->getResponse()->headers->get('location'));
    }

    /**
     * defaultAction test
     */
    public function testDefault()
    {
        $client = static::createClient();

        $client->request('GET', '/admin');
        $this->assertEquals(Response::HTTP_FOUND, $client->getResponse()->getStatusCode());
        $this->assertRegExp('/\/login$/', $client->getResponse()->headers->get('location'));
    }
}
