<?php
namespace Rxnet\Serializer;

class Serialize implements Serializer
{
    public function serialize($data) {
        return serialize($data);
    }
    public function unserialize($data) {
        return unserialize($data);
    }
}