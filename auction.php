<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="jquery.countdown.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.countdown.js"></script>
	<script type="text/javascript">
		// date_format(year, month, day, hours, minutes, seconds, milliseconds)
		$(function () {
			var shortly = new Date(2013,9,5,-6,-23);
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
			
			$('.login-form').submit(function(){
				var isFormValid = true;
				$('.login-form #logfields').each(function(){
					var Uname = $(".uname").val();
					var Pword = $(".pword").val();
					if($.trim(Uname).length == 0 || $.trim(Pword).length == 0){
						alert('Fill Up empty fields.!');
					}
					else if($.trim(Uname).toLowerCase() == 'demo' && $.trim(Pword).toLowerCase() == 'demo'){
						alert('Inputs are valid.!');
					}
					else{
						alert('Incorrect Login Details.!');
					}
				});
				 if (!isFormValid) alert("Please fill in all the required fields (highlighted in red)");
				//return isFormValid;
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
			<td width='100%'colspan="4" align='center'><b>Login [user:<span  style='color:red;'>demo</span>:pass:<span style='color:red;'>demo</span>]</b> 
				<form action='#' method='post' class='login-form'>
					<label>User: </label><input id='logfields' class='uname' type='text' placeholder='Username/Email'>
					<label>Pass: </label><input id='logfields' class='pword' type='password' placeholder='Password'>
					<input type='submit' value='Signin'>
				</form>
			</td>
			<td height='120'></td>
		</tr>
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
		<!--<tr>
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
		</tr>-->
	</table>
</body>
</html>