<?php
namespace MDirectorTest\V1\Rpc\Ping;

class PingControllerFactory
{
    public function __invoke($controllers)
    {
        return new PingController();
    }
}
