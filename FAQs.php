<?php

	$name = '';
	$email = '';
	$message = '';
		
	// Error messages
	$nameError = '';
	$emailError = '';
	$messageError = '';
		
	// Set default message
	$message = '';
		
	// Set array of errors
	$errors = array();
		
	// Set default that there is no errors
	$noErrors = true;
		
	// haveErrors is the opposite of noErrors
	$haveErrors = !$noErrors;
		
	require_once('validations/faqresult.php');
		
	// for successful POST
	if ($noErrors && $userArriveBySubmittingAForm) {
				
		$messages = "\t\t" . '<font color="green">Success!</font><br />' . "\n";
		
		<a href="mailto:manish@simplygraphix.com?subject=Feedback for 
webdevelopersnotes.com&body=The Tips and Tricks section is great
&cc=anotheremailaddress@anotherdomain.com
&bcc=onemore@anotherdomain.com">Send me an email</a>
		
	
		$to = 'andy_ang94@hotmail.com';
		$subject = 'Send a Feedback/Ask a Question';
		$from = $email;
		$headers = 'From:' . $from . "\r\n";

		mail($to, $subject, $message, $headers);
									
	// for error validation
	} elseif ($haveErrors && $userArriveBySubmittingAForm) {
			
		$messages = "\t\t" . '<font color="red">Failure!</font><br />' . "\n";
		
		// for displaying form
		} else if ($userArriveByClickingOrDirectlyTypeURL) {
			$messages = '';
		}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Trading With Friends - Learning Platform For You - FAQs</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
			<script language="JavaScript">

var nbSearch=0;

function findInPage(str) {
  var txt, i, found;
  if (str=="") return false;

  if ((document.layers)||(window.sidebar)) {
    if (!window.find(str)) {
	  alert("End of page.\n"+'"'+str+'" finded '+nbSearch+" times.");
	  while(window.find(str, false, true)) {nbSearch++;}
	} 
    else
      nbSearch++;
    if (nbSearch == 0)
      alert('"'+str+'" is not found');
  }

  if (document.all) {
    txt = window.document.body.createTextRange();
    for (i = 0; i <= nbSearch && (found = txt.findText(str)) != false; i++) {
      txt.moveStart("character", 1);
      txt.moveEnd("textedit");
    }
    if (found) {
      txt.moveStart("character", -1);
      txt.findText(str);
      txt.select();
      txt.scrollIntoView();
      nbSearch++;
    } else {
      if (nbSearch > 0) {
	  	  alert("End of page.\n"+'"'+str+'" finded '+nbSearch+" times.");

        nbSearch = 0;
        findInPage(str);
      } else { 
	    alert('"'+str+'"  is not found');
	  }
    }
  }

  return false;
}

