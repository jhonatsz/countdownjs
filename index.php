<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="jquery.countdown.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.countdown.js"></script>
	<script type="text/javascript">
		// date_format(year, month, day, hours, minutes, seconds, milliseconds)
		$(function () {
			var shortly = new Date(2013,8,18,-6,-23);
			$('#timer').countdown({
				until: shortly,
				format:'HMS',
			});
			
			$('.bidder').click(function() { 
				shortly.setSeconds(shortly.getSeconds() + 5.5); 
				$('#timer').countdown('option', {until: shortly}); 
			});
			
			$('.bidder').click(function(){
				 var curBid = parseFloat($('#currentBidprice').text());
				 var addBid = parseFloat($(this).val());
				 var upBid = (curBid + addBid).toFixed(2);
				 var lastBidder = $(this).attr('name');
				 $('#currentBidprice').html(upBid);
				 $('#lastbidder').html(lastBidder);
			});
			
			
		});
	</script>
	<style type="text/css">
		#timer { width: 240px; height: 45px; }
	</style>
</head>
<body>
<div style='border:0.5px solid gray;width:240px;text-align:center;font-family:verdana;font-weight:bold;color:firebrick;height:100px;'>BEACH VOUCHER</div>
<div id='timer'></div><div id='lastbidprice' style='border:0.5px solid gray;width:240px;text-align:center;font-family:verdana;font-weight:bold;color:green;'>$<span id='currentBidprice'>0.10</span></div><div id='lastbidder' style='border:0.5px solid gray;width:240px;text-align:center;font-family:verdana;font-weight:bold;'>Kaii Stark</div><br/>

<div id='bidder_button'>
<label><span>Kai Stark<span> : </label><button id='bidder1' class='bidder' value='1.00' name='Kaii Stark'> Bid $1.00 </button><br/>
<label><span>John Doe</span> : </label><button id='bidder2' class='bidder' value='2.00' name='John Doe'> Bid $2.00</button><br/>
<label><span>David Su : </span></label><button id='bidder3' class='bidder' value='3.00' name='David Su'> Bid $3.00</button><br/>
</div>
</body>
</html>