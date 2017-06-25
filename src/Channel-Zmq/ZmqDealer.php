<?php

namespace Dazzle\ChannelZmq;

use Dazzle\Channel\Model\ModelInterface;

class ZmqDealer extends ZmqModel implements ModelInterface
{
    /**
     * @return int
     */
    protected function getSocketType()
    {
        return \ZMQ::SOCKET_DEALER;
    }

    /**
     * @param string[] $multipartMessage
     * @return string[]
     */
    protected function parseBinderMessage($multipartMessage)
    {
        $id = $multipartMessage[1];
        $type = $multipartMessage[2];
        $message = array_slice($multipartMessage, 3);

        return [ $id, $type, $message ];
    }

    /**
     * @param string[] $multipartMessage
     * @return string[]
     */
    protected function parseConnectorMessage($multipartMessage)
    {
        $id = $multipartMessage[1];
        $type = $multipartMessage[2];
        $message = array_slice($multipartMessage, 3);

        return [ $id, $type, $message ];
    }

    /**
     * @param string $id
     * @param string $type
     * @return string[]
     */
    protected function prepareBinderMessage($id, $type)
    {
        return [ $id, $this->id, $type ];
    }

    /**
     * @param string $id
     * @param string $type
     * @return string[]
     */
    protected function prepareConnectorMessage($id, $type)
    {
        return [ $id, $this->id, $type ];
    }
}
