</div>
<div class="p-5 text-center ">
	<!-- <h6>©<?php $this->options->title() ?></h6> -->
	<p class="h6">©2022 Powered by <a href="https://www.pengcheng.team" target="_blank">鹏程</a> | <a href="http://beian.miit.gov.cn/" target="_blank" rel="nofollow">苏ICP备2022042732号-1</a></p>
</div>
<script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.pjax/2.0.1/jquery.pjax.min.js" type="application/javascript"></script>
<script src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/nprogress/0.2.0/nprogress.min.js" type="application/javascript"></script>
<!--鼠标点击特效-->
<script type="text/javascript">
jQuery(function () {
        $("html").click(function(e) {
            var a_idx = Math.floor((Math.random() * 30));
            var a = new Array(
                "希望全世界停电 我可以偷偷跑去亲你", "我会爱你很久很久","我在贩卖日落 你像神明一样将阳光撒向我","陪伴本身就是这个世界上最了不起的安慰方式", "嘿，我是一朵云ლ(⁰⊖⁰ლ)", "❤"
                   ,"陪你把岁月熬成清酒 陪你把孤夜熬成温柔","❤","月光下邂逅的是爱情和你","祝眉目舒展 顺问冬按","只想拥你入怀","这个世界乱糟糟的 而你干干净净","日月星辰之外 你是第四种难得","我会在每个有意义的时刻 远隔山海与你共存","山脚下遇见的你 我们山顶见","想试试在你迎面跑来一把抱住你的感觉","在生命里的旅程里 遇见你真好","如果不曾遇见 岂知生命如何","❤"
                   ,"想和你一起走过下雪后的天","在我贫瘠的土地上你是最后的玫瑰","今晚月色很美呢","r=a(1-sinθ)","天青色等烟雨 而我在等你","你是我这一生等了半世未拆的礼物","你养我 我养你 两人爱情甜蜜蜜","❤","你不用多好，我喜欢就好","愿有岁月可回首 且以深情共白头"
                 );
            var color1 = Math.floor((Math.random() * 255))
            var color2 = Math.floor((Math.random() * 255));
            var color3 = Math.floor((Math.random() * 255));

            var $i = $("<span />").text(a[a_idx]);
            // a_idx = (a_idx + 1) % a.length;
            var x = e.pageX,
                y = e.pageY;
            $i.css({
                "z-index": 9999999999999 ,
                "top": y - 20,
                "left": x,
                "position": "absolute",
                "font-family":"mmm",
                "fontSize":Math.floor((Math.random() * 5)+10),
                "font-weight": "bold",
                "color": "rgb("+color1+","+color2+","+color3+")",
                "-webkit-user-select":"none",
                "-moz-user-select":"none",
                "-ms-user-select":"none",
                "user-select":"none",
            });
            $("body").append($i);
            $i.animate({
                    "top": y - 200,
                    "opacity": 0
                },
                3000,
                function() {
                    $i.remove();
                });
        });
    });
</script>
<script>
	window.showSiteRuntime = function() {
        var site_runtime = $("#site_runtime");
		if (!site_runtime) return;
		window.setTimeout("showSiteRuntime()", 1000);
		start = new Date("<?php $this->options->lovetime(); ?>");
		now = new Date();
		T = (now.getTime() - start.getTime());
		i = 24 * 60 * 60 * 1000;
		d = T / i;
		D = Math.floor(d);
		h = (d - D) * 24;
		H = Math.floor(h);
		m = (h - H) * 60;
		M = Math.floor(m);
		s = (m - M) * 60
		S = Math.floor(s);
		site_runtime.html("第 <span class=\"bigfontNum\">" + D + "</span> 天 <span class=\"bigfontNum\">" + H + "</span> 小时 <span class=\"bigfontNum\">" + M + "</span> 分钟 <span class=\"bigfontNum\">" + S + "</span> 秒");
	};
	showSiteRuntime();

    $(document).pjax('a', '#pjax-container', {
        fragment: '#pjax-container',
        timeout: 6000
    });
    $(document).on('pjax:send', function() {
        NProgress.start();
    });
    $(document).on('pjax:complete', function() {
        <?php $this->options->pjax回调(); ?>
        NProgress.done();
    });
</script>
<!-- 动态网页标题 -->
<script type="text/javascript">
     var OriginTitile = document.title,
      titleTime;
     document.addEventListener("visibilitychange",
     function() {
      if (document.hidden) {
        document.title = "你有新的未读消息！";
        clearTimeout(titleTime)
    } else {
        document.title = "༼ つ ◕_◕ ༽つ你可算回来了！" ;
        titleTime = setTimeout(function() {
            document.title = OriginTitile
        },
        2000)
    }
    });
</script>
<script src="<?php $this->options->themeUrl('/base/main.js'); ?>"></script>
<?php $this->footer(); ?>
<?php $this->options->底部自定义(); ?>
<!--require APlayer音乐代码 -->
<link rel="stylesheet" href="/usr/themes/Brave/assets/css/APlayer.min.css">
<script src="/usr/themes/Brave/assets/js/APlayer.min.js"></script>
 <!--require MetingJS.false -->
<script src="/usr/themes/Brave/assets/js/Meting.min.js"></script>
<meting-js
	server="netease"/*插入网易云*/
	type="playlist"/*c插入歌单*/
	id="<?php $this->options->neteaseid() ?>"/*插入歌单id*/
	fixed="true"/*启用吸底模式*/
	autoplay="true"/*自动播放，仅适用于手机浏览器，经测试PC端和微信打开自动播放均会被禁止*/
	loop="all"/*循环播放*/
	>
</meting-js>
<!--评论框粒子特效-->
<script type="text/javascript" src="/usr/themes/Brave/assets/js/comment.js"></script>
</body>
</html>