$(document).ready(function(){
	$.ajax({
		url: "bootstrap/js/data.json",
		type: "POST",
		dataType: "json",
		success: function(data){
			var html= "";
			var dataA = data.menu_nav;
			$.each(dataA,function(index,value){
				if(value.name=="资讯列表") {
					html += '<a href='+value.href+' class="list-group-item news-list">'+value.name+'</a>';
				} else if(value.name=="资讯编辑"){
					html += '<a href='+value.href+' class="list-group-item news-edit">'+value.name+'</a>';
				} else {
					html += '<a href='+value.href+' class="list-group-item">'+value.name+'</a>';

				}
				$('.list-group').html(html);
			});	
			var dataUsername = data.username;
			if(!dataUsername) {
				$('.navbar .no-login').show();
			}	else {
				$('.navbar .login>a').html('<span class="glyphicon glyphicon-user user">'+
					'</span>'+dataUsername+'<span class="caret"></span>');
				$('.navbar .login').show();				
			}
		}
	})
	//退出登陆
	$('.u-exit').click(function(){

	})

})
$(document).ready(function(){
	$('body').on('click' , '.list-group-item' , function(){

    $(this).addClass('active').siblings().removeClass('active');

	});
	//请求文章列表
	//请求文章列表函数
	function getArticle (){
		$('.article-list tbody').html('');
		$.ajax({
			url:"bootstrap/js/data.json",
			type: "POST",
			dataType: "json",
			success: function(data) {
				// var htmlB = "";
				var dataB = data.article;
				$.each(dataB,function(index,value){
					$('.article-list tbody').prepend('<tr><td>'+value.id+'</td><td>'+value.title+'</td><td>'+value.author+
						'</td><td>'+value.time+'</td><td class="article-link"><a href="">'
						+value.link+
						'</a></td><td class="action"><button class="btn btn-primary btn-sm btn-modify">修改'+
						'</button><button class="btn btn-primary btn-sm btn-danger">删除</button></td></tr>');
				})
			}
		})
		$('.article-list').show().siblings().hide();		

	}
	$('body').on('click','.news-list',function(){
		getArticle();
	})
	//点击切换到修改
	$('body').on('click','.btn-modify',function(){
		$('.news-edit').addClass('active').siblings().removeClass('active');
		var article_id = $(this).parents('tr').children().eq(0).text();
		$.ajax({
			url:"bootstrap/js/data.json",
			type: "POST",
			dataType: "json",
			success: function(data) {
				var dataB = data.article;
				$.each(dataB,function(index,values){
					if (values.id == article_id){
						$('#inputTitle3').val(values.title);
						$('#inputAuthor3').val(values.author);
					}					
				})
			}
		})
		$('.article-modify').show().siblings().hide();		
	})
	$('.btn-cancel').click(function(){
		getArticle();
		$('.news-list').addClass('active').siblings().removeClass('active');
	})
	//提交表单检测,点击type=submit的按钮时触发submit事件。
	$('.model-login-form').submit(function(event){
		if(!$('#inputPassword3').val()){
			$('.login-warning-info').text('密码不能为空').parent().show();
			event.preventDefault();
		}

		if(!$('#inputUsername3').val()){
			$('.login-warning-info').text('用户名不能为空').parent().show();
			event.preventDefault();
		}
		var dataLoginInfo;
		$.ajax({
			url:"bootstrap/js/data.json",
			type: "POST",
			data : {
				username: $('#inputUsername3').val(),
				password: $('#inputPassword3').val()
			},
			dataType: "json",
			success: function(data) {
				dataLoginInfo = data.login_tips_num.num;
				if (dataLoginInfo==2) {
					$('.login-warning-info').text('用户名不存在').parent().show();	
					return false;

				} else if(dataLoginInfo==1) {
					$('.login-warning-info').text('密码错误').parent().show();
					return false;

				}else if(dataLoginInfo==0) {
					$('.login-warning-info').text('登陆成功').parent().show();
					// event.preventDefault();
				}
			}
		})
		return false;
	})
	// [{"num":0,"descirption":"登录成功"},{"num":1,"descirption":"密码错误"},
	// 	{"num":2,"descirption":"用户名不存在"}],
})
