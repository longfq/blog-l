<?php if (!defined('THINK_PATH')) exit();?><!--
<title>网页特效</title>
<style type="text/css">
/*tr{display:none}*/
</style>
</head>
<body>
<hr>
<table class="table table-list table-striped table-bordered" id="list">
          <tr>
            <th width="10%">ID</th>
            <th width="30%">标题</th>
            <th width="15%">分类</th>
            <th width="20%">发布时间</th>
            <th width="15%">操作</th>
          </tr>
          <tr >
          <?php if(is_array($listblog)): foreach($listblog as $key=>$v): ?><tr>
            <td width="10%" align="left"><?php echo ($v["id"]); ?></td>
            <td width="30%" align="left"><?php echo ($v["title"]); ?></td>
            <td width="15%" align="left"><?php echo ($v["tag"]); ?></td>
            <td width="18%" align="left"><?php echo ($v["createtime"]); ?></td>
            <td width="15%" align="left">
              [<a href="#">修改</a>]
              [<a href="<?php echo U('del',array('id'=>$v['id']));?>">删除</a>]
            </td>
            </tr><?php endforeach; endif; ?>
            </tr>
</table>
<div id="changpage"></div>
<script language="javascript">
var obj,j;
var page=0;
var nowPage=0;//当前页
var listNum=6;//每页显示<ul>数
var PagesLen;//总页数
var PageNum=4;//分页链接接数(5个)
onload=function(){
obj=document.getElementById("list").getElementsByTagName("tr");
j=obj.length
PagesLen=Math.ceil(j/listNum);
upPage(0)
}
function upPage(p){
nowPage=p
//内容变换
for (var i=0;i<j;i++){
obj[i].style.display="none"
}
for (var i=p*listNum;i<(p+1)*listNum;i++){
if(obj[i])obj[i].style.display="block"
}
strS='<a href="###" onclick="upPage(0)">首页</a>  '
var PageNum_2=PageNum%2==0?Math.ceil(PageNum/2)+1:Math.ceil(PageNum/2)
var PageNum_3=PageNum%2==0?Math.ceil(PageNum/2):Math.ceil(PageNum/2)+1
var strC="",startPage,endPage;
if (PageNum>=PagesLen) {startPage=0;endPage=PagesLen-1}
else if (nowPage<PageNum_2){startPage=0;endPage=PagesLen-1>PageNum?PageNum:PagesLen-1}//首页
else {startPage=nowPage+PageNum_3>=PagesLen?PagesLen-PageNum-1: nowPage-PageNum_2+1;var t=startPage+PageNum;endPage=t>PagesLen?PagesLen-1:t}
for (var i=startPage;i<=endPage;i++){
 if (i==nowPage)strC+='<a href="###" style="color:red;font-weight:700;" onclick="upPage('+i+')">'+(i+1)+'</a> '
 else strC+='<a href="###" onclick="upPage('+i+')">'+(i+1)+'</a> '
}
strE=' <a href="###" onclick="upPage('+(PagesLen-1)+')">尾页</a>  '
strE2=nowPage+1+"/"+PagesLen+"页"+"  共"+j+"条"
document.getElementById("changpage").innerHTML=strS+strC+strE+strE2
}
</script>
 -->