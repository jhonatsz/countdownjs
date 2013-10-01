<?php
	session_start();
	if(@$_POST['login']){
	//@$_SESSION['UNAME'] = $_POST['UNAME'];
	//@$_SESSION['PWORd'] = $_POST['PWORD'];
	@$_SESSION['LOGS']	= TRUE;
	}
	if(@$_POST['logout']){
		session_destroy();
	}
	//session_destroy();
	
?>
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
						//alert('Fill Up empty fields.!');
						isFormValid = false;
					}
					else if($.trim(Uname).toLowerCase() == 'demo' && $.trim(Pword).toLowerCase() == 'demo'){
						//alert('Inputs are valid.!');
						isFormValid = true;
					}
					else{
						//alert('Incorrect Login Details.!');
						isFormValid = false;
					}
				});
				 if (!isFormValid) alert("Please use provided login credentials.. !");
				 
				return (isFormValid === true)? true : false ; 
				//return isFormValid;
			});
		});
		
	</script>
	<style type="text/css">
		.timer { width: 240px; height: 45px;text-align:center; }
		a:hover{
			background-color:green;
		}
	</style>
</head>
<body>
	<table width='100%' height='100%'>
		<?php if(isset($_SESSION['LOGS']) == FALSE){?>
		<tr>
			<td width='100%'colspan="4" align='center'><b>Login [user:<span  style='color:red;'>demo</span>:pass:<span style='color:red;'>demo</span>]</b> 
				<form action='auction.php' method='post' class='login-form'>
					<label>User: </label><input name='uname' id='logfields' class='uname' type='text' placeholder='Username/Email'>
					<label>Pass: </label><input name='pword' id='logfields' class='pword' type='password' placeholder='Password'>
					<input type='submit' value='Signin' name='login'>
				</form>
			</td>
			<td height='120'></td>
		</tr>
		<?php }else{ ?>
		<tr>
			<td width='100%'colspan="4" align='center' style='color:orange;font-weight:bold;padding:5px 0 5px 0;font-size:50px;'>
				<a class='Bidnow' href='bid.php' target='_tab' style='text-decoration:none;color:orange;'>BID NOW.. !</a>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<!--<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Cannon 4S'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>-->
			<!--<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Nikkon D440'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><button> Bid </button></div>
			</td>-->
			<td width='25%'></td>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Iphone 5'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><a href='bid.php' target='_tab'>Bid</a> </div>
			</td>
			<td width='25%' align='center'>
				<img src='http://placehold.it/242x200&text=Lennovo G470'>
				<div class='timer'></div>
				<div class='bidder'> $1.00 </div>
				<div class='bidder'> Kaii </div>
				<div><a href='bid.php' target='_tab'>Bid</a></div>
			</td>
			<td width='25%'></td>
		</tr>
		<?php if(isset($_SESSION['LOGS']) == TRUE){?>
		<tr>
			<td width='100%'colspan="4" align='center' style='color:orange;font-weight:bold;padding:5px 0 5px 0;font-size:50px;'>
				<form method='post' action='auction.php'>
				<input type='submit' style='text-decoration:none;color:blue;' value='Log out' name='logout'>
				</form>
			</td>
		</tr>
		<?php } ?>
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