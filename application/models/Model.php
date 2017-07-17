<?php
require(dirname(__FILE__).'/Sql.php');
class Model extends Sql
{
    protected $_model;
    protected $_table;
    public static $dbConfig = [];

    public function __construct()
    {
        // 连接数据库
        $this->connect(self::$dbConfig['host'], self::$dbConfig['username'], self::$dbConfig['password'],
            self::$dbConfig['dbname']);

        // 获取数据库表名
        if (!$this->_table) {
            // 获取模型类名称
            $this->_model = get_class($this);
            // 删除类名最后的 Model 字符
            if(strstr(strtolower($this->_model),'model'))
                $this->_model = substr($this->_model, 0, -5);

            // 数据库表名与类名一致
            $this->_table = preg_replace_callback("/([A-Z])/",function($matchs){
                return '_'.strtolower($matchs[0]);
            },
            lcfirst($this->_model));
            //$this->_table = strtolower($this->_model);
        }
    }
}