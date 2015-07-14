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
                    学校名称:&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="输入文本" name="name">
                    <br /><br />
                    学历层次:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" value="本科" name="educational_level">本科
                    <input type="radio" value="独立学院" name="educational_level">独立学院
                    <input type="radio" value="高职高专" name="educational_level">高职高专
                    <input type="radio" value="其他" name="educational_level">其他
                    <br /><br />
                    学校类别:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="type">
                        <?php foreach ($category as $val):?>
                        <option value="<?php echo $val->id;?>"><?php echo $val->name;?></option>
                        <?php endforeach;?>
                    </select><br /><br />
                    特别属性:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" value="0" name="attribute[]">211
                    <input type="checkbox" value="1" name="attribute[]">985
                    <input type="checkbox" value="2" name="attribute[]">研究生院
                    <input type="checkbox" value="3" name="attribute[]">教育部直属
                    <input type="checkbox" value="4" name="attribute[]">中央部委
                    <br /><br />
                    公办民办:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" value="公办" name="public_private">公办
                    <input type="radio" value="民办" name="public_private">民办
                    <br /><br />
                    学校网址:&nbsp;&nbsp;<input type="text" value="输入文本" name="url">
                    <br /><br />
                    学校省份:&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="province_id">
                            <option value="0">请选择省份</option>
                            <?php foreach ($province as $val):?>
                            <option value="<?php echo $val->id;?>"><?php echo $val->name;?></option>
                            <?php endforeach;?>
                        </select>
                    <br /><br />
                    学校地址:&nbsp;&nbsp;<input type="text" value="输入文本" name="address">
                    <br /><br />
                    学校地址地图坐标:&nbsp;&nbsp;<input type="text" value="输入文本" name="latlng">
                    <br /><br />
                    qq:&nbsp;&nbsp;<input type="text" value="输入文本" name="qq">
                    <input type="button" value="添加qq">
                    <br /><br />
                    学校电话:&nbsp;*<textarea name="mobile">输入文本...</textarea>
                    <br /><br />
                    学校logo:&nbsp;*<input type="text" value="输入文本" name="logo">
                    <input type="submit" value="上传文件">
                    <br /><br />
                    学校简介:<br />
                    <textarea name="introduction">输入文本...</textarea>
                    <br /><br />
                    收费标准:<br />
                    <textarea name="charge_standard">输入文本...</textarea>
                    <br /><br />
                    招生代码:<br />
                    <textarea name="enrollment_code">输入文本...</textarea>
                    <br /><br />
                    招生章程:<br />
                    <textarea name="employment_prospects">输入文本...</textarea>
                    <br /><br />
                    就业前景:<br />
                    <textarea name="feature">输入文本...</textarea>
                    <br /><br />
                    是否推荐:<input type="checkbox" name="is_recommend" value="1">推荐
                    <br /><br />
                    优先展现权值:&nbsp;&nbsp;<select name="priority_weight">   默认取值0，取值范围0到9，值越大，排序越考前
                    <option value="0" selected="">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select><br /><br />
                    <input type="hidden" name="id" value="">
                    <input type="submit" value="提交" style="width: 100px;">
                </form>
            </div>
        </td>
    </tr>
</table>
</body>
</html>