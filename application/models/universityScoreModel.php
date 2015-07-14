<?php
class UniversityScoreModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * 插入数据
     * @param $insertRows
     * @return mixed
     */
    function insert_entry($insertRows)
    {
        foreach ($insertRows as $key => $val)
        {
            $this->$key = $val;
        }
        $res = $this->db->insert('university_score', $this);
        return $res;
    }

    /**
     * 修改数据
     * @param $updateRows
     * @return mixed
     */
    function update_entry($updateRows)
    {
        foreach ($updateRows as $key => $val)
        {
            if ($key !== 'id')
            {
                $this->$key = $val;
            }
        }
        $res = $this->db->update('university_score', $this, array('id' => $updateRows['id']));
        return $res;
    }

    /**
     * 查询数据
     * @param string $field
     * @param $where
     * @param int $offset
     * @param int $count
     * @return mixed
     */
    function getData($field = '*', $where, $offset = 0, $count = 20)
    {
        $this->db->select($field);
        if (!empty($where) && is_array($where))
        {
            foreach ($where as $key => $val)
            {
                $this->db->where($key, $val);
            }
        }
        $query = $this->db->get('university_score', $count, $offset);
        return $query->result();
    }

    /**
     * 获取数据总量
     * @return mixed
     */
    function getCount()
    {
        return $this->db->count_all('university_score');
    }

    /**
     * 删除
     * @param string $where
     * @return mixed
     */
    function delUnScore($where = '')
    {
        return $this->db->delete('university_score', $where);
    }
}