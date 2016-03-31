<?php
namespace App\Api\Models;
use Quick\Model\Model;
use Quick\Core\Cache;

class Article extends Model {

    protected static $field_type_maps = [
        'id' => 'int',
        'title' => 'str',
        'content' => 'str',
        'created' => 'int'
    ];
    
    protected static $select_fields = ['id', 'title', 'content', 'created'];
    protected static $table_name = 'articles';
    
    public function getList() {
        $conn = self::connect();
        return Cache::get('artiles', 'default', function() use ($conn) {
            $retval = $conn->select(self::getTable(NULL, 'default'),  self::$select_fields, ['id[<]' => 10]);
            
            if (!$retval) {
                return [];
            }
            
            return $this->formatRow($retval, TRUE);
        });
    }
}