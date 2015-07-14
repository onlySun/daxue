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
        .list td {
            text-align: center;
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
        <td valign="top" width="100%" height="100%" style="margin-left: auto;">
            <div style="margin-left: 400px;">
                <div style="margin-top: 20px;">
                    <form action="" method="get">
                        <input type="text" name="professional" value="<?php echo $professional;?>">
                        <input type="submit" value="搜索专业">
                    </form>
                </div>
                <div class="list" style="margin-top: 20px;">
                    <?php if (!empty($list)):?>
                    <table cellpadding="2" cellspacing="0" border="">
                        <tr>
                            <td>序号</td>
                            <td>专业名称</td>
                            <td>编辑</td>
                            <td>删除</td>
                        </tr>
                        <?php foreach ($list as $val):?>
                        <tr>
                            <td><?php echo $val->id;?></td>
                            <td><?php echo $val->name;?></td>
                            <td><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/professional/add?type=up&id=<?php echo $val->id;?>">编辑</a></td>
                            <td><a href="javascript:" onclick="del(<?php echo $val->id;?>)">删除</a></td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                    <?php else: ?>
                        没有该专业
                    <?php endif;?>
                </div>
                <?php if ($pages > 1):?>
                <div style="margin-top: 20px;margin-left: 60px;">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <?php for ($i = 1; $i <= $pages; $i++):?>
                            <td><a href="http://<?php echo $_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"]?>/index.php/admin/professional/list?page=<?php echo $i;?>"><?php echo $i;?></a></td>
                            <?php endfor;?>
                        </tr>
                    </table>
                </div>
                <?php endif;?>
            </div>
        </td>
    </tr>
</table>
<script language="JavaScript">
    function del(id)
    {
        alert(111111);
    }
</script>
</body>
</html>