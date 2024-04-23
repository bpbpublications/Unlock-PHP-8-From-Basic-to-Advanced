<?php
class Person {
    #[Column('id', 'integer')]
    private $id;

    #[Column('name', 'string')]
    private $name;
}