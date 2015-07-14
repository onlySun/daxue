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
            color:black;
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
        .list td {
            width: 8%;
            text-align: center;
            border: 1px solid black
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
        <form method="get" action="">
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
            学校分数线管理
        </div>
        <br />
        <?php if (!empty($university)):?>
        <div>筛选条件</div>
        <br />
        <div>
            <div style="float: left">学生省份：</div>
            <div style="float: left; width: 70%">
                <a href="<?php echo $uri.$is_query.'province_id=';?>">全部</a>
                <?php foreach ($province as $val):?>
                <span><a href="<?php echo $uri.$is_query.'province_id='.$val->id;?>"><?php echo $val->name;?></a></span>
                <?php endforeach;?>
            </div>
        </div>
        <br />
        <div>
            <div style="float: left">年份：</div>
            <div style="float: left; margin-left: 30px;">
                <a href="<?php echo $uri.$is_query.'year=';?>">全部</a>
                <?php for ($i = date('Y'); $i > date('Y')-10; $i--):?>
                <span><a href="<?php echo $uri.$is_query.'year='.$i;?>"><?php echo $i;?></a></span>
                <?php endfor;?>
            </div>
        </div>
        <br />
        <div>
            <div style="float: left">考生类别：</div>
            <div style="float: left">
                <a href="<?php echo $uri.$is_query.'candidates_category';?>">全部</a>
                <span><a href="<?php echo $uri.$is_query.'candidates_category=0';?>">理科</a></span>
                <span><a href="<?php echo $uri.$is_query.'candidates_category=1';?>">文科</a></span>
            </div>
        </div>
        <br />
        <div>
            <div style="float: left">录取批次：</div>
            <div style="float: left">
                <a href="<?php echo $uri.$is_query.'admission_batch=';?>">全部</a>
                <?php foreach ($admissionArr as $key=>$val):?>
                <span><a href="<?php echo $uri.$is_query.'admission_batch='.$key;?>"><?php echo $val;?></a></span>
                <?php endforeach;?>
            </div>
        </div>
        <br /><br />
        <div class="list">
            <table style="border: 1px solid black; border-collapse:collapse;">
                <tr>
                    <td>序号</td>
                    <td>省份</td>
                    <td>年份</td>
                    <td>考生类别</td>
                    <td>录取批次</td>
                    <td>操作</td>
                </tr>
                <?php foreach($schoolScores as $val):?>
                <tr>
                    <td><?php echo $val->id;?></td>
                    <td>
                        <?php echo $province[$val->province_id-1]->name;?>
                    </td>
                    <td><?php echo $val->year;?></td>
                    <td><?php echo $val->candidates_category == 1 ? '理科' : '文科'?></td>
                    <td><?php echo $admissionArr[$val->admission_batch];?></td>
                    <td>
                        <a href="/index.php/admin/university/delSchoolScore?name=<?php echo $university[0]->name?>&id=<?php echo $val->id?>">删除</a>
                        <a href="/index.php/admin/university/delSchoolScore?name=<?php echo $university[0]->name?>&id=<?php echo $val->id?>">修改</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
        <?php if ($pages > 1):?>
            <div style="margin-top: 20px;margin-left: 100px;">
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <?php for ($i = 1; $i <= $pages; $i++):?>
                        <td><span><a href="/index.php/admin/university/schoolScoreList?page=<?php echo $i;?>"><?php echo $i;?></a></span></td>
                        <?php endfor;?>
                    </tr>
                </table>
            </div>
            <?php endif;?>
            </div>
            <?php endif;?>
    </td>
</tr>
</table>
</body>
</html>