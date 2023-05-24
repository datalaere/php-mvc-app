<?php

namespace MVC\Interfaces;

interface ModelInterface
{
    public function create(array $attributes = [], array $options = []);

    public function read($where);

    public function update(array $attributes = [], array $options = []);

    public function delete();
}