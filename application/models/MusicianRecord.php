<?php
# Table: musician_records
# Primary key: id
# Foreign key: musician_id
# Foreign key: record_id
# Foreign key: instrument_id

class MusicianRecord extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Записи музыкантов';

    static $belongs_to = array(
        array('person'),
        array('record'),
        array('instrument')
    );
}