</script>
</head>
<body>
	<div class="page">
		<div class="header">
			<a href="index.html" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul class="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="company.html">Company Analysis</a>
				</li>
				<li>
					<a href="glossary.html">Glossary</a>
				</li>
				<li>
					<a href="https://apps.facebook.com/tradingwithfriends/" target="_blank">Trading With Friends</a>
				</li>
				<li>
					<a href="http://astartalk.forumotion.com/" target="_blank">Forum</a>
				</li>
			    <li class="selected">
					<a href="FAQs.php">FAQs</a>
				</li>
			</ul>
		</div>
			<div style="position:fixed; right:0; top:0;">
		    <form name="search" onSubmit="return findInPage(this.keyword.value);"><br>
                <input name="keyword" type="text" size=25 onFocus="nbSearch=0; if (this.value=='Keywords') {this.value=''}" value="">
                <input type="submit" value="Search">
            </form>
        </div>
		
		<div class="body">
			<div class="contact">
				<div>
					<div>
						<h1>Start your learning journey today!</h1>
						<p>
							Lost? or do not know where and how to start to do your research? Fret not! "Trading with Friends" provides you with a friendly coummunity where everyone could share their ideas on Equities and such. Simply <a href="http://www.astartalk.forumotion.com">Click Here</a> to access the Forum. 
						</p>
					</div>
					<div>
						<h1>FAQs</h1>
						<ul class="first">
						    <li>
						        <h2>Website related</h2>
						      
								<h3> Q: Who are the targeted users for the website?</h3>
								<p>
								    The website targets people who are interested in equities. We welcome students, working adiuts and even through professionals who are lookong for somewhere to learn more about equities.
								</p>
								
								<h3> Q: Is it free to learn on the website?</h3>
								<p>
									Yes! With the webs, you can enjoy learning and researching everything about equities. 
								</p>
								
								<h3> Q: Does the website offer mobil services?</h3>
								<p>
									Phone support is not currently available. However, we  have a community forum where you can get help from the Webs community as well as Webs staff members.
								</p>
								
								<h3> Any more questions? Free to edit</h3>
								<p>
									
								</p>
								
							</li>
							<li>
							    <h2>Forum related</h2>
							    
								<h3> Q: Is it free for the forum?</h3>
								<p>
									Yes! You are able to access to the forum with registration and login. 
								</p>
								
								<h3> Q: Where can I access to the forum?</h3>
								<p>
									You can easily access to the forum by the link on the website as well as the application.
								</p>
								
							</li>
					
						</ul>
						<ul class="last">
							<li>
							    <h2>Facebook application related</h2>
							    
								<h3> Q: Is it free for the Facebook application?</h3>
								<p>
									Yes! You need to be a Facebook user before you access to the application.
								</p>
								
								<h3> Q: Which equities tradable on the application?</h3>
								<p>
									There are 20 static stocks with dynamic data for you to practice trading with your friends on the application. Those chosen equities are all highly tradable on the real markets. 
								
								<h3> Q: Does the data alive on the application?</h3>
								<p>
									We provide static stocks with dynamic data, whcih means the data of chosen equities is active, and is auto-refershed every 30 seconds. 
								</p>
								
								<h3> Q: How can I make money using the application?</h3>
								<p>
									You can practice trading equities here and we also offers the stop-loss order for you to make money easily!
								</p>
								
								<h3> Q: Does the application have interaction with Facebook friends?</h3>
								<p>
									You can compete with you Facebook friends who can make more money with trading equities on this app! Enjoy your game!
								</p>
							</li>
						</ul>
					</div>	
				</div>
				<div>
					<h4>Send a Feedback/Ask a Question</h4>
					<form method="post">
					<?php echo $messages; ?>
						<div>
							<b>Name:</b> <input type="text" name="name" size="20" maxlength="40" value="<?php echo $name; ?>">
							<font color="red"><?php echo $nameError; ?></font></br>
						
							<b>Email address:</b> <input type="text" name="email" size="20" maxlength="40" value="<?php echo $email; ?>">
							<font color="red"><?php echo $emailError; ?></font></br>
					
							<b>Message:</b> <input type="text" name="message" size="100" maxlength="150" value="<?php echo $message; ?>">
							<font color="red"><?php echo $messageError; ?></font></br>
						</div>
						<div>
							<input type="submit" id="submit" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div class="footer">
			<div class="about">
				<h3>About</h3>
				<div>
					This website is strictly for E-learning purposes. Non-commercial.
				</div>
			</div>
			
			<div class="contact">
				<h3>Contact</h3>
				<ul>
					<li>
						<span>Location :</span>
						<p>
							Temasek Polytechnic
						</p>
					</li>
					<li>
						<span>Email :</span>
						<p>
							customerservice@tradingwithfriends.com.sg
						</p>
					</li>
					<li>
						<span>Contact us :</span>
						<p>
							+65 6168 1688
						</p>
					</li>
				</ul>
			</div>
			
			<div class="connect">
				<a href="https://twitter.com/tradingwfriends/" target="_blank" id="twitter">twitter</a> <a href="https://www.facebook.com/tradingwithfriends/" target="_blank" id="facebook">facebook</a>
			</div>
			
			<p class="footnote">
				&#169; Copyright 2013. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>