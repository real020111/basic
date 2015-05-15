<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<!--顶部搜索 start-->
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<!--顶部搜索 end-->
<!--banner幻灯片  start-->
<script type="text/javascript" src="js/index.js"></script>
<!--banner幻灯片  enf-->
<script>
/*tab切换*/
function setTab(m,n){
 var tli=document.getElementById("menu"+m).getElementsByTagName("li");
 var mli=document.getElementById("main"+m).getElementsByTagName("ol");
 for(i=0;i<tli.length;i++){
  tli[i].className=i==n?"hover":"";
  mli[i].style.display=i==n?"block":"none";
 }
}
</script>
</head>

<body>
<!--header start-->
<div class="s_header1">
  <div class="s_w1200 s_t1"> <span class="s_t1">欢迎来到游学网！</span><a class="login" href="javascript:;">登陆</a> / <a class="register" href="javascript:;">注册</a><a class="s_bg1" href="javascript:;">购物车</a></div>
</div>
<div class="s_w1200 s_pr1"> <a href="#" class="s_logo1" title="游学网"><img src="images/1411yx2fmxx_10.png" alt="游学网" /></a> <a href="#" class="s_logo2" target="_blank"><img src="images/1411yxindex_03.png" alt="" /></a>
  <dl class="s_dl1">
    <dd><img src="images/1411yx2fmxx_07.png" width="324" height="26" alt="" /></dd>
    <dd class="s_dd1">
      <form id="form1" runat="server">
        <input name="sotype" value="全部内容" type="hidden">
        <input name="sotype" value="全部内容" type="hidden">
        <a class="sort" href="#" info="0">全部内容</a>
        <ul class="s_sort">
          <li class="arrow_g"><a href="javascript:;">全部内容</a></li>
          <li><a href="javascript:;">礼品兑换</a></li>
          <li><a href="javascript:;">生活广场</a></li>
          <li><a href="javascript:;">合作商家</a></li>
          <li><a href="javascript:;">超值旅游</a></li>
          <li><a href="javascript:;">同城兑换</a></li>
          <li><a href="javascript:;">景点门票</a></li>
          <li><a href="javascript:;">免费学习</a></li>
          <li><a href="javascript:;">游学宝</a></li>
          <div class="clear"></div>
        </ul>
        <input value="您想要什么~" onFocus="if(value==defaultValue){value='';this.style.color='#000'}" onBlur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999999" maxlength="30" type="text"  class="s_input1"/>
      </form>
    </dd>
    <a href="#" class="s_search"></a>
  </dl>
</div>
<div class="s_nav">
  <div class="s_w1200">
    <ul>
      <li class="cur"><a href="#" target="_blank">首页</a></li>
      <li><a href="#" target="_blank">礼品兑换</a></li>
      <li><a href="#" target="_blank">合作商家</a></li>
      <li><a href="#" target="_blank">同城兑换</a></li>
      <li><a href="#" target="_blank">免费学习</a></li>
      <li><a href="#" target="_blank">生活广场</a></li>
      <li><a href="#" target="_blank">超值旅游</a></li>
      <li><a href="#" target="_blank">景点门票</a></li>
      <li><a href="#" target="_blank">游学宝</a></li>
      <div class="clear"></div>
    </ul>
  </div>
