
</div>
<!--主体 End-->
<!--底部 Str-->
<div class="footer"><div class="footer-inner wrapper">Copyright <span>&copy;</span> <a href="http://himeters.com/">meters</a>/<a href="http://hikola.com/">kola</a> All Rights Reserved.</div></div>
<!--底部 End-->
</div>
<a href="#" class="btn-go-top" id="goTop">回到顶部</a>
<!--大图查看弹出层 Str-->
<div id="zoomPreview" class="zoom-preview">
	<div id='popPreview' class='pop-wrapper pop-preview'>
		<div id="innerPreview" class='pop-inner'>
		</div>
	</div>
</div>
<!--大图查看弹出层 End-->
</body>
 
	<script type="text/javascript" src="<?php echo(base_url('public/js\/').'jquery-1.7.2.min.js');?>"></script>	
	<script type="text/javascript" src="<?php echo(base_url('public/js\/').'jquery.imgareaselect.pack.js');?>"></script>
	<script type="text/javascript" src="<?php echo(base_url('public/js\/').'jquery.masonry.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo(base_url('public/js\/').'bootstrap.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo(base_url('public/js\/').'jquery.mousewheel.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo(base_url('public/js\/').'jsTemp.js');?>"></script>
	<script type="text/javascript" src="<?php echo(base_url('public/js\/').'miaomi.js');?>"></script>
	<script type="text/javascript">
	$(function(){

		// 瀑布流的方法
		function do_masonry()
		{
			var $container = $('#mainList');

			$container.imagesLoaded( function(){//imagesloaded 方法导致ie8，ie7下瀑布流不生效
			  $container.masonry({
			    itemSelector : '.item',
			    isAnimated: !Modernizr.csstransitions
			  });
			  // 给图片加点击弹出层事件
			  $(".source_img").live("click",function(){
				  var img_source_url=$(this).attr("src");
				  if(img_source_url) img_source_url=img_source_url.slice(0,img_source_url.length-5)+"b.jpg";
				  var img_big_source_url="<img id='editimg_img' class='editing_img' src='"+img_source_url+"' />";
				  $("#edit_inner").html(img_big_source_url);
				  $("#myModal").modal({
				  	keyboard: false
				  	
				  });
				  $("#Src_URL").val($("#editimg_img").attr("src"));
				  $("#edit_inner").imgAreaSelect({   
				        aspectRatio: '640:960',  //设置缩放比例  
				        handles: true,  //显示手型  
				        fadeSpeed: 200,  
				        onSelectChange: preview //选区改变后返回函数  
				    });  
				});

			  
			});
		}

		function preview(img, selection) {  
		    if (!selection.width || !selection.height)  
		        return;  
		    
		  
		    $('#Edit_X1').val(selection.x1);  
		    $('#Edit_X2').val(selection.x2);  		     
		    $('#Edit_Y1').val(selection.y1);  
		    $('#Edit_Y2').val(selection.y2);  
		    $('#Edit_W').val($("#editimg_img")[0].width);  
		    $('#Edit_H').val($("#editimg_img")[0].height);  
		    
		}

  



			  

//		do_masonry();



		});
	</script>
	
</html>