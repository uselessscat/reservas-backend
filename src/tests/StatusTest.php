<?php

class StatusTest extends TestCase
{
    public function testStatus()
    {
        // make the get request to /status endpoint
        $this->get('/status');

        // check that the response is OK
        $this->assertResponseStatus(200);

        // get the associative array from json response
        $jsonContent = $this->response->getData(true);

        // assert that the status is a fixed string
        $this->assertEquals(
            "The server is running &#128578",
            $jsonContent['status']
        );
    }
}
