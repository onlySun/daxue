<?php
class CategoryModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * 查询数据
     * @param string $field
     * @param $where
     * @param int $offset
     * @param int $count
     * @return mixed
     */
    function getData($field = '*', $where = '', $offset = 0, $count = 20)
    {
        $this->db->select($field);
        if (!empty($where) && is_array($where))
        {
            foreach ($where as $key => $val)
            {
                $this->db->where($key, $val);
            }
        }
        $query = $this->db->get('category', $count, $offset);
        return $query->result();
    }
}