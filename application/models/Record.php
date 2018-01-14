<?php
# Table: records
# Primary key: id
# Foreign key: composition_id
# Foreign key: album_id
# Foreign key: collective_id
# Foreign key: record_type_id
# Foreign key: file_id

class Record extends GF\Core\AbstractModel
{
    const MODEL_NAME = 'Записи';

    static $belongs_to = array(
        array('record_type'),
        array('composition'),
        array('file'),
        array('album'),
        array('collective')
    );

    static $has_many = array(
        array('musician_records')
    );
}