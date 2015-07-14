<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professional extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    /**
     * 专业管理页面
     */
    public function index()
    {
        $count = 1;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $count;
        $professional =  (isset($_GET['professional']) && !empty($_GET['professional'])) ? $_GET['professional'] : '';
        $where = !empty($professional) ? array('name' => $professional) : array();


        $field = 'id, name';
        $this->load->model('professionalModel');
        $data['list'] = $this->professionalModel->getData($field, $where, $offset, $count);

        $nums = $this->professionalModel->getCount();
        $data['pages'] = ceil($nums / $count);
        $data['professional'] = $professional;
        $this->load->view('admin/professional/list', $data);
    }

    public function add()
    {
        $type = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : 'add';
        $pro = array();
        if ($type == 'up')
        {
            $id = intval($_GET['id']);
            $this->load->model('professionalModel');
            $pro = $this->professionalModel->getData('*', array('id' => $id), 0, 20);
        }
        $data['proInfo'] = $pro;
        $this->load->view('admin/professional/add', $data);
    }

    public function actAdd()
    {
        $rows = array();
        $rows['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
        $rows['name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $rows['type'] = isset($_POST['type']) ? $_POST['type'] : 0;
        $rows['code'] = isset($_POST['code']) ? $_POST['code'] : 0;
        $rows['big_code'] = isset($_POST['big_code']) ? $_POST['big_code'] : 0;
        $rows['small_code'] = isset($_POST['small_code']) ? $_POST['small_code'] : 0;
        $rows['employment_rate'] = isset($_POST['employment_rate']) ? $_POST['employment_rate'] : 0;
        $rows['employment_prospects'] = isset($_POST['employment_prospects']) ? $_POST['employment_prospects'] : '';
        $rows['wages'] = isset($_POST['wages']) ? $_POST['wages'] : '';
        $rows['professional_introduction'] = isset($_POST['professional_introduction']) ? $_POST['professional_introduction'] : '';
        $rows['level'] = isset($_POST['level']) ? $_POST['level'] : 0;
        $this->load->model('professionalModel');
        if (!empty($rows['id']))
        {
            $res = $this->professionalModel->update_entry($rows);
        }
        else
        {
            $res = $this->professionalModel->insert_entry($rows);
        }
        if ($res)
        {
            echo "成功";
            redirect('admin/professional/list');
        }
    }
}
