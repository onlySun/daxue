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
            <div style="margin-left: 300px;">
                <form method="post" action="actAdd">
                    <br />
                    专业名称:&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo isset($proInfo[0]->name) ? $proInfo[0]->name : '输入文本';?>" name="name"><br />
                    <br />
                    专业层次:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="本科" name="type" <?php echo (isset($proInfo[0]->type) && ($proInfo[0]->type) == 0) ? 'checked="checked"' : '';?>>本科
                    <input type="radio" value="专科" name="type" <?php echo (isset($proInfo[0]->type) && ($proInfo[0]->type) == 1) ? 'checked="checked"' : '';?>>专科<br />
                    <br />
                    专业代码:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo isset($proInfo[0]->code) ? $proInfo[0]->code : '输入文本';?>" name="code"><br />
                    <br />
                    专业大类代码:&nbsp;&nbsp;<input type="text" value="<?php echo isset($proInfo[0]->big_code) ? $proInfo[0]->big_code : '输入文本';?>" name="big_code"> 为空表示此专业就是专业大类<br />
                    <br />
                    专业小类代码:&nbsp;&nbsp;<input type="text" value="<?php echo isset($proInfo[0]->small_code) ? $proInfo[0]->small_code : '输入文本';?>" name="small_code"> 为空且专业大类代码不为空，则表示此专业就是专业小类<br />
                    <br />
                    就业率:&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="employment_rate" size="6">
                                <option value="95%以上" <?php echo isset($proInfo[0]->employment_rate) && ($proInfo[0]->employment_rate == 0) ? 'selected = "selected"' : ""?>>95%以上</option>
                                <option value="90%~95%" <?php echo isset($proInfo[0]->employment_rate) && ($proInfo[0]->employment_rate == 1) ? 'selected = "selected"' : ""?>>90%~95%</option>
                                <option value="80%~90%" <?php echo isset($proInfo[0]->employment_rate) && ($proInfo[0]->employment_rate == 2) ? 'selected = "selected"' : ""?>>80%~90%</option>
                                <option value="70%~80%" <?php echo isset($proInfo[0]->employment_rate) && ($proInfo[0]->employment_rate == 3) ? 'selected = "selected"' : ""?>>70%~80%</option>
                                <option value="60%~70%" <?php echo isset($proInfo[0]->employment_rate) && ($proInfo[0]->employment_rate == 4) ? 'selected = "selected"' : ""?>>60%~70%</option>
                                <option value="60%以下" <?php echo isset($proInfo[0]->employment_rate) && ($proInfo[0]->employment_rate == 5) ? 'selected = "selected"' : ""?>>60%以下</option>
                            </select><br />
                    <br />
                    就业前景:<br />
                    <textarea name="employment_prospects"><?php echo isset($proInfo[0]->employment_prospects) ? $proInfo[0]->name : '输入文本...';?></textarea><br />
                    <br />
                    工资待遇:<br />
                    <textarea name="wages"><?php echo isset($proInfo[0]->wages) ? $proInfo[0]->name : '输入文本...';?></textarea><br />
                    <br />
                    专业介绍:*<br />
                    <textarea name="professional_introduction"><?php echo isset($proInfo[0]->professional_introduction) ? $proInfo[0]->name : '输入文本...';?></textarea><br />
                    <br />
                    专业推荐级别:&nbsp;&nbsp;<select name="level">
                                    <?php for ($i = 0; $i < 10; $i++): ?>
                                    <option value="<?php echo $i?>" <?php echo (isset($proInfo[0]->level) && $proInfo[0]->level == $i) ? "selected" : ""?>><?php echo $i;?></option>
                                    <?php endfor;?>
                                </select><br />
                    <br />
                    <input type="hidden" name="id" value="<?php echo isset($proInfo[0]->id) ? $proInfo[0]->id : '';?>">
                    <input type="submit" value="提交" style="width: 100px;">
                </form>
            </div>
        </td>
    </tr>
</table>
</body>
</html>