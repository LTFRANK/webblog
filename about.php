<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Document</title>
<script type="text/javascript" src="ajax.js"></script>
<style type="text/css">
/* reset */
body,h1,h2,h3,h4,p,dl,dd,ul,ol,form,input,textarea,th,td,select{margin: 0;padding: 0;}
em{font-style: normal;}
li{list-style: none;}
a{text-decoration: none;}
img{border: none;vertical-align: top;}
table{border-collapse: collapse;}
input,textarea{outline: none;}
textarea{resize:none;overflow: auto;}
body{font-size:12px;font-family: arial;}
/* public  清浮动*/
.fl{float: left;}
.fr{float: right;}
.clear{zoom: 1;}
.clear:after{content: "";visibility: hidden;clear: both;display: block; }

	html,body{
		font-size: 14px;
		height: 100%;
		font-family: "微软雅黑";
		background: url(black_bg.jpg);


	}
	#wrap{
		width: 100%;
		height: 100%;
		position: absolute;left: 0;
		top: 0;
	}
	#nav{
		width: 25%;
		height: 100%;
		position: fixed;
		left: 0;
		top: 0;

	}
	#content{
		margin-left:25%;
		padding:0 2%;
		width: 53.66668%;
		height: 100%;

				/*background-color: pink;*/
	}
	#aside{
		width:14.666667%;
		height: 100%;
		/*min-height: 653px;*/
		padding: 0 1%;
		background: url(black_line2.png) repeat-y;
		position: fixed;
		right: 0;
		top: 0;
	}
	.row{
		width: 80%;
		height: 100%;
		/*background-color: #333;*/
	}
	#col1{	
		position: relative;
		left: 0;
		top: 0;
		width: 100%;
		height:100%;
		/*min-height:653px;*/
		background-color: #3c3c3c;
		text-align: center;
		
	}
	#col1 h2{

		margin: 30px 0 15px 0;
		line-height: 20px;
		color:white;
		transition:0.8s;
	}
	#col1 h2:hover{
		opacity: 0;
	}
	#col1 p{
		font-size: 1em;
		color:#666666;
	}

	#col1 img{
		border-radius: 50%;
		border: 10px solid #333333;
		width: 50%;
		transition:0.2s;
	}
	#col1 img:hover{
		border-radius: 0;

	}
	.slider{
		/*padding-top: 15%;*/
		width: 20%;
		height: 100%;
		position: relative;
		left: 0;
		top: 0;
		/*min-height:653px;*/
		background-color:#757575;
		background:url(black_nav.png) repeat-y;
	}
	#nav_view{
		width: 100%;
		margin-top: 40px;
		text-align: center;
	}
	#nav_view ul{
		width: 40%;
		margin:0 auto;
		
	}
	#nav_view li {
		
		width: 100%;
		margin:2px 0;
		line-height: 30px;
		
	}
	#nav_view a{
		display: block;
		width: 100%;
		text-align: center;
		color:white;
		
		border-radius: 5px;
	}
	#nav_view a:hover{
		background-color: #222222;
	}
	
	/*#aside*/
	/*#aside*/
	#search{
		margin-top:20%;
		margin-bottom: 40px;
	}
	.search_h2{
		background: url(x.png);
		line-height: 35px;
		margin-bottom: 10px;
		font-style: normal;
		font-weight: normal;
		border-bottom:1px dashed black;
	}
	#search input{
		width: 100%;
		height: 30px;
		border-radius: 5px;
		border: none;
	}
	#contact{
		margin-bottom: 40px;
	}
	#notekind li{
		padding-left: 2px;
		line-height: 30px;
		border-bottom: 1px dashed #3a3a3a;
		
	}
	#notekind li:hover{
		background-color: rgba(0,0,0,0.1);
	}
	#notekind li span{
		display: inline-block;
			width: 0;
			height: 0;
			/*border:5px solid;*/
			border-top: solid 8px transparent;
			border-left:solid 8px  black;
			border-right: solid 8px transparent;
			border-bottom:solid  8px transparent;
	}
	#notekind li a{
		font-size: 18px;
		color:#666666;
	}
	/*content*/
	.ul_content{
		padding:40px 0 0 0;

	}
	.pane{
		box-shadow: 0 0 5px 2px gray;
		border-radius: 3px;
		background: -webkit-linear-gradient(top,#d5d0bd,#dbd6c3);
	}
	.pane_head{
		padding: 5px;
		height: 30px;
		border-left: 4px solid red;
	}
	.pane_body{
		padding-left:1%; 
		padding-top: 5px;
		width: 99%;
		background: url(black_line3.jpg) repeat-x;
		border-bottom: 1px solid #9d9684;
	}
	.pane_foot{
		padding-left:1%; 
	}
	.page{
		height: 36px;
 		margin: 20px auto;
		background: url(blogo.png) center center no-repeat;
	}
	.inform li{
		width: 33.33333%;
	}
	.inform li:nth-child(1)>span{
		display: inline-block;
		padding: 15px;
		background: url(kind_p.png) no-repeat center center;
		background-size:100% 100%;
	}
	.inform li:nth-child(2)>span{
		display: inline-block;
		padding: 15px;
		background: url(clock.png) no-repeat center center;
		background-size:100% 100%;
	}
	.inform li:nth-child(3)>span{
		margin-left: 50%;
		display: inline-block;
		padding: 15px;
		background: url(note3.png) no-repeat center center;
		background-size:100% 100%;
	}
	h4{
		font-weight: normal;
	}
	@media screen and (max-width:980px){
		#nav { position: fixed; top: 0; left: 0;width: 28%;}
		#content{
			margin-left:28%;
			width: 68%;
			padding: 2%;
		}
	}
	@media screen and (max-width:768px){
	#nav { position: relative; top: 0; left: 0;width:100%;}
	
	.row{
		width: 100%;
	}
	.slider{
		display: none;
	}
	
	#content{
		width: 96%;
		margin: 0;
		padding: 2%;
	}
	
}

