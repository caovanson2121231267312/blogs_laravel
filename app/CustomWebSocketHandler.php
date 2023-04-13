<?php

namespace App;

use BeyondCode\LaravelWebSockets\WebSockets\WebSocketHandler;
use Ratchet\ConnectionInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;
use Illuminate\Support\Facades\Log;
use BeyondCode\LaravelWebSockets\Apps\App;

class CustomWebSocketHandler implements MessageComponentInterface
{
    public $client = [];

    public function __construct()
    {
        $this->client = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $connection)
    {
        $socketId = sprintf('%d.%d', random_int(1, 1000000000), random_int(1, 1000000000));
        $connection->socketId = $socketId;
        $connection->app = App::findById(env('PUSHER_APP_ID'));
        $this->client->attach($connection);
        Log::info("đã kết nối");
        $connection->send(json_encode(['type' => 'socket_id', 'data' => ['socket_id' => $socketId]]));
    }

    public function onClose(ConnectionInterface $connection)
    {
        Log::warning("Ngắt kết nối");
        $this->client->detach($connection);
    }

    public function onError(ConnectionInterface $connection, \Exception $e)
    {
        Log::error("Lỗi kết nối");
        Log::error($e);
        Log::error("Lỗi kết nối 123");
        $connection->close();
    }

    public function onMessage(ConnectionInterface $connection, $payload)
    {
        Log::notice("đang gửi tin");
        Log::notice($payload);

        foreach ($this->client as $conn) {
            if ($connection->socketId == $conn->socketId) {
                $conn->send($payload);
            }
        }
    }
}
