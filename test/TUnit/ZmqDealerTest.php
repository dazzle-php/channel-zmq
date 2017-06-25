<?php

namespace Dazzle\ChannelZmq\Test\TUnit;

use Dazzle\Channel\Model\ModelInterface;
use Dazzle\ChannelZmq\ZmqDealer;
use Dazzle\ChannelZmq\ZmqModel;
use Dazzle\Loop\Loop;
use Dazzle\ChannelZmq\Test\TUnit;

class ZmqDealerTest extends TUnit
{
    /**
     * @var ZmqDealer|\PHPUnit_Framework_MockObject_MockObject
     */
    private $model;

    /**
     *
     */
    public function testApiConstrcutor_CreatesInstance()
    {
        if (!class_exists('ZMQ'))
        {
            $this->markTestSkipped('This test is not able to be run without ZMQ extension.');
        }

        $model = $this->createBinder();

        $this->assertInstanceOf(ZmqDealer::class, $model);
        $this->assertInstanceOf(ZmqModel::class, $model);
        $this->assertInstanceOf(ModelInterface::class, $model);
    }

    /**
     *
     */
    public function testApiDestrcutor_CreatesInstance()
    {
        if (!class_exists('ZMQ'))
        {
            $this->markTestSkipped('This test is not able to be run without ZMQ extension.');
        }

        $model = $this->createBinder();
        unset($model);
    }

    /**
     *
     */
    public function testProtectedApiGetSocketType_GetsSocketType()
    {
        if (!class_exists('ZMQ'))
        {
            $this->markTestSkipped('This test is not able to be run without ZMQ extension.');
        }

        $model = $this->createBinder();
        $result = $this->callProtectedMethod($model, 'getSocketType');

        $this->assertSame(\ZMQ::SOCKET_DEALER, $result);
    }

    /**
     *
     */
    public function testProtectedApiParseBinderMessage_ParsesBinderMessage()
    {
        if (!class_exists('ZMQ'))
        {
            $this->markTestSkipped('This test is not able to be run without ZMQ extension.');
        }

        $model = $this->createBinder();
        $result = $this->callProtectedMethod($model, 'parseBinderMessage', [[ 'from', 'id', 'type', 'msg1', 'msg2' ]]);

        $this->assertSame([ 'id', 'type', [ 'msg1', 'msg2' ] ], $result);
    }

    /**
     *
     */
    public function testProtectedApiParseConnectorMessage_ParsesConnectorMessage()
    {
        if (!class_exists('ZMQ'))
        {
            $this->markTestSkipped('This test is not able to be run without ZMQ extension.');
        }

        $model  = $this->createConnector();
        $result = $this->callProtectedMethod($model, 'parseConnectorMessage', [[ 'from', 'id', 'type', 'msg1', 'msg2' ]]);

        $this->assertSame([ 'id', 'type', [ 'msg1', 'msg2' ] ], $result);
    }

    /**
     *
     */
    public function testProtectedApiPrepareBinderMessage_PreparesBinderMessage()
    {
        if (!class_exists('ZMQ'))
        {
            $this->markTestSkipped('This test is not able to be run without ZMQ extension.');
        }

        $model = $this->createBinder();
        $this->setProtectedProperty($model, 'id', 'model');
        $result = $this->callProtectedMethod($model, 'prepareBinderMessage', [ 'id', 'type' ]);

        $this->assertSame([ 'id', 'model', 'type' ], $result);
    }

    /**
     *
     */
    public function testProtectedApiPrepareConnectorMessage_PreparesConnectorMessage()
    {
        if (!class_exists('ZMQ'))
        {
            $this->markTestSkipped('This test is not able to be run without ZMQ extension.');
        }

        $model = $this->createConnector();
        $this->setProtectedProperty($model, 'id', 'model');
        $result = $this->callProtectedMethod($model, 'prepareConnectorMessage', [ 'id', 'type' ]);

        $this->assertSame([ 'id', 'model', 'type' ], $result);
    }

    /**
     * @param mixed[] $params
     * @param string[]|null $methods
     * @return ZmqDealer|\PHPUnit_Framework_MockObject_MockObject
     */
    public function createConnector($params = [], $methods = [])
    {
        $params['type'] = ZmqModel::CONNECTOR;
        return $this->createModel($params, $methods);
    }

    /**
     * @param mixed[] $params
     * @param string[]|null $methods
     * @return ZmqDealer|\PHPUnit_Framework_MockObject_MockObject
     */
    public function createBinder($params = [], $methods = [])
    {
        $params['type'] = ZmqModel::BINDER;
        return $this->createModel($params, $methods);
    }

    /**
     * @param mixed[] $params
     * @param string[] $methods
     * @return ZmqDealer|\PHPUnit_Framework_MockObject_MockObject
     */
    public function createModel($params = [], $methods = [])
    {
        $params = array_merge(
            [
                'id'        => 'model',
                'endpoint'  => 'tcp://127.0.0.1:2080',
                'type'      => $params['type'],
                'host'      => 'model',

            ],
            $params
        );

        $methods = array_merge(
            [
                'removeEventListener'
            ],
            $methods
        );

        $loop  = $this->getMock(Loop::class, $methods, [], '', false);
        $model = $this->getMock(ZmqDealer::class, $methods, [ $loop, $params ], '', false);
        $model
            ->expects($this->any())
            ->method('removeEventListener');

        $this->model = $model;

        return $model;
    }

    /**
     * @param string[]|null $methods
     * @return Loop|\PHPUnit_Framework_MockObject_MockObject
     */
    public function createLoop($methods = null)
    {
        $mock = $this->getMock(Loop::class, $methods, [], '', false);

        $this->setProtectedProperty($this->model, 'loop', $mock);

        return $mock;
    }
}