</style>
</head>
<body>
	<div class="wrap">
		<div id="nav" class="fl clear">
			<div class="row fl">
				<div id="col1">
					<img src="ltf.png" alt="...">
					<h2>刘天福</h2>
					<p>web前端开发工程师</p>
					<div id="nav_view">
						<ul>						
							<li><a href="blog.html">首页</a></li>
							<li><a href="nav.html">导航</a></li>
							<li><a href="speacil.html">专题</a></li>
							<li><a href="production.html">作品</a></li>
							<li><a href="about.html">关于</a></li>
							<li><a href="message.html">留言</a></li>
						</ul>

					</div>
				</div>
				
			</div>
			<div class="slider fl">
			</div>
		</div>
		
		<div id="content" class="fl">
			<ul class="ul_content">
				<li>
					<div class="pane">
						<div class="pane_head">
							<a href="###"></a>
						</div>
						<div class="pane_body">
							<h4>我操了个发的是解放合适的肌肤快捷快递是经过圣诞节和快递公司了公司都ijdsgsdgsdjgsdoo</h4>
						</div>
						<div class="pane_foot">
							<ul class="inform clear">
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
							</ul>
						</div>
						<div class="page"></div>
					</div>
				</li>
				<li>
					<div class="pane">
						<div class="pane_head">
							<a href="###"></a>
						</div>
						<div class="pane_body">
							<h4>我操了个发的是解放合适的肌肤快捷快递是经过圣诞节和快递公司了公司都ijdsgsdgsdjgsdoo</h4>
						</div>
						<div class="pane_foot">
							<ul class="inform clear">
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
							</ul>
						</div>
						<div class="page"></div>
					</div>
				</li>
				<li>
					<div class="pane">
						<div class="pane_head">
							<a href="###"></a>
						</div>
						<div class="pane_body">
							<h4>我操了个发的是解放合适的肌肤快捷快递是经过圣诞节和快递公司了公司都ijdsgsdgsdjgsdoo</h4>
						</div>
						<div class="pane_foot">
							<ul class="inform clear">
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
							</ul>
						</div>
						<div class="page"></div>
					</div>
				</li>
				<li>
					<div class="pane">
						<div class="pane_head">
							<a href="###"></a>
						</div>
						<div class="pane_body">
							<h4>我操了个发的是解放合适的肌肤快捷快递是经过圣诞节和快递公司了公司都ijdsgsdgsdjgsdoo</h4>
						</div>
						<div class="pane_foot">
							<ul class="inform clear">
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
							</ul>
						</div>
						<div class="page"></div>
					</div>
				</li>
				<li>
					<div class="pane">
						<div class="pane_head">
							<a href="###"></a>
						</div>
						<div class="pane_body">
							<h4>我操了个发的是解放合适的肌肤快捷快递是经过圣诞节和快递公司了公司都ijdsgsdgsdjgsdoo</h4>
						</div>
						<div class="pane_foot">
							<ul class="inform clear">
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
							</ul>
						</div>
						<div class="page"></div>
					</div>
				</li>
				<li>
					<div class="pane">
						<div class="pane_head">
							<a href="###"></a>
						</div>
						<div class="pane_body">
							<h4>我操了个发的是解放合适的肌肤快捷快递是经过圣诞节和快递公司了公司都ijdsgsdgsdjgsdoo</h4>
						</div>
						<div class="pane_foot">
							<ul class="inform clear">
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
								<li class="fl"><span></span><a href=""></a></li>
							</ul>
						</div>
						<div class="page"></div>
					</div>
				</li>
			</ul>
		</div>
		
		<div id="aside" class="fl">
			<div id="search">
				<h2 class="search_h2">搜索</h2>
				<input type="text"  placeholder="search" >
			</div>
			<div id="contact">
				<h2 class="search_h2">联系我</h2>
				
				<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=675020659&amp;site=qq&amp;menu=yes" target="_blank"><img src="qq.png" alt="腾讯QQ">
				</a>
			</div>
			<div id="note">
				<h2 class="search_h2">分类导航</h2>
				<ul id="notekind">
					<li><span></span><a href="###">前端开发()</a></li>
					<li><span></span><a href="###">学习笔记()</a></li>
					<li><span></span><a href="###">日志杂谈()</a></li>
					<li><span></span><a href="###">资源工具()</a></li>
					<li><span></span><a href="###">其他资料()</a></li>
				</ul>

			</div>
			
		</div>

	</div>
</body>
<script type="text/javascript"  src="jquery-2.1.3.min.js"></script>
<script type="text/javascript"  src="touch.js"></script>
<script type="text/javascript">
	
		window.onload=window.onresize=function(){
			var clientWidth=document.body.clientWidth||document.documentElement.clientWidth;
            var navWidth=$("#nav").width();
			if(clientWidth<=980)
			{
				$("#aside").css({
					display:"none"
				})
				
			
			}
			else{
				$("#aside").css({
					display:"block"
				})
			}

		}
</script>
</html>