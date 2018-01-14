<?php
# Table: collectives
# Primary key: id

class Collective extends \GF\Core\AbstractModel
{
    const MODEL_NAME = 'Коллективы';

    static $has_many = array(
        'collective_musicians',
        array('persons', 'through' => 'collective_musicians'),
        array('records')
    );
}