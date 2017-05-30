<a id="scrollUp" href="#top" style="position: fixed; z-index: 10;"><i class="fa fa-angle-up"></i></a>
<style>
#scrollUp {
	border-radius:100%;
	background-color: #777;
	color: #eee;
	font-size: 40px;
	line-height: 1;text-align: center;text-decoration: none;bottom: 1.5em;right: 10px;overflow: hidden;width: 46px;
	height: 46px;
	border: none;
	opacity: 0.6;
}
.utils-modal {
  display: block;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  position: fixed;
  z-index: 4990;
  text-align: center;
  font-size: 16px;
  word-break: break-all;
}
.utils-modal .utils-modal-mask {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: fixed;
    display: -webkit-box;
    -webkit-box-pack: center;
    -webkit-box-align: center;
    background: rgba(0, 0, 0, .5);
    z-index: 5000;
}
.utils-modal .utils-modal-con {
      width: 80%;
      max-width: 80%;
      max-height: 80%;
      overflow: hidden;
      background: #fff;
      border-radius: 3px;
}
.utils-modal .utils-modal-body {
        padding: 10px;
        display:-webkit-box;
    line-height:45px;
}
.utils-modal .utils-modal-body .utils-modal-input {
    -webkit-box-flex: 1;
    //padding: 0 5px;
    border: 1px solid #dfdfdf;
    border-radius: 3px;
}
.utils-modal .utils-modal-body .utils-modal-input input{
    border: none;
    background: transparent;
        width: 100%;
}
.utils-modal .utils-modal-footer {
        border-top: 1px solid #dfdfdf;
        display: -webkit-box;
        line-height: 45px;
}
.utils-modal .utils-modal-footer div {
  width: 0;
  -webkit-box-flex: 1;
  border-right: 1px solid #dfdfdf;
}
.utils-modal .utils-modal-footer div:last-child {
  border-right: none;
}
</style>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.json.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/common.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.more.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/utils.js" ></script> 
<script src="__PUBLIC__/swiper/js/jquery.swiper.min.js"></script> 
<script src="__TPL__/js/ectouch.js"></script> 
<script src="__TPL__/js/simple-inheritance.min.js"></script> 
<script src="__TPL__/js/code-photoswipe-1.0.11.min.js"></script> 
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script> 
<script src="__TPL__/js/jquery.scrollUp.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/validform.js" ></script>
<script language="javascript">
	/*banner滚动图片*/
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        loop: true,
        autoplay : 2000
    });
	/*弹出评论层并隐藏其他层*/
	function openSearch(){
		if($(".con").is(":visible")){
			$(".con").hide();	
			$(".search").show();
		}
	}
	function closeSearch(){
		if($(".con").is(":hidden")){
			$(".con").show();	
			$(".search").hide();
		}
	}
	function scan(){
	var html = '<div id="scanHome" class="utils-modal">' +
                        '<div class="utils-modal-mask"><div class="utils-modal-con">';
                        html += '<div class="utils-modal-body"><div class="utils-modal-tips">请输入卡密：</div><div class="utils-modal-input"><input type="text" id="scanHomeInput"></div></div>';
                        html += '<div class="utils-modal-footer"><div class="cancel">取消</div><div class="confirm">确认</div></div>';
                    html += '</div></div></div>';
                    var modal=$('#scanHome');
                    if(modal.length>0){
                    	modal.show();
                    }else{
                    	$('body').append(html);   
       					//$('#scanHome .utils-modal-mask').on('click',function(){
       					//	$('#scanHome').hide();
       					//}); 
       					$('#scanHome .cancel').on('click',function(){
       						$('#scanHome').hide();
       					});
       					$('#scanHome .confirm').on('click',function(){
       						var scanHomeInput=$('#scanHomeInput').val();
       						if(scanHomeInput){
       						alert(scanHomeInput)
       						}
       					});         
                    }
		wx.scanQRCode({
    needResult: 1, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，
    scanType: ["qrCode","barCode"], // 可以指定扫二维码还是一维码，默认二者都有
    success: function (res) {
    var result = res.resultStr;
    alert(result);
    //TODO
}
});
	}
</script>
