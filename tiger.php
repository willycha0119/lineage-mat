<?php
header("Content-Type:text/html; charset=UTF-8");
?>
<script>

for(var i = 0 ; i < 1 ; i++) {
	var popup = window.open('http://www.tigerair.com/tw/zh/real_deals.php', '_blank', 'width=500,height=500');

	setTimeout(function(){ console.log(popup.document.documentElement.outerHTML); }, 3000);

	
}

</script>