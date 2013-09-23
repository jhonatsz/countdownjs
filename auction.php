<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="jquery.countdown.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.countdown.js"></script>
	<script type="text/javascript">
		// date_format(year, month, day, hours, minutes, seconds, milliseconds)
		$(function () {
			var shortly = new Date(2013,8,28,-6,-23);
			$('.timer').countdown({
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
		.timer { width: 240px; height: 45px;text-align:center; }
	</style>
</head>
<body>
	<table width='100%' height='100%'>
		<tr>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Cannon 4S'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Nikkon D440'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Iphone 5'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Lennovo G470'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>
		</tr>
		<tr>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=MacBook Air'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Toyota Vios'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Headset'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Mousepad'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>
		</tr>
	</table>
</body>
</html>