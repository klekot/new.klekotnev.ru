<?php
# Table: collective_musicians
# Primary key: id
# Foreign key: collective_id
# Foreign key: musician_id

class CollectiveMusician extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Коллективы по музыкантам';
    static $belongs_to = array(
        array('collective'),
        array('musician')
    );
}