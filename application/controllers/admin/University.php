<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class University extends CI_Controller
{
    public static $MAX_COUNT = 1000;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    // 添加学校页面
    public function add()
    {
        //大学学校类别
        $this->load->model('categoryModel');
        $category = $this->categoryModel->getData();

        //大学学校省份
        $this->load->model('provinceModel');
        $province = $this->provinceModel->getData();

        //todo 学校修改
//        $type = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : 'add';
//        $university = array();
//        if ($type == 'up')
//        {
//            $id = intval($_GET['id']);
//            $this->load->model('universityModel');
//            $university = $this->universityModel->getData('*', array('id' => $id), 0, 20);
//        }
//        $data['university'] = $university;
        $data['category'] = $category;
        $data['province'] = $province;
        $this->load->view('admin/school/add', $data);
    }

    // 添加修改学校action
    public function actAdd()
    {
        $rows = array();
        //学校id
        $rows['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
        //学校名称
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $rows['name'] = $name == '输入文本' ? $name : '';
        //学校类型
        $rows['type'] = isset($_POST['type']) ? $_POST['type'] : 0;
        //学历层次
        $rows['educational_level'] = isset($_POST['educational_level']) ? $_POST['educational_level'] : 0;
        //特别属性
        $attributeArr = isset($_POST['attribute']) ? $_POST['attribute'] : 0;
        $rows['attribute'] = explode(',', $attributeArr);
        //公办私办
        $rows['public_private'] = isset($_POST['public_private']) ? $_POST['public_private'] : 0;
        //学校网址
        $url = isset($_POST['url']) ? $_POST['url'] : '';
        $rows['url'] = $url == '输入文本' ? $url : '';
        //省份
        $rows['province_id'] = isset($_POST['province_id']) ? $_POST['province_id'] : 0;
        //学校地址
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $rows['address'] = $address == '输入文本' ? $address : '';
        //经纬度
        $rows['latlng'] = isset($_POST['latlng']) ? $_POST['latlng'] : '';
        //QQ
        $qq = isset($_POST['qq']) ? $_POST['qq'] : '';
        $rows['qq'] = $qq == '输入文本' ? $qq : '';
        //学校电话
        $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        $rows['mobile'] = $mobile == '输入文本' ? $mobile : '';
        //学校logo
        $logo = isset($_POST['logo']) ? $_POST['logo'] : '';
        $rows['logo'] = $logo == '输入文本' ? $logo : '';
        //学校简介
        $introduction = isset($_POST['introduction']) ? $_POST['introduction'] : '';
        $rows['introduction'] = $introduction == '输入文本' ? $introduction : '';
        //收费标准
        $charge_standard = isset($_POST['charge_standard']) ? $_POST['charge_standard'] : '';
        $rows['charge_standard'] = $charge_standard == '输入文本' ? $charge_standard : '';
        //招生代码
        $enrollment_code = isset($_POST['enrollment_code']) ? $_POST['enrollment_code'] : 0;
        $rows['enrollment_code'] = $enrollment_code == '输入文本' ? $enrollment_code : 0;
        //招生章程
        $employment_prospects = isset($_POST['employment_prospects']) ? $_POST['employment_prospects'] : '';
        $rows['employment_prospects'] = $employment_prospects == '输入文本' ? $employment_prospects : '';
        //就业前景
        $feature = isset($_POST['feature']) ? $_POST['feature'] : '';
        $rows['feature'] = $feature == '输入文本' ? $feature : '';
        //是否推荐
        $rows['is_recommend'] = isset($_POST['is_recommend']) ? $_POST['is_recommend'] : '';
        //优先展现权值
        $rows['priority_weight'] = isset($_POST['priority_weight']) ? $_POST['priority_weight'] : 0;
        $this->load->model('universityModel');
        if (!empty($rows['id']))
        {
            $res = $this->universityModel->update_entry($rows);
        }
        else
        {
            $res = $this->universityModel->insert_entry($rows);
        }
        if ($res)
        {
            echo "成功";
            redirect('admin/school/list');
        }
    }

    //添加/修改专业分数线页
    public function scoreAdd()
    {
        $name = isset($_REQUEST['name']) && !empty($_REQUEST['name']) ? $_REQUEST['name'] : '';
        //大学学校省份
        $this->load->model('provinceModel');
        $province = $this->provinceModel->getData();

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        //该大学的专业
        $professionalArr = array();
        if (isset($university[0]->id) && !empty($university[0]->id))
        {
            $id = intval($university[0]->id);
            $this->load->model('universityProfessionalModel');
            $professionalId = $this->universityProfessionalModel->getData('professional_id', array('university_id' => $id), 0, 20);
            foreach ($professionalId as $val)
            {
                $this->load->model('professionalModel');
                $professionalInfo = $this->professionalModel->getData('id,name', array('id' => $val->professional_id), 0, 1);
                $professionalArr[] = $professionalInfo[0];
            }
        }

        $type = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : 'add';
        $scoreInfo[0] = array();
        if ($type == 'up' && !empty($_GET['id']))
        {
            $id = intval($_GET['id']);
            $this->load->model('professionalScoreModel');
            $scoreInfo = $this->professionalScoreModel->getData('*', array('id' => $id), 0, 1);
        }

        $data['scoreInfo'] = $scoreInfo[0];
        $data['professionalArr'] = $professionalArr;
        $data['university'] = $university;
        $data['province'] = $province;
        $this->load->view('admin/school/score_add', $data);
    }

    //添加/修改专业分数线action
    public function scoreAddAct()
    {
        $rows = array();
        $rows['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
        $rows['province_id'] = isset($_POST['province_id']) ? $_POST['province_id'] : 0;
        $rows['year'] = isset($_POST['year']) ? $_POST['year'] : 0;
        $rows['professional_id'] = isset($_POST['professional_id']) ? $_POST['professional_id'] : 0;
        $rows['candidates_category'] = isset($_POST['candidates_category']) ? $_POST['candidates_category'] : 0;
        $rows['admission_batch'] = isset($_POST['admission_batch']) ? $_POST['admission_batch'] : 0;
        $rows['min_score'] = isset($_POST['min_score']) ? $_POST['min_score'] : 0;
        $rows['max_score'] = isset($_POST['max_score']) ? $_POST['max_score'] : 0;
        $rows['avg_score'] = isset($_POST['avg_score']) ? $_POST['avg_score'] : 0;
        $rows['university_id'] = isset($_POST['university_id']) ? $_POST['university_id'] : 0;
        $name = isset($_POST['university_name']) ? $_POST['university_name'] : '';
        $this->load->model('professionalScoreModel');
        if (!empty($rows['id']))
        {
            $res = $this->professionalScoreModel->update_entry($rows);
        }
        else
        {
            $res = $this->professionalScoreModel->insert_entry($rows);
        }
        if ($res)
        {
            echo "成功";
            redirect('admin/university/scoreList?name='.$name);
        }
    }

    //删除专业分数线
    public function delProfessionalScore()
    {
        $rows['id'] = isset($_GET['id']) ? $_GET['id'] : 0;
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $this->load->model('professionalScoreModel');
        $this->professionalScoreModel->delProfessionalScore($rows);
        redirect('admin/university/scoreList?name='.$name);
    }

    // 专业分数线列表
    public function scoreList()
    {
        $admissionArr = array('第一批', '第二批', '第三批', '专科', '提前');
        $name = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '';
        //大学学校省份
        $this->load->model('provinceModel');
        $province = $this->provinceModel->getData();

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        //该大学的专业
        $professionalArr = array();
        if (isset($university[0]->id) && !empty($university[0]->id))
        {
            $id = intval($university[0]->id);
            $this->load->model('universityProfessionalModel');
            $professionalId = $this->universityProfessionalModel->getData('professional_id', array('university_id' => $id), 0, 20);
            foreach ($professionalId as $val)
            {
                $this->load->model('professionalModel');
                $professionalInfo = $this->professionalModel->getData('id,name', array('id' => $val->professional_id), 0, 1);
                $professionalArr[] = $professionalInfo[0];
            }
        }

        $count = 20;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $count;
        $where = array();
        if (isset($_GET['province_id']) && !empty($_GET['province_id']))
        {
            $where['province_id'] = $_GET['province_id'];
        }
        if (isset($_GET['professional_id']) && !empty($_GET['professional_id']))
        {
            $where['professional_id'] = $_GET['professional_id'];
        }
        if (isset($_GET['year']) && !empty($_GET['year']))
        {
            $where['year'] = $_GET['year'];
        }
        if (isset($_GET['candidates_category']))
        {
            $where['candidates_category'] = $_GET['candidates_category'];
        }
        if (isset($_GET['admission_batch']))
        {
            $where['admission_batch'] = $_GET['admission_batch'];
        }

        $this->load->model('professionalScoreModel');
        $scores = $this->professionalScoreModel->getData('*', $where, $offset, $count);
        //获取总量
        $scoresNum = $this->professionalScoreModel->getData('id', $where, 0, self::$MAX_COUNT);
        $nums = count($scoresNum);

        $data['uri'] = $_SERVER['REQUEST_URI'];
        $data['is_query'] = empty($_SERVER['QUERY_STRING']) ? "?" : "&";
        $data['pages'] = ceil($nums / $count);
        $data['admissionArr'] = $admissionArr;
        $data['professionalScores'] = $scores;
        $data['professionalArr'] = $professionalArr;
        $data['university'] = $university;
        $data['province'] = $province;
        $this->load->view('admin/school/score_list', $data);
    }

    // 添加专业
    public function professionalAdd()
    {
        $name = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '';

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        //该大学的专业
        $professionalArr = array();
        if (isset($university[0]->id) && !empty($university[0]->id))
        {
            $this->load->model('professionalModel');
            $professionalArr = $this->professionalModel->getData('id,name', array(), 0, self::$MAX_COUNT);
        }

        $type = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : 'add';
        $unProfessional[0] = array();
        if ($type == 'up')
        {
            $id = intval($_GET['id']);
            $this->load->model('universityProfessionalModel');
            $unProfessional = $this->universityProfessionalModel->getData('*', array('id' => $id), 0, 1);
        }

        $data['unProfessional'] = $unProfessional[0];
        $data['professionalArr'] = $professionalArr;
        $data['university'] = $university;
        $this->load->view('admin/school/add_professional', $data);
    }

    // 添加/修改专业action
    public function professionalAddAct()
    {
        $rows = array();
        $rows['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
        $professional_id = isset($_POST['professional_id']) ? $_POST['professional_id'] : 0;
        $professionalArr = explode('_', $professional_id);
        $rows['professional_id'] = $professionalArr[0];
        $rows['profession_name'] = isset($_POST['profession_name']) && $_POST['profession_name'] != '输入文本...' ? $_POST['profession_name'] : $professionalArr[1];
        $rows['profession_description'] = isset($_POST['profession_description']) ? $_POST['profession_description'] : '';
        $rows['university_id'] = isset($_POST['university_id']) ? $_POST['university_id'] : 0;
        $name = isset($_POST['university_name']) ? $_POST['university_name'] : '';
        $this->load->model('universityProfessionalModel');
        if (!empty($rows['id']))
        {
            $res = $this->universityProfessionalModel->update_entry($rows);
        }
        else
        {
            $res = $this->universityProfessionalModel->insert_entry($rows);
        }
        if ($res)
        {
            echo "成功";
            redirect('admin/university/professionalList?name='.$name);
        }
    }

    //删除专业
    public function delProfessional()
    {
        $rows['id'] = isset($_GET['id']) ? $_GET['id'] : 0;
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $this->load->model('universityProfessionalModel');
        $this->universityProfessionalModel->delUnProfessional($rows);
        redirect('admin/university/professionalList?name='.$name);
    }

    //专业管理列表
    public function professionalList()
    {
        $name = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '';

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $count = 20;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $count;
        $where = array();
        $professionalList = array();
        $nums = 0;
        if (isset($university[0]->id) && !empty($university[0]->id))
        {
            $where['university_id'] = $university[0]->id;

            $this->load->model('universityProfessionalModel');
            $professionalList = $this->universityProfessionalModel->getData('*', $where, $offset, $count);
            //获取总量
            $scoresNum = $this->universityProfessionalModel->getData('id', $where, 0, self::$MAX_COUNT);
            $nums = count($scoresNum);
        }

        $data['pages'] = ceil($nums / $count);
        $data['professionalList'] = $professionalList;
        $data['university'] = $university;
        $this->load->view('admin/school/professional_list', $data);
    }

    // 添加招生计划页面
    public function projectAdd()
    {
        $name = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '';

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $type = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : 'add';
        $enProject[0] = array();
        if ($type == 'up')
        {
            $id = intval($_GET['id']);
            $this->load->model('enrollmentProjectModel');
            $enProject = $this->enrollmentProjectModel->getData('*', array('id' => $id), 0, 1);
        }

        $data['enProject'] = $enProject[0];
        $data['university'] = $university;
        $this->load->view('admin/school/add_enrollment_project', $data);
    }

    // 添加/修改招生计划action
    public function enProjectAddAct()
    {
        $rows = array();
        $rows['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
        $rows['content'] = isset($_POST['content']) ? $_POST['content'] : '';
        $rows['title'] = isset($_POST['title']) ? $_POST['title'] : '';
        $rows['university_id'] = isset($_POST['university_id']) ? $_POST['university_id'] : 0;
        $name = isset($_POST['university_name']) ? $_POST['university_name'] : '';
        $this->load->model('enrollmentProjectModel');
        if (!empty($rows['id']))
        {
            $res = $this->enrollmentProjectModel->update_entry($rows);
        }
        else
        {
            $res = $this->enrollmentProjectModel->insert_entry($rows);
        }
        if ($res)
        {
            echo "成功";
            redirect('admin/university/projectList?name='.$name);
        }
    }

    //删除招生计划
    public function delEnProject()
    {
        $rows['id'] = isset($_GET['id']) ? $_GET['id'] : 0;
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $this->load->model('enrollmentProjectModel');
        $this->enrollmentProjectModel->delEnProject($rows);
        redirect('admin/university/projectList?name='.$name);
    }

    //招生计划列表
    public function projectList()
    {
        $name = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '';

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $count = 20;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $count;
        $where = array();
        $enProjectList = array();
        $nums = 0;
        if (isset($university[0]->id) && !empty($university[0]->id))
        {
            $where['university_id'] = $university[0]->id;

            $this->load->model('enrollmentProjectModel');
            $enProjectList = $this->enrollmentProjectModel->getData('*', $where, $offset, $count);
            //获取总量
            $enProjectNum = $this->enrollmentProjectModel->getData('id', $where, 0, self::$MAX_COUNT);
            $nums = count($enProjectNum);
        }

        $data['pages'] = ceil($nums / $count);
        $data['enProjectList'] = $enProjectList;
        $data['university'] = $university;
        $this->load->view('admin/school/enrollment_project_list', $data);
    }

    // 添加学习风采页面
    public function demeanorAdd()
    {
        $name = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '';

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $type = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : 'add';
        $stDemeanor[0] = array();
        if ($type == 'up')
        {
            $id = intval($_GET['id']);
            $this->load->model('studentsElegantDemeanorModel');
            $stDemeanor = $this->studentsElegantDemeanorModel->getData('*', array('id' => $id), 0, 1);
        }

        $data['stDemeanor'] = $stDemeanor[0];
        $data['university'] = $university;
        $this->load->view('admin/school/add_students_elegant_demeanor', $data);
    }

    // 添加/修改学子风采action
    public function demeanorAddAct()
    {
        $rows = array();
        $rows['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
        $rows['content'] = isset($_POST['content']) ? $_POST['content'] : '';
        $rows['title'] = isset($_POST['title']) ? $_POST['title'] : '';
        $rows['university_id'] = isset($_POST['university_id']) ? $_POST['university_id'] : 0;
        $name = isset($_POST['university_name']) ? $_POST['university_name'] : '';
        $this->load->model('studentsElegantDemeanorModel');
        if (!empty($rows['id']))
        {
            $res = $this->studentsElegantDemeanorModel->update_entry($rows);
        }
        else
        {
            $res = $this->studentsElegantDemeanorModel->insert_entry($rows);
        }
        if ($res)
        {
            echo "成功";
            redirect('admin/university/demeanorList?name='.$name);
        }
    }

    //删除学子风采
    public function delDemeanor()
    {
        $rows['id'] = isset($_GET['id']) ? $_GET['id'] : 0;
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $this->load->model('studentsElegantDemeanorModel');
        $this->studentsElegantDemeanorModel->delStEleDemeanor($rows);
        redirect('admin/university/demeanorList?name='.$name);
    }

    //学子风采列表
    public function demeanorList()
    {
        $name = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '';

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $count = 20;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $count;
        $where = array();
        $demeanorList = array();
        $nums = 0;
        if (isset($university[0]->id) && !empty($university[0]->id))
        {
            $where['university_id'] = $university[0]->id;

            $this->load->model('studentsElegantDemeanorModel');
            $demeanorList = $this->studentsElegantDemeanorModel->getData('*', $where, $offset, $count);
            //获取总量
            $demeanorNum = $this->studentsElegantDemeanorModel->getData('id', $where, 0, self::$MAX_COUNT);
            $nums = count($demeanorNum);
        }

        $data['pages'] = ceil($nums / $count);
        $data['demeanorList'] = $demeanorList;
        $data['university'] = $university;
        $this->load->view('admin/school/students_elegant_demeanor_list', $data);
    }

    //评论管理列表
    public function commentList()
    {
        $level = array('一','二','三','四','五','六','七','八','九','十');
        $name = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '';

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $count = 20;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $count;
        $where = array();
        $commentList = array();
        $nums = 0;
        if (isset($university[0]->id) && !empty($university[0]->id))
        {
            $where['university_id'] = $university[0]->id;

            $this->load->model('commentModel');
            $commentList = $this->commentModel->getData('*', $where, $offset, $count);
            //获取总量
            $commentNum = $this->commentModel->getData('id', $where, 0, self::$MAX_COUNT);
            $nums = count($commentNum);

            $this->load->model('universityProfessionalModel');
            $professionalList = $this->universityProfessionalModel->getData('id,profession_name', $where, 0, self::$MAX_COUNT);
            $professionalArr = array();
            foreach ($professionalList as $val)
            {
                $professionalArr[$val->id] = $val->profession_name;
            }
        }

        $data['pages'] = ceil($nums / $count);
        $data['commentList'] = $commentList;
        $data['university'] = $university;
        $data['level'] = $level;
        $data['professionalArr'] = $professionalArr;
        $this->load->view('admin/school/comment_list', $data);
    }

    //删除评论
    public function delComment()
    {
        $rows['id'] = isset($_GET['id']) ? $_GET['id'] : 0;
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $this->load->model('commentModel');
        $this->commentModel->delComment($rows);
        redirect('admin/university/commentList?name='.$name);
    }

    //添加/修改学校分数线页
    public function schoolScoreAdd()
    {
        $name = isset($_REQUEST['name']) && !empty($_REQUEST['name']) ? $_REQUEST['name'] : '';
        //大学学校省份
        $this->load->model('provinceModel');
        $province = $this->provinceModel->getData();

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $type = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : 'add';
        $unScoreInfo[0] = array();
        if ($type == 'up' && !empty($_GET['id']))
        {
            $id = intval($_GET['id']);
            $this->load->model('universityScoreModel');
            $unScoreInfo = $this->universityScoreModel->getData('*', array('id' => $id), 0, 1);
        }

        $data['unScoreInfo'] = $unScoreInfo[0];
        $data['university'] = $university;
        $data['province'] = $province;
        $this->load->view('admin/school/university_score_add', $data);
    }

    //添加/修改学校分数线action
    public function unScoreAddAct()
    {
        $rows = array();
        $rows['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
        $rows[''] = isset($_POST['province_id']) ? $_POST['province_id'] : 0;
        $rows['yeprovince_idar'] = isset($_POST['year']) ? $_POST['year'] : 0;
        $rows['candidates_category'] = isset($_POST['candidates_category']) ? $_POST['candidates_category'] : 0;
        $rows['admission_batch'] = isset($_POST['admission_batch']) ? $_POST['admission_batch'] : 0;
        $rows['min_score'] = isset($_POST['min_score']) ? $_POST['min_score'] : 0;
        $rows['max_score'] = isset($_POST['max_score']) ? $_POST['max_score'] : 0;
        $rows['avg_score'] = isset($_POST['avg_score']) ? $_POST['avg_score'] : 0;
        $rows['university_id'] = isset($_POST['university_id']) ? $_POST['university_id'] : 0;
        $name = isset($_POST['university_name']) ? $_POST['university_name'] : '';
        $this->load->model('universityScoreModel');
        if (!empty($rows['id']))
        {
            $res = $this->universityScoreModel->update_entry($rows);
        }
        else
        {
            $res = $this->universityScoreModel->insert_entry($rows);
        }
        if ($res)
        {
            echo "成功";
            redirect('admin/university/schoolScoreList?name='.$name);
        }
    }

    //删除专业分数线
    public function delSchoolScore()
    {
        $rows['id'] = isset($_GET['id']) ? $_GET['id'] : 0;
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $this->load->model('universityScoreModel');
        $this->universityScoreModel->delUnScore($rows);
        redirect('admin/university/schoolScoreList?name='.$name);
    }

    // 专业分数线列表
    public function schoolScoreList()
    {
        $admissionArr = array('第一批', '第二批', '第三批', '专科', '提前');
        $name = isset($_GET['name']) && !empty($_GET['name']) ? $_GET['name'] : '';
        //大学学校省份
        $this->load->model('provinceModel');
        $province = $this->provinceModel->getData();

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $count = 20;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $count;
        $where = array();
        if (isset($_GET['province_id']) && !empty($_GET['province_id']))
        {
            $where['province_id'] = $_GET['province_id'];
        }
        if (isset($_GET['professional_id']) && !empty($_GET['professional_id']))
        {
            $where['professional_id'] = $_GET['professional_id'];
        }
        if (isset($_GET['year']) && !empty($_GET['year']))
        {
            $where['year'] = $_GET['year'];
        }
        if (isset($_GET['candidates_category']))
        {
            $where['candidates_category'] = $_GET['candidates_category'];
        }
        if (isset($_GET['admission_batch']))
        {
            $where['admission_batch'] = $_GET['admission_batch'];
        }

        $this->load->model('universityScoreModel');
        $schoolScores = $this->universityScoreModel->getData('*', $where, $offset, $count);
        //获取总量
        $schoolScoresNum = $this->universityScoreModel->getData('id', $where, 0, self::$MAX_COUNT);
        $nums = count($schoolScoresNum);

        $data['uri'] = $_SERVER['REQUEST_URI'];
        $data['is_query'] = empty($_SERVER['QUERY_STRING']) ? "?" : "&";
        $data['pages'] = ceil($nums / $count);
        $data['admissionArr'] = $admissionArr;
        $data['schoolScores'] = $schoolScores;
        $data['university'] = $university;
        $data['province'] = $province;
        $this->load->view('admin/school/university_score_list', $data);
    }

    //添加/修改图片页
    public function picAdd()
    {
        $name = isset($_REQUEST['name']) && !empty($_REQUEST['name']) ? $_REQUEST['name'] : '';

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $type = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : 'add';
        $picInfo[0] = array();

        if ($type == 'up' && !empty($_GET['id']))
        {
            $id = intval($_GET['id']);
            $this->load->model('picModel');
            $picInfo = $this->picModel->getData('*', array('id' => $id), 0, 1);
        }

        $data['picInfo'] = $picInfo[0];
        $data['university'] = $university;
        $this->load->view('admin/school/pic_add', $data);
    }

    //添加/修改图片action
    public function picAddAct()
    {
        $rows = array();

        $rows['id'] = isset($_POST['id']) ? $_POST['id'] : 0;
        $rows['university_id'] = isset($_POST['university_id']) ? $_POST['university_id'] : 0;
        $rows['type'] = isset($_POST['type']) ? $_POST['type'] : 0;
        $rows['title'] = isset($_POST['title']) ? $_POST['title'] : 0;
        $name = isset($_REQUEST['university_name']) ? $_REQUEST['university_name'] : '';
        $rows['url'] = $this->uploadImage($_FILES, $rows['id']);

        $this->load->model('picModel');
        if (!empty($rows['id']))
        {
            $res = $this->picModel->update_entry($rows);
        }
        else
        {
            $res = $this->picModel->insert_entry($rows);
        }
        if ($res)
        {
            echo "成功";
            redirect('admin/university/picList?name='.$name);
        }
    }

    //删除专业分数线
    public function delPic()
    {
        $rows['id'] = isset($_GET['id']) ? $_GET['id'] : 0;
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $this->load->model('picModel');
        $this->picModel->delPic($rows);
        redirect('admin/university/picList?name='.$name);
    }

    // 专业分数线列表
    public function picList()
    {
        $name = isset($_REQUEST['name']) && !empty($_REQUEST['name']) ? $_REQUEST['name'] : '';

        //大学信息
        $university = array();
        if (!empty($name))
        {
            $this->load->model('universityModel');
            $university = $this->universityModel->getData('*', array('name' => $name), 0, 20);
        }

        $count = 20;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $count;
        $where = array();
        if (isset($_REQUEST['university_id']) && !empty($_REQUEST['university_id']))
        {
            $where['university_id'] = $_REQUEST['university_id'];
        }
        if (isset($_REQUEST['type']) && !empty($_REQUEST['type']))
        {
            $where['type'] = $_REQUEST['type'];
        }

        $this->load->model('picModel');
        $picList = $this->picModel->getData('*', $where, $offset, $count);
        //获取总量
        $picListNum = $this->picModel->getData('id', $where, 0, self::$MAX_COUNT);
        $nums = count($picListNum);

        $data['pages'] = ceil($nums / $count);
        $data['picList'] = $picList;
        $data['university'] = $university;
        $this->load->view('admin/school/pic_list', $data);
    }

    //上传图片方法
    protected function uploadImage($files, $id)
    {
        //上传文件类型列表
        $uptypes=array(
            'image/jpg',
            'image/jpeg',
            'image/png',
            'image/pjpeg',
            'image/gif',
            'image/bmp',
            'image/x-png'
        );

        $max_file_size = 2000000;     //上传文件大小限制, 单位BYTE

        $destination_folder = str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../../views/images/')); //上传文件路径
        if (!is_uploaded_file($files['url']['tmp_name']))
        {
            echo "图片不存在";
            exit;
        }

        $file = $files['url'];
        if ($max_file_size < $file['size'])
        {
            echo "文件太大！";
            exit;
        }

        if (!in_array($file['type'], $uptypes))
        {
            echo "文件类型不符!".$file["type"];
            exit;
        }

        if(!file_exists($destination_folder))
        {
            mkdir($destination_folder);
        }

        $filename = $file["tmp_name"];
        $pinfo = pathinfo($file["name"]);
        $ftype = $pinfo['extension'];
        $url = time().".".$ftype;
        $destination = $destination_folder.'/'.$url;
        if (file_exists($destination))
        {
            echo "同名文件已经存在了";
            exit;
        }

        if(!move_uploaded_file ($filename, $destination))
        {
            echo "移动文件出错";
            exit;
        }

        return $url;
    }
}