</div>
<!--header end--> 
<!--main start-->
<div class="mainbanner">
  <div class="mainbanner_window">
    <ul id="slideContainer">
      <li><a href="http://www.baidu.com"><img src="images/banner/index_banner_01.jpg" width="1920" height="408" alt="" /></a></li>
      <li><a href="javascript:;"><img src="images/banner/index_banner_02.jpg" width="1920" height="408" alt="" /></a></li>
      <li><a href="javascript:;"><img src="images/banner/index_banner_03.jpg" width="1920" height="408" alt="" /></a></li>
      <li><a href="javascript:;"><img src="images/banner/index_banner_04.jpg" width="1920" height="408" alt="" /></a></li>
            <li><a href="javascript:;"><img src="images/banner/index_banner_05.jpg" width="1920" height="408" alt="" /></a></li>
      <li><a href="javascript:;"><img src="images/banner/index_banner_06.jpg" width="1920" height="408" alt="" /></a></li>
    </ul>
  </div>
  <ul class="mainbanner_list">
    <li><a href="javascript:;" title="游学网"><img src="images/banner/index_banner_01.jpg"/></a></li>
        <li><a href="javascript:;" title="游学网"><img src="images/banner/index_banner_02.jpg"/></a></li>
        <li><a href="javascript:;" title="游学网"><img src="images/banner/index_banner_03.jpg"/></a></li>
        <li><a href="javascript:;" title="游学网"><img src="images/banner/index_banner_04.jpg"/></a></li>
        <li><a href="javascript:;" title="游学网"><img src="images/banner/index_banner_05.jpg"/></a></li>
        <li><a href="javascript:;" title="游学网"><img src="images/banner/index_banner_06.jpg"/></a></li>
        <div class="clear"></div>
  </ul>
  <div class="s_w1200 s_pr2">  
    <div id="tabs0">
 <ul class="menu0" id="menu0">
  <li onclick="setTab(0,0)" class="hover" ><span id="s_index_bg9">签到</span></li>
  <li onclick="setTab(0,1)"><span id="s_index_bg10">商品兑换</span></li>
  <li onclick="setTab(0,2)"><span id="s_index_bg11">站内公告</span></li>
 </ul>
 <div class="main" id="main0">
  <ol class="block"><li>
    <!--未登录 start-->
      <!--<dl class="s_dl2">-->
      <!--<dd class="s_fwb">登录</dd>-->
        <!--<dd><input name="" type="text" class="s_input3" value="请输入您的用户名"/></dd>-->
        <!--<dd><input name="" type="password" class="s_input2" /></dd>-->
        <!--<dd><a href="#" class="s_index_bg12 btn">登录</a></dd>-->
        <!--<dd class="s_index_t29"><a href="#" title="">忘记密码？</a></dd>-->
        <!--<dd class="s_index_t29">账号注册：<a href="#" title="" class="s_index_bg13">会员</a><a href="#" title="" class="s_index_bg14">商户</a></dd>-->
     <!--</dl>-->
      <!--未登录 end-->
    <!--登录 start-->
      <div class="s_box8">
        <div class="s_index_t34"><img src="images/1__40.png" alt="" /></div>
            <div class="s_index_t33">樱桃小丸子</div>
            <div class="s_index_t35">您的游学卡余额为 <span>120</span> 元</div>
            <div class="s_index_t36">成功签到 <span>0</span><span>0</span> 天</div>
            <a href="#" title="" class="s_index_t37">签到赚游学卡</a>
      </div>
    <!--登录 end-->
  </li></ol>
  <ol><li class="s_box7">
    
    <div id="demo">
  <div id="demo1">
    <div class="s_box6">
      <p class="s_index_t31">雨过天晴123     兑换了</p>
        <p class="s_index_t32"><a href="#" title="">家禾康  3G电动洁面仪  洗脸</a></p>
        <p class="s_index_t32">游学卡：180.00元</p>
    </div>
    <div class="s_box6">
      <p class="s_index_t31">雨过天晴123     兑换了</p>
        <p class="s_index_t32"><a href="#" title="">家禾康  3G电动洁面仪  洗脸</a></p>
        <p class="s_index_t32">游学卡：180.00元</p>
    </div>
    <div class="s_box6">
      <p class="s_index_t31">雨过天晴123     兑换了</p>
        <p class="s_index_t32"><a href="#" title="">家禾康  3G电动洁面仪  洗脸</a></p>
        <p class="s_index_t32">游学卡：180.00元</p>
    </div>
    <div class="s_box6">
      <p class="s_index_t31">雨过天晴123     兑换了</p>
        <p class="s_index_t32"><a href="#" title="">家禾康  3G电动洁面仪  洗脸</a></p>
        <p class="s_index_t32">游学卡：180.00元</p>
    </div>
    <div class="s_box6">
      <p class="s_index_t31">雨过天晴123     兑换了</p>
        <p class="s_index_t32"><a href="#" title="">家禾康  3G电动洁面仪  洗脸</a></p>
        <p class="s_index_t32">游学卡：180.00元</p>
    </div>
    <div class="s_box6">
      <p class="s_index_t31">雨过天晴123     兑换了</p>
        <p class="s_index_t32"><a href="#" title="">家禾康  3G电动洁面仪  洗脸</a></p>
        <p class="s_index_t32">游学卡：180.00元</p>
    </div>
    <div class="s_box6">
      <p class="s_index_t31">雨过天晴123     兑换了</p>
        <p class="s_index_t32"><a href="#" title="">家禾康  3G电动洁面仪  洗脸</a></p>
        <p class="s_index_t32">游学卡：180.00元</p>
    </div>
    </div>
  <div id="demo2"></div>
