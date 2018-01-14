<?php
# Table: authors
# Primary key: id
# Foreign key: person_id

class Author extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Авторы';

    static $belongs_to = array(
        array('person')
    );
}