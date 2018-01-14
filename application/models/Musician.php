<?php
# Table: musicians
# Primary key: id
# Foreign key: person_id

class Musician extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Музыканты';

    static $belongs_to = array(
        array('person')
    );
}