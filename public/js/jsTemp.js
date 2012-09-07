var newItemHtml = [
	'<div class="item" imgid="<%=imgid%>">',
		'<div class="item-inner">',
				'<i class="item-top"></i>',
				'<div class="item-main">',
					'<div class="item-pic">',
						'<img src="/miaomi/public/uploads/<%=imgname%>.jpg" class="J-miaoPic" imgid="<%=imgid%>" uid="<%=uid%>" uname="<%=uname%>" uurl="<%=uurl%>" uavatar="<%=uavatar%>" imgtext="<%=imgtext%>" imgdate="<%=imgdate%>" />',
					'</div>',
					'<div class="item-info">',
						'<p class="item-describe-txt"><%=imgtext%></p>',
						'<p class="item-info-num"><span class="num-like"><span class="num-like-detail" imgid="<%=imgid%>"><%=imglike%></span>喜欢</span><span class="num-share">2分享</span></p>',
					'</div>',
				'</div>',
				'<i class="item-hr"></i>',
				'<div class="item-describe">',
					'<a target="_blank" class="avatar-wrap" href="http://weibo.com/<%=uurl%>"><img class="avatar" src="<%=uavatar%>"/></a>',
					'<p class="item-upload-info"><%=imgdate%> 上传</p>',
				'</div>',
			'<div class="item-op">',
				'<a href="javascript:void(0);" class="ui-icon icon-com" title="评论">评论</a>',
				'<a href="javascript:void(0);" class="ui-icon icon-like"  imgid="<%=imgid%>">喜欢</a>',
				'<a href="javascript:void(0);" class="ui-icon icon-share">分享</a>',
			'</div>',
		'</div>',
		'<div class="item-sd"></div>',
	'</div>'
].join('');

//评论头部
var commlist_HTML_hd = [
	'<div class="mod-comment">',
				'<div class="mod-comment-list">',
					'<ul class="list">'
].join('');

//评论列表
var commlist_HTML_loop = [
	'<li class="list-item">',
		'<div class="mod-avatar-txt">',
			'<a href="#" class="avatar-wrap"><img src="<%=comment_uavatar%>" alt="" class="avatar"></a>',
			'<div class="txt-wrap">',
					'<p class="nickname-wrap">',
						'<a href="#" class=”nickname"><%=comment_uname%></a>',
						'<span class="date"><%=comment_date%></span>',
					'</p>',
					'<p><%=comment_text%></p>',
			'</div>',
		'</div>',
	'</li>'
].join('');

//评论底部
var commlist_HTML_ft = [
	'</ul></div>',
			   ' <div class="mod-comment-report" comment_imgid="<%=imgid%>">',
					'<div class="avatar-wrap">',
						'<img src="<%=cur_uavatar%>" alt="" class="avatar">',
					'</div>',
					'<div class="report-container">',
						'<div class="report-textarea-wrapper">',
							'<textarea id="" class="report-textarea"></textarea>',
						'</div>',
					'<div class="report-op-wrapper">',
						'<a href="#" class="btn-M btn-submit">提交</a>',
					'</div>',
				'</div>',
			    '</div>'
].join('');

//上传失败提示
var warning_tips = [
		'<div class="pop-tips">',
			'<div class="pop-tips-inner">',
				'<div class="pop-tips-hd"><i class="pop-close"></i></div>',
				'<div class="pop-tips-cont">',
					'<i class="ui-icon icon_warning"></i><p class="single"><%=tips%></p>',
				'</div>',
				'<div class="pop-tips-ft">',
					'<a href="#" class="btn-M btn-sure"></a>',
				'</div>',
			'</div>',
		'</div>'
].join('');