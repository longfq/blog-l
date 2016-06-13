<?php if (!defined('THINK_PATH')) exit();?> <script>
      $(function () {
        $('#edit').froalaEditor({
            heightMin: 230,
//            heightMax: 800,
            theme: 'royal'
        });
    });

    </script>
    <script>
      $(function(){
        $('#edit')
          .on('froalaEditor.initialized', function (e, editor) {
            $('#edit').parents('form').on('submit', function () {
              console.log($('#edit').val());
              return false;
            })
          })
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null, })

      });
      $('#ch').click(function() {
      $('.table-list').load("<?php echo U('listblog');?>");
});
       $('#oth').click(function() {
       $('.oth').load("<?php echo U('other');?>");
       });
  </script>
<div class="blo">
  <ul class="nav nav-tabs" role="tablist" >

    <li role="presentation" ><a href="#addblog" aria-controls="addblog" role="tab" data-toggle="tab">添加博客</a></li>
    <li role="presentation"><a href="#changeblog" id='ch' aria-controls="changeblog" role="tab" data-toggle="tab">查看修改</a></li>
    <li role="presentation"><a href="#deleteblog" id="oth" aria-controls="deleteblog" role="tab" data-toggle="tab">blog回收</a></li>
  </ul>

  <script>
    function InputCheck(AddbForm)
{
    if (AddbForm.title.value == "")
    {
        alert("标题不能为空!");
        AddbForm.title.focus();
        return (false);
    }
    if (AddbForm.edit.value == "")
    {
        alert("内容不能为空!");
        AddbForm.edit.focus();
        return (false);
    }
}
  </script>

  <div class="tab-content">

    <div role="tabpanel" class="tab-pane" id="addblog">
    <div id="editor" >
    <div class="addb">
<fieldset>

    <form action="<?php echo U('addblog');?>" method="post" name="addblog" onSubmit="return InputCheck(this)">
    <div class="tit">
    <input class="title form-control" name="title" id="title" type="text" placeholder="Type title"></input>
    </div>
    <div class="text">
      <textarea id='edit' class="edit" name="edit" style="margin-top: 10px;" placeholder="Type some text,write down somthing you just want to record">

      </textarea>
      </div>


      <div class="se">
        <button type="submit" class="btn btn-default" name="btn">确认发表</button>


        <select name="tag" id = "tag" class="tag form-control pull-left">
          <option name="0" value="NoTag">--未分类--</option>
          <option name='1' value="JavaScript">JavaScript</option>
          <option name='2' value="PHP">PHP</option>
          <option name='3' value="HTML/CSS">HTML/CSS</option>
          <option name='4' value="Essay">随笔</option>
          <option name='5' value="Other">其他</option>
        </select>

      </div>
    </form>
    </fieldset>
  </div>
  </div>

  </div>
    <div role="tabpanel" class="tab-pane" id="changeblog">
        <div class="table-list">
        <!--   <tr>
            <th>ID</th>
            <th>标题</th>
            <th>分类</th>
            <th>发布时间</th>
            <th>操作</th>
          </tr>
          <tr class="ww">
       </tr> -->

      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="deleteblog">
      <div class="oth"></div>
    </div>
  </div>
  </div>


<!--  -->


<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CKEditor</title>
        <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
    </head>
    <body>
        <textarea name="editor1"></textarea>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
    </body>
</html> -->