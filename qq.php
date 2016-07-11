
<style>
*{ margin:0; padding:0; list-style:none}
img{ border:0;}
.lanrenzhijia_service{ width:40px; height:200px; background:url('/tengyu/public/images/IM.png') no-repeat; position:fixed; right:0px; top:200px;}
.lanrenzhijia_service ul{ display:block; width:160px; height:200px; float:left; position:relative;}
.lanrenzhijia_service ul .right_bar{ position:absolute;width:40px; height:200px; left:0; top:0; display:block;}
.lanrenzhijia_service ul .right_qq{ position:absolute; width:120px; height:85px; right:0; top:0; display:block;}
.lanrenzhijia_service ul .right_phone{ position:absolute; width:120px; height:105px; padding-top:10px;right:0; bottom:0; display:block; text-align:center; color:#555; font-size:16px; font-family:'Microsoft Yahei'; text-decoration:none;}
</style>
<div class="lanrenzhijia_service">
  <ul>
    <span class="right_bar"></span>
    <a href="http://wpa.qq.com/msgrd?v=3&uin=770218151&site=河南腾宇生物科技有限公司&Menu=yes" class="right_qq"></a>
    <span class="right_phone"><a href="http://wpa.qq.com/msgrd?v=3&uin=294644634&site=河南腾宇生物科技有限公司&Menu=yes" class="right_qq" ></a></span>
  </ul>
</div>

<script>
        $(function(){
            $(".lanrenzhijia_service").hover(function(){
                $(this).animate({width:'160px'});
	},function(){
                $(this).animate({width:'40px'});
	});
        });
</script>