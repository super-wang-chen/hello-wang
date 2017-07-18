$(function(){
	$('.address-info').click(function(){
		$(this).addClass('default').siblings().removeClass('default');
	});
	$('.delete').click(function(){
		if(confirm('确定是否删除')){
			var url=$(".content").attr("name");
			var id=$(this).attr("name");
			$.ajax({
				url:url,
				data:"id="+id,
				success:function(e){
				}
			})
			$(this).parents('.address-info').next().addClass('default');
			$(this).parents('.address-info').remove();
		};
	});

	// 总价
	function countPrice(){
		var totalPrice = 0.00;
		var checkedObj = $('tbody tr .price');
		checkedObj.each(function(){
			var price = $(this).text();
			price = parseFloat(price.substring(1,7));
			totalPrice = (+ totalPrice + price);
		});	
		$('.totalPrice').text(totalPrice.toFixed(2));
	};
	// 计算商品总数
	function countNum(){
		var checkedObj = $('tbody tr .number');
		var totalNum = 0;
		checkedObj.each(function(){
			var num = $(this).text();
			num = parseFloat(num);
			totalNum = + totalNum + num;
			$('.numTotal').text(totalNum);
		});
	};
	countNum();
	countPrice();
});