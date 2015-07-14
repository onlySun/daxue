<!DOCTYPE html>
<html lang="en">
<head>
    <title>后台首页</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0
        }
        body, html {
            height: 100%;
            width: 100%;
            overflow: hidden;
        }
        #frametable .header {
            height: 40px;
            background: #ddd;
            border-bottom: 2px solid #999;
            text-align: center;
            line-height: 40px;
        }
        #frametable .left {
            width: 150px;
            border-right: 2px solid #999;
            background: #ddd;
            height: 100%;
        }
        span {
            width: 150px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            margin-left: 20px;
        }
        a {
            text-decoration: none;
            font-size: 14px;
        }
        .nav {
            width: 90%;
            border: 1px solid black;
            padding: 10px;
        }
        .nav input {
            margin-right: 20px;
            width: 14%;
        }
        .title {
            width: 92%;
            border: 1px solid black;
            height: 40px;
            line-height: 40px;
            text-align: center;
        }
        select {
            width: 100px;
        }
    </style>
</head>
<body style="overflow:auto;">
<table id="frametable" cellpadding="0" cellspacing="0" width="100%" height="100%" style="width: 100%;">
    <tr>
        <td colspan="2" height="40">
            <div class="header">
                大学100后台
            </div>
        </td>
    </tr>
    <tr>
        <td valign="top" width="150" height="100%"> <!--这个高度很重要-->
            <div class="left">
                <div class="divdom">
                    <h3><span>专业目录</span></h3>
                    <ul>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/professional/add">添加专业</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/professional/list">专业管理</a></span></li>
                    </ul>
                </div>
                <div>
                    <h3><span>学校管理</span></h3>
                    <ul>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/add">添加学校</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/scoreAdd">添加专业分数线</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/scoreList">专业分数线管理</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/professionalAdd">添加专业</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/professionalList">专业管理</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/projectAdd">添加招生计划</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/projectList">招生计划管理</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/picAdd">添加图片</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/picList">图片管理</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/demeanorAdd">添加学子风采</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/demeanorList">学子风采管理</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/commentList">评论管理</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/schoolScoreAdd">添加学校分数线</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/university/schoolScoreList">学校分数线管理</a></span></li>
                    </ul>
                </div>
                <div>
                    <h3><span>高考批次线</span></h3>
                    <ul>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/score/add">添加高考批次线</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/score/update">修改高考批次线</a></span></li>
                    </ul>
                </div>
                <div>
                    <h3><span>友情链接</span></h3>
                    <ul>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/link/add">添加友情链接</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/link/list">友情链接管理</a></span></li>
                    </ul>
                </div>
                <div>
                    <h3><span>广告位</span></h3>
                    <ul>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/adv/add">添加广告位</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/adv/list">广告位管理</a></span></li>
                    </ul>
                </div>
                <div>
                    <h3><span>数据管理</span></h3>
                    <ul>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/data/copy">数据备份</a></span></li>
                        <li><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/data/recover">数据恢复</a></span></li>
                    </ul>
                </div>
                <div>
                    <h3><span><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/index/system">系统设置</a></span></h3>
                </div>
                <div style="height: 30px;"></div>
            </div>
        </td>
        <td valign="top" width="100%" height="100%">
            <div style="margin-left: 150px;">
                <br />
                <form method="post" action="">
                    <input type="text" value="<?php echo !empty($university[0]->name) ? $university[0]->name : '';?>" name="name">
                    <input type="submit" value="搜索学校">
                </form>
                <br /><br />
                <div>
                    你现在选择的学校是：<?php echo !empty($university[0]->name) ? $university[0]->name : '';?>
                </div>
                <br />
                <div class="nav">
                    <input type="button" value="专业管理">
                    <input type="button" value="添加专业">
                    <input type="button" value="招生计划管理">
                    <input type="button" value="添加招生计划">
                    <input type="button" value="学子风采管理">
                    <input type="button" value="添加学子风采">
                    <div style="margin-top: 10px;">
                        <input type="button" value="校园风光管理">
                        <input type="button" value="添加校园风光">
                        <input type="button" value="评论管理">
                        <input type="button" value="专业分数线管理">
                        <input type="button" value="添加专业分数线">
                    </div>
                </div>
                <br />
                <div class="title">
                    添加学校分数线
                </div>
                <?php if (!empty($university)):?>
                <form method="post" action="unScoreAddAct">
                    <br /><br />
                    学生省份：*
                    <select name="province_id">
                        <option value="0">请选择省份</option>
                        <?php foreach ($province as $val):?>
                        <option value="<?php echo $val->id;?>" <?php echo (isset($unScoreInfo->province_id) && $unScoreInfo->province_id == $val->id) ? "selected" : ''?>><?php echo $val->name;?></option>
                        <?php endforeach;?>
                    </select>
                    <br /><br />
                    年份：*
                    <select name="year">
                        <?php for ($i = date('Y'); $i > date('Y')-10; $i--):?>
                        <option value="<?php echo $i;?>" <?php echo (isset($unScoreInfo->year) && $unScoreInfo->year == $i) ? "selected" : ''?>><?php echo $i;?></option>
                        <?php endfor;?>
                    </select>
                    <br /><br />
                    考生类别：*
                    <select name="candidates_category">
                        <option value="-1">全部</option>
                        <option value="0" <?php echo isset($unScoreInfo->candidates_category) && $unScoreInfo->candidates_category == 0 ? "selected" : ''?>>理科</option>
                        <option value="1" <?php echo isset($unScoreInfo->candidates_category) && $unScoreInfo->candidates_category == 1 ? "selected" : ''?>>文科</option>
                    </select>
                    <br /><br />
                    录取批次：*
                    <select name="admission_batch">
                        <option value="0" <?php echo isset($unScoreInfo->admission_batch) && $unScoreInfo->admission_batch == 0 ? "selected" : ''?>>第一批</option>
                        <option value="1" <?php echo isset($unScoreInfo->admission_batch) && $unScoreInfo->admission_batch == 1 ? "selected" : ''?>>第二批</option>
                        <option value="2" <?php echo isset($unScoreInfo->admission_batch) && $unScoreInfo->admission_batch == 2 ? "selected" : ''?>>第三批</option>
                        <option value="3" <?php echo isset($unScoreInfo->admission_batch) && $unScoreInfo->admission_batch == 3 ? "selected" : ''?>>专科</option>
                        <option value="4" <?php echo isset($unScoreInfo->admission_batch) && $unScoreInfo->admission_batch == 4 ? "selected" : ''?>>提前</option>
                    </select>
                    <br /><br />
                    最低分：
                    <input type="text" value="<?php echo isset($unScoreInfo->min_score) && !empty($unScoreInfo->min_score) ? $unScoreInfo->min_score : ''?>" name="min_score">
                    <br /><br />
                    最高分：
                    <input type="text" value="<?php echo isset($unScoreInfo->max_score) && !empty($unScoreInfo->max_score) ? $unScoreInfo->max_score : ''?>" name="max_score">
                    <br /><br />
                    平均分：
                    <input type="text" value="<?php echo isset($unScoreInfo->avg_score) && !empty($unScoreInfo->avg_score) ? $unScoreInfo->avg_score : ''?>" name="avg_score">
                    <br /><br /><br />
                    <input type="hidden" value="<?php echo !empty($unScoreInfo->id) ? $unScoreInfo->id : ''?>" name="id">
                    <input type="hidden" value="<?php echo !empty($university[0]->id) ? $university[0]->id : '';?>" name="university_id">
                    <input type="hidden" value="<?php echo !empty($university[0]->name) ? $university[0]->name : '';?>" name="university_name">
                    <div>
                        <input type="submit" value="确认" style="width: 100px; margin-left: 200px;">
                    </div>
                </form>
                <?php endif;?>
            </div>
        </td>
    </tr>
</table>
</body>
</html>