</div>
  </li></ol>
  <ol><li>
    <div class="s_pt1">
      <a href="#" class="s_index_t30">苹果零售店员工为果粉支招：如何获得最...</a>
        <a href="#" class="s_index_t30">苹果零售店员工为果粉支招：如何获得最...</a>
        <a href="#" class="s_index_t30">苹果零售店员工为果粉支招：如何获得最...</a>
        <a href="#" class="s_index_t30">苹果零售店员工为果粉支招：如何获得最...</a>
        <a href="#" class="s_index_t30">苹果零售店员工为果粉支招：如何获得最...</a>
        <a href="#" class="s_index_t30">苹果零售店员工为果粉支招：如何获得最...</a>
        <a href="#" class="s_index_t30">苹果零售店员工为果粉支招：如何获得最...</a>
    </div>
  </li></ol>
 </div>
</div>
  </div>
</div>

<div class="s_w1200 s_ov">
  <div class="s_box1">
    <div class="s_index_t">
      <div class="s_index_tt">
        <div class="s_index_t2 s_index_bg1">限时特供<span class="s_index_t1">Limited Time Special for</span></div>
      </div>
    </div>
    <ul class="s_index_ul1">
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">现价：<span class="s_index_t5">208</span>/游学卡   原价：<span class="s_index_t6">378</span>/元</p>
        <p class="s_index_t7">还有<span>23</span>小时<span>09</span>分<span>39</span>秒结束</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">现价：<span class="s_index_t5">208</span>/游学卡   原价：<span class="s_index_t6">378</span>/元</p>
        <p class="s_index_t7">还有<span>23</span>小时<span>09</span>分<span>39</span>秒结束</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">现价：<span class="s_index_t5">208</span>/游学卡   原价：<span class="s_index_t6">378</span>/元</p>
        <p class="s_index_t7">还有<span>23</span>小时<span>09</span>分<span>39</span>秒结束</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">现价：<span class="s_index_t5">208</span>/游学卡   原价：<span class="s_index_t6">378</span>/元</p>
        <p class="s_index_t7">还有<span>23</span>小时<span>09</span>分<span>39</span>秒结束</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">现价：<span class="s_index_t5">208</span>/游学卡   原价：<span class="s_index_t6">378</span>/元</p>
        <p class="s_index_t7">还有<span>23</span>小时<span>09</span>分<span>39</span>秒结束</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">现价：<span class="s_index_t5">208</span>/游学卡   原价：<span class="s_index_t6">378</span>/元</p>
        <p class="s_index_t7">还有<span>23</span>小时<span>09</span>分<span>39</span>秒结束</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">现价：<span class="s_index_t5">208</span>/游学卡   原价：<span class="s_index_t6">378</span>/元</p>
        <p class="s_index_t7">还有<span>23</span>小时<span>09</span>分<span>39</span>秒结束</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">现价：<span class="s_index_t5">208</span>/游学卡   原价：<span class="s_index_t6">378</span>/元</p>
        <p class="s_index_t7">还有<span>23</span>小时<span>09</span>分<span>39</span>秒结束</p>
      </li>
      <div class="clear"></div>
    </ul>
  </div>
  <div class="s_box1">
    <div class="s_index_t">
      <div class="s_index_tt">
        <div class="s_index_t2 s_index_bg2">礼金兑换<span class="s_index_t1">Gift exchange</span></div>
      </div>
    </div>
    <ul class="s_index_ul1">
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">当前价：<span class="s_index_t5">208</span>/游学卡&nbsp;&nbsp;&nbsp;市场价：378/元</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">当前价：<span class="s_index_t5">208</span>/游学卡&nbsp;&nbsp;&nbsp;市场价：378/元</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">当前价：<span class="s_index_t5">208</span>/游学卡&nbsp;&nbsp;&nbsp;市场价：378/元</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">当前价：<span class="s_index_t5">208</span>/游学卡&nbsp;&nbsp;&nbsp;市场价：378/元</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">当前价：<span class="s_index_t5">208</span>/游学卡&nbsp;&nbsp;&nbsp;市场价：378/元</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">当前价：<span class="s_index_t5">208</span>/游学卡&nbsp;&nbsp;&nbsp;市场价：378/元</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">当前价：<span class="s_index_t5">208</span>/游学卡&nbsp;&nbsp;&nbsp;市场价：378/元</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4">当前价：<span class="s_index_t5">208</span>/游学卡&nbsp;&nbsp;&nbsp;市场价：378/元</p>
      </li>
      <div class="clear"></div>
    </ul>
  </div>
  <div class="s_box1">
    <div class="s_index_t">
      <div class="s_index_tt">
        <div class="s_index_t2 s_index_bg3">礼金+游学卡<span class="s_index_t1">Gifts + Study Tour card</span></div>
      </div>
    </div>
    <ul class="s_index_ul1">
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4"><span class="s_index_t5">208</span>/游学卡+<span class="s_index_t5">378</span>/礼金</p>
        <p class="s_index_t8"><span>1000</span>人已抢</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4"><span class="s_index_t5">208</span>/游学卡+<span class="s_index_t5">378</span>/礼金</p>
        <p class="s_index_t8"><span>1000</span>人已抢</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4"><span class="s_index_t5">208</span>/游学卡+<span class="s_index_t5">378</span>/礼金</p>
        <p class="s_index_t8"><span>1000</span>人已抢</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4"><span class="s_index_t5">208</span>/游学卡+<span class="s_index_t5">378</span>/礼金</p>
        <p class="s_index_t8"><span>1000</span>人已抢</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4"><span class="s_index_t5">208</span>/游学卡+<span class="s_index_t5">378</span>/礼金</p>
        <p class="s_index_t8"><span>1000</span>人已抢</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4"><span class="s_index_t5">208</span>/游学卡+<span class="s_index_t5">378</span>/礼金</p>
        <p class="s_index_t8"><span>1000</span>人已抢</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4"><span class="s_index_t5">208</span>/游学卡+<span class="s_index_t5">378</span>/礼金</p>
        <p class="s_index_t8"><span>1000</span>人已抢</p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4"><span class="s_index_t5">208</span>/游学卡+<span class="s_index_t5">378</span>/礼金</p>
        <p class="s_index_t8"><span>1000</span>人已抢</p>
      </li>
      <div class="clear"></div>
    </ul>
  </div>
  <div class="s_box1">
    <div class="s_index_t">
      <div class="s_index_tt fl">
        <div class="s_index_t2 s_index_bg4">换购商品<span class="s_index_t1">Redemption Goods</span></div>
      </div>
      <div class="fr s_index_t23"><a href="#" target="_blank">更多+</a></div>
      <div class="clear"></div>
    </div>
    <ul class="s_index_ul1">
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
        <a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>
        <p class="clear"></p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
        <a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>
        <p class="clear"></p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
        <a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>
        <p class="clear"></p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
        <a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>
        <p class="clear"></p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
        <a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>
        <p class="clear"></p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
        <a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>
        <p class="clear"></p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
        <a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>
        <p class="clear"></p>
      </li>
      <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
        <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
        <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
        <a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>
        <p class="clear"></p>
      </li>
      <div class="clear"></div>
    </ul>
  </div>
  <div class="s_box2"><a href="#" target="_blank" title=""><img src="images/1__29.png" width="1200" height="118" alt="" /></a></div>
  <div class="s_box2" id="tabs1">
    <div class="s_index_t">
      <div class="s_index_tt fl">
        <div class="s_index_t2 s_index_bg5">合作商家<span class="s_index_t1">Business cooperation</span></div>
      </div>
      <div class="menu1box fr">
        <ul id="menu1">
          <li class="hover" onmouseover="setTab(1,0)"><a href="#">热门商户</a></li>
          <li onmouseover="setTab(1,1)"><a href="#">优惠商户</a></li>
          <li onmouseover="setTab(1,2)"><a href="#">特色商户</a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="main1box">
      <div class="main" id="main1">
        <ol class="block">
          <li>
            <ul class="s_index_ul2">
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <div class="clear"></div>
            </ul>
          </li>
        </ol>
        <ol>
          <li>
            <ul class="s_index_ul2">
              <li><img src="images/1__29.png" width="282" height="159" alt="" />
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <div class="clear"></div>
            </ul>
          </li>
        </ol>
        <ol>
          <li>
            <ul class="s_index_ul2">
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <li><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__15.png" width="282" height="159" alt="" /></a>
                <p class="s_index_t3"><a href="#" title="初中语文文体写作大突破" target="_blank">【初中语文文体写作大突破】</a></p>
                <div class="s_pr">
                  <p class="s_index_t9"><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a><a href="#" title="初中语文文体写作大突破" target="_blank"><img src="images/1__40.png" width="72" height="72" alt="" /></a></p>
                  <p class="s_p1"> <span class="s_index_t11">12</span><span class="s_index_t4">个商品</span> <a href="#" class="s_index_t10">点击查看</a></p>
                </div>
              </li>
              <div class="clear"></div>
            </ul>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="s_box2"  id="tabs2">
    <div class="s_index_t">
      <div class="s_index_tt fl">
        <div class="s_index_t2 s_index_bg6">免费学习<span class="s_index_t1">Free Learning</span></div>
      </div>
      <div class="menu1box fr">
        <ul id="menu2">
          <li class="hover" onmouseover="setTab(2,0)"><a href="#">婴幼儿教育</a></li>
          <li onmouseover="setTab(2,1)"><a href="#">小学教育</a></li>
          <li onmouseover="setTab(2,2)"><a href="#">中学教育</a></li>
          <li onmouseover="setTab(2,3)"><a href="#">职业教育</a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="main1box">
      <div class="main" id="main2">
        <ol class="block">
          <li>
            <ul class="s_index_ul1">
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <div class="clear"></div>
            </ul>
          </li>
        </ol>
        <ol>
          <li>
            <ul class="s_index_ul1">
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <div class="clear"></div>
            </ul>
          </li>
        </ol>
        <ol>
          <li>
            <ul class="s_index_ul1">
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <div class="clear"></div>
            </ul>
          </li>
        </ol>
        <ol>
          <li>
            <ul class="s_index_ul1">
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <li><img src="images/1__15.png" width="282" height="159" alt="" />
                <p class="s_index_t3">【初中语文文体写作大突破】</p>
                <p class="s_index_t4 fl"><span class="s_index_t12">208</span><span class="s_index_t13">元/</span>游学卡</p>
                <!--<a href="#" class="fr s_index_t14" title="查看详情" target="_blank">查看详情</a>-->
                <p class="clear"></p>
                <a href="#" target="_blank" class="s_index_t15"><span>课程简介：</span>
                  <p>该课程是清大学习吧特别引进的教育部基础教育课程教材发展中心主办的“全国新课程中小学优秀课例评选”的优秀获奖课例，对学生来说是不可多得的好课程，具有很高的学习价值。在获奖课例中，老师深入浅出的课堂讲解以及合理的情境的创设，不仅能够激发学生的学习兴趣，帮助学生理解教材的内容，而且能唤醒学生的认知系统，拓展学生的思维空间，使学生真正成为学习的主人！</p>
                </a>
              </li>
              <div class="clear"></div>
            </ul>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="s_box2"><a href="#" target="_blank" title=""><img src="images/1__50.png" width="1200" height="118" alt="" /></a></div>
  <div class="s_box2" id="tabs3">
    <div class="s_index_t">
      <div class="s_index_tt fl">
        <div class="s_index_t2 s_index_bg7">生活广场<span class="s_index_t1">Life Community</span></div>
      </div>
      <div class="menu1box fr">
        <ul id="menu3">
          <li class="hover" onmouseover="setTab(3,0)"><a href="#">商圈</a></li>
          <li onmouseover="setTab(3,1)"><a href="#">游记</a></li>
          <li onmouseover="setTab(3,2)"><a href="#">旅游线路</a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="main" id="main3">
      <ol class="block">
        <li>
          <div class="s_box3">
            <div class="s_index_t16"><a href="#" target="_blank" title=""><img src="images/1__57.png" width="233" height="372" alt="" /></a><span><a href="#" target="_blank" title="">魅力海岛美丽心情</a></span></div>
            <div class="s_index_t17"><a href="#" target="_blank" title=""><img src="images/1__59.png" width="458" height="180" alt="" /></a><span><a href="#" target="_blank" title="">最有文化底蕴城市排行榜</a></span></div>
            <div class="s_index_t18"><a href="#" target="_blank" title=""><img src="images/1__61.png" width="236" height="180" alt="" /></a><span><a href="#" target="_blank" title="">吃出国门馋嘴游</a></span></div>
            <div class="s_index_t19"><a href="#" target="_blank" title=""><img src="images/1_2_03.png" width="236" height="180" alt="" /></a><span><a href="#" target="_blank" title="">摄影旅游排行榜</a></span></div>
            <div class="s_index_t20"><a href="#" target="_blank" title=""><img src="images/1__68.png" width="458" height="180" alt="" /></a><span><a href="#" target="_blank" title="">海岛婚纱排行榜</a></span></div>
            <div class="s_index_t21"><a href="#" target="_blank" title=""><img src="images/1__63.png" width="233" height="372" alt="" /></a><span><a href="#" target="_blank" title="">小资情调旅游胜地</a></span></div>
          </div>
        </li>
      </ol>
      <ol>
        <li>
          <div class="s_box3">
            <div class="s_index_t16"><a href="#" target="_blank" title=""><img src="images/1__57.png" width="233" height="372" alt="" /></a><span><a href="#" target="_blank" title="">魅力海岛美丽心情</a></span></div>
            <div class="s_index_t17"><a href="#" target="_blank" title=""><img src="images/1__59.png" width="458" height="180" alt="" /></a><span><a href="#" target="_blank" title="">最有文化底蕴城市排行榜</a></span></div>
            <div class="s_index_t18"><a href="#" target="_blank" title=""><img src="images/1__61.png" width="236" height="180" alt="" /></a><span><a href="#" target="_blank" title="">吃出国门馋嘴游</a></span></div>
            <div class="s_index_t19"><a href="#" target="_blank" title=""><img src="images/1_2_03.png" width="236" height="180" alt="" /></a><span><a href="#" target="_blank" title="">摄影旅游排行榜</a></span></div>
            <div class="s_index_t20"><a href="#" target="_blank" title=""><img src="images/1__68.png" width="458" height="180" alt="" /></a><span><a href="#" target="_blank" title="">海岛婚纱排行榜</a></span></div>
            <div class="s_index_t21"><a href="#" target="_blank" title=""><img src="images/1__63.png" width="233" height="372" alt="" /></a><span><a href="#" target="_blank" title="">小资情调旅游胜地</a></span></div>
          </div>
        </li>
      </ol>
      <ol>
        <li>
          <div class="s_box3">
            <div class="s_index_t16"><a href="#" target="_blank" title=""><img src="images/1__57.png" width="233" height="372" alt="" /></a><span><a href="#" target="_blank" title="">魅力海岛美丽心情</a></span></div>
            <div class="s_index_t17"><a href="#" target="_blank" title=""><img src="images/1__59.png" width="458" height="180" alt="" /></a><span><a href="#" target="_blank" title="">最有文化底蕴城市排行榜</a></span></div>
            <div class="s_index_t18"><a href="#" target="_blank" title=""><img src="images/1__61.png" width="236" height="180" alt="" /></a><span><a href="#" target="_blank" title="">吃出国门馋嘴游</a></span></div>
            <div class="s_index_t19"><a href="#" target="_blank" title=""><img src="images/1_2_03.png" width="236" height="180" alt="" /></a><span><a href="#" target="_blank" title="">摄影旅游排行榜</a></span></div>
            <div class="s_index_t20"><a href="#" target="_blank" title=""><img src="images/1__68.png" width="458" height="180" alt="" /></a><span><a href="#" target="_blank" title="">海岛婚纱排行榜</a></span></div>
            <div class="s_index_t21"><a href="#" target="_blank" title=""><img src="images/1__63.png" width="233" height="372" alt="" /></a><span><a href="#" target="_blank" title="">小资情调旅游胜地</a></span></div>
          </div>
        </li>
      </ol>
    </div>
  </div>
  <div class="s_box2">
    <div class="s_index_t">
      <div class="s_index_tt">
        <div class="s_index_t2 s_index_bg8">精彩活动<span class="s_index_t1">Happenings</span></div>
      </div>
    </div>
    <ul class="s_index_ul3">
      <li><a href="#" target="_blank" title=""><img src="images/1__80.png" width="208" height="154" alt="" /></a></li>
      <li><a href="#" target="_blank" title=""><img src="images/1__80.png" width="208" height="154" alt="" /></a></li>
      <li><a href="#" target="_blank" title=""><img src="images/1__80.png" width="208" height="154" alt="" /></a></li>
      <li><a href="#" target="_blank" title=""><img src="images/1__80.png" width="208" height="154" alt="" /></a></li>
      <li><a href="#" target="_blank" title=""><img src="images/1__80.png" width="208" height="154" alt="" /></a></li>
      <div class="clear"></div>
    </ul>
  </div>
  <div class="s_mt2">
    <div class="s_box4">
      <div class="fl s_index_t22">最新晒单</div>
      <div class="fr s_index_t23"><a href="#" target="_blank">更多+</a></div>
      <div class="clear"></div>
      <ul class="s_index_ul4">
        <li>
          <div class="fl"><a href="#" target="_blank"><img src="images/1__83.png" width="100" height="100" alt="" /></a></div>
          <div class="fl"><a href="#" target="_blank" class="s_index_t24">婴儿辅食剪刀</a>
            <p class="s_index_t25">身体是革命的本钱，然而每天劳作很晚才回去.....</p>
            <span class="s_index_t27">--君君Julia</span></div>
          <div class="clear"></div>
        </li>
        <li>
          <div class="fl"><a href="#" target="_blank"><img src="images/1__83.png" width="100" height="100" alt="" /></a></div>
          <div class="fl"><a href="#" target="_blank" class="s_index_t24">婴儿辅食剪刀</a>
            <p class="s_index_t25">身体是革命的本钱，然而每天劳作很晚才回去.....</p>
            <span class="s_index_t27">--君君Julia</span></div>
          <div class="clear"></div>
        </li>
      </ul>
    </div>
    <div class="s_box5">
      <div>
        <div class="fl s_index_t22">游学快报</div>
        <div class="fr s_index_t23"><a href="#" target="_blank">更多+</a></div>
        <div class="clear"></div>
      </div>
      <div class="s_mt1 s_brb1">
        <div class="fl"><a href="#" target="_blank"><img src="images/1__86.png" width="85" height="85" alt="" /></a></div>
        <div class="fl"><a href="#" target="_blank" class="s_index_t26">《大家想得美》栏目报名通知函</a>
          <p class="s_index_t25">该栏目是一档集知识性、趣味性、益智性为一体，适合全家人一起观看的想象力答题节目。是一档集知识性、趣味性、益智性为一体，适合全家人一起观看的想象力答题节目。</p>
        </div>
        <div class="clear"></div>
      </div>
      <ul>
        <li><a href="#" target="_blank">热烈庆祝“游学网与天喜隆集团”达成战略合作</a></li>
        <li><a href="#" target="_blank">热烈庆祝“游学网与天喜隆集团”达成战略合作</a></li>
        <li><a href="#" target="_blank">热烈庆祝“游学网与天喜隆集团”达成战略合作</a></li>
        <li><a href="#" target="_blank">热烈庆祝“游学网与天喜隆集团”达成战略合作</a></li>
        <li><a href="#" target="_blank">热烈庆祝“游学网与天喜隆集团”达成战略合作</a></li>
        <li><a href="#" target="_blank">热烈庆祝“游学网与天喜隆集团”达成战略合作</a></li>
        <li><a href="#" target="_blank">热烈庆祝“游学网与天喜隆集团”达成战略合作</a></li>
        <li><a href="#" target="_blank">热烈庆祝“游学网与天喜隆集团”达成战略合作</a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--main end--> 
<!--footer start-->
<div class="s_footer">
  <div class="s_footer1">
    <div class="s_w1200">
      <ul class="s_ul1">
        <li class="s_br1"><a href="#" class="s_f_bg1">新手指南</a>
          <div class="divOne_1">
            <ul class="s_ul2">
              <li><a href="#" target="_blank">用户注册</a></li>
              <li><a href="#" target="_blank">会员登录</a></li>
              <li><a href="#" target="_blank">兑换流程</a></li>
              <li><a href="#" target="_blank">交易须知</a></li>
              <li><a href="#" target="_blank">如何获得礼金币</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#" class="s_f_bg2">付款方式</a>
          <div class="divOne_1">
            <ul class="s_ul2">
              <li><a href="#" target="_blank">支付方式</a></li>
              <li><a href="#" target="_blank">常见支付问题</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#" class="s_f_bg3">配送方式</a>
          <div class="divOne_1">
            <ul class="s_ul2">
              <li><a href="#" target="_blank">配送时间及范围</a></li>
              <li><a href="#" target="_blank">商品验收与签收</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#" class="s_f_bg4">售后服务</a>
          <div class="divOne_1">
            <ul class="s_ul2">
              <li><a href="#" target="_blank">如何退换货</a></li>
              <li><a href="#" target="_blank">退换货政策</a></li>
            </ul>
          </div>
        </li>
        <li><a href="#" class="s_f_bg5">帮助中心</a>
          <div class="divOne_1">
            <ul class="s_ul2">
              <li><a href="#" target="_blank">如何找回密码</a></li>
              <li><a href="#" target="_blank">常见问题</a></li>
              <li><a href="#" target="_blank">关于我们</a></li>
              <li><a href="#" target="_blank">联系方式</a></li>
              <li><a href="#" target="_blank">招商中心</a></li>
              <li><a href="#" target="_blank">什么是游学卡</a></li>
            </ul>
          </div>
        </li>
        <li class="s_br2"><a href="#" class="s_f_bg6">优惠政策</a>
          <div class="divOne_1">
            <ul class="s_ul2">
              <li><a href="#" target="_blank">VIP会员制度说明</a></li>
              <li><a href="#" target="_blank">限时特供</a></li>
              <li><a href="#" target="_blank">送礼金</a></li>
            </ul>
          </div>
        </li>
        <div class="clear"></div>
      </ul>
    </div>
  </div>
  <div class="s_w1200"> <img src="images/1411yx2fmxx_129.png" width="963" height="78" alt="" />
    <p><a href="#" target="_blank">关于我们</a> | <a href="#" target="_blank">服务协议</a> | <a href="#" target="_blank">商务合作</a> | <a href="#" target="_blank">投诉建议</a> | <a href="#" target="_blank">帮助中心</a> | <a href="#" target="_blank">联系我们</a> | <a href="#" target="_blank">友情链接</a> | <a href="#" target="_blank">网站地图</a> | <a href="#" target="_blank">合作商管理</a></p>
    <p>本网站隶属于北京清大世纪教育投资顾问有限公司</p>
    <p><a href="#" target="_blank">清大世纪官网</a> | <a href="#" target="_blank">家宝贝成长俱乐部</a> | <a href="#" target="_blank">家宝贝艺术幼儿园</a> | <a href="#" target="_blank">清大学习吧</a></p>
    <p>经营许可证编号：京ICP备09004306号-23</p>
    <p>Copyright © 2007-2012 Eedu All Rights Reserved</p>
  </div>
</div>
<!--footer end--> 
<script>
   var speed=50
   demo2.innerHTML=demo1.innerHTML
   function Marquee(){
   if(demo2.offsetTop-demo.scrollTop<=0)
   demo.scrollTop-=demo1.offsetHeight
   else{
   demo.scrollTop++
   }
   }
   var MyMar=setInterval(Marquee,speed)
   demo.onmouseover=function() {clearInterval(MyMar)}
   demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
   </script>
</body>
</html>
