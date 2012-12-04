<div class="main-single">
			<div class="single-preview">
			<div class="single-inner">
				<div class="mod-avatar-txt pic-info">
					<a href="#" class="avatar-wrap"><img src="<?php echo($imgdata['uavatar']) ;?>" alt="" class="avatar"></a>
					<div class="txt-wrap">
						<p class="nickname-wrap"><a href="#" class="nickname"><?php echo($imgdata['uname'])?></a></p>
						<p>上传于 <?php echo($imgdata['imgdate'])?></p>
					</div>
				</div>
				<div class="pic-preview">
					<div class="pic-preview-op">
						<a href="#" class="op-btn icon-liked"><i></i>取消喜欢</a>
						<a href="#" class="op-btn icon-like"><i></i>喜欢</a>
						<a href="#" class="op-btn icon-com"><i></i>评论</a>
					</div>
					<div class="pic-preview-inner">
						<a href="#">
							<img src="<?php echo(base_url('public/uploads\/').$imgdata['imgname']) ;?>.jpg" alt="" class="pic">
						</a>

					</div>
					<p class="pic-preview-info"><?php echo($imgdata['imgtext'])?></p>
					<p class="pic-info-num"><span class="num-com">12评论</span><span class="num-like"><span class="num-like-detail">0</span>喜欢</span><span class="num-share">2分享</span></p>
				</div>
				<div class="more-info-item">
					<div class="more-info-list">
						<h3>他们也喜欢这只喵星人：</h3>
						<ul class="list-pic">
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tbluecat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tredcat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tsmallcat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tblackcat" alt=""></a></li>
						</ul>
					</div>
				</div>
				<div class="more-info-item">
					<div class="more-info-list list-a">
						<h3>他们也喜欢：</h3>
						<ul class="list-pic">
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tbluecat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tredcat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tsmallcat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tblackcat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tblackcat" alt=""></a></li>
						</ul>
					</div>
					<div class="more-info-list list-b">
						<h3>他们也喜欢：</h3>
						<ul class="list-pic">
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tbluecat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tredcat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tsmallcat" alt=""></a></li>
							<li><a href="#"><img src="http://www.getimg.in/img/50x50tblackcat" alt=""></a></li>
						</ul>
					</div>
				</div>
				<div class="mod-comment">
					<div class="mod-comment-list">
						<?php if($imgcomment): ?>
							<ul class="list">
								<?php foreach ($imgcomment as $item):?>
								<li class="list-item">
									<div class="mod-avatar-txt">
										<a href="#" class="avatar-wrap"><img src="<?php echo($item['uavatar']) ;?>" alt="" class="avatar"></a>
										<div class="txt-wrap">
											<p class="nickname-wrap"><a href="#" class="nickname"><?php echo($item['uname']) ;?></a> <span class="date">- <?php echo($item['comment_date']) ;?>：</span></p>
											<p><?php echo($item['comment_text']) ;?></p>
										</div>
									</div>
								</li>
								<?php endforeach;?>
							</ul>					
						<?php else: ?>					
						<?php endif;?>
						
					</div>
					<div class="mod-comment-report">
						<div class="avatar-wrap">
							<img src="http://www.getimg.in/img/50x50tsunyanzi" alt="" class="avatar">
						</div>
						<div class="report-container">
							<div class="report-textarea-wrapper">
								<textarea  id="" class="report-textarea"></textarea>
							</div>
							<div class="report-op-wrapper">
								<a href="#" class="btn-M btn-submit">提交</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="single-side">
				<div class="share-op">
					<h3>分享到：</h3>
					<ul class="share-btn-group">
						<li>
							<a href="#" title="新浪微博" class="ui-icon share-btn icon-weibo-M">新浪微博</a>
						</li>
						<li>
							<a href="#" title="QQ空间" class="ui-icon share-btn icon-weibo-M">QQ空间</a>
						</li>
						<li>
							<a href="#" title="新浪微博" class="ui-icon share-btn icon-weibo-M">新浪微博</a>
						</li>
						<li>
							<a href="#" title="QQ空间" class="ui-icon share-btn icon-weibo-M">QQ空间</a>
						</li>
					</ul>
				</div>
				<div class="related-info">
					<h3>喜欢这只喵的还喜欢：</h3>
					<ul class="related-info-list">
						<li><a href=""><img src="http://getimg.in/50x50tbigcat" alt=""></a></li>
						<li><a href=""><img src="http://getimg.in/50x50tbigcat" alt=""></a></li>
						<li><a href=""><img src="http://getimg.in/50x50tbigcat" alt=""></a></li>
						<li><a href=""><img src="http://getimg.in/50x50tbigcat" alt=""></a></li>
						<li><a href=""><img src="http://getimg.in/50x50tbigcat" alt=""></a></li>
						<li><a href=""><img src="http://getimg.in/50x50tbigcat" alt=""></a></li>
						<li><a href=""><img src="http://getimg.in/50x50tbigcat" alt=""></a></li>
						<li><a href=""><img src="http://getimg.in/50x50tbigcat" alt=""></a></li>
					</ul>
				</div>
			</div>
</div>