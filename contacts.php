<?php
$title = 'Willow Nettica - Get in touch with us';
$keywords = 'web, design, development, front-end, branding, content management, bulk email, bulk sms, html5, responsive';
$description = 'Willow-Nettica was founded not only to produce well-designed websites and powerful branding, but to provide remarkably efficient online solutions that delivers results...';
include 'header.php';
?>
<header class="conthead">
    <div class="topbar">
        <div class="row wrap">
            <div class="small-6 large-6 columns logobox"><a href="/index.php"><img src="/img/logo_big.png" alt="Willow Nettica" /></a></div>
            <nav class="small-6 large-6 columns topnav cl-effect-5">
                <ul class="inline-list linkside right">
                    <li><a data-menuanchor="home" href="/index.php" class="homebtn"><span data-hover="Home">Home</span></a></li>
                    <li><a href="/services.php" class="servbtn"><span data-hover="Services">Services</span></a></li>
                    <li><a href="/portfolio.php" class="portbtn"><span data-hover="Portfolio">Portfolio</span></a></li>
                    <li><a href="/contacts.php" class="contbtn"><span data-hover="Contacts">Contacts</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<section>
        <div class="htxt">
            <div class="row wrap">
            	<h1>Contact Details</h1>
            	<div class="small-12 medium-4 columns">
                    <div class="cicons locico">79 Sir Lowry Rd,<br />Cape Town,</div>
                	<div class="cicons">+27 73 564 0764</div>
               	</div>
               	<div class="small-12 medium-4 columns" style="text-align: center;">
					<div class="center small-left" style="margin: auto; width: 120px">
                    	<div class="cicons fbico"><a href="https://www.facebook.com/willownettica" target="_blank">Facebook</a></div>
                    	<div class="cicons twico"><a href="https://twitter.com/willownettica" target="_blank">Twitter</a></div>
                    </div>
                </div>
                <div class="small-12 medium-4 columns">
                	<div class="right small-left">
                		<div class="cicons inico"><a href="http://linkd.in/1bMcRiA" target="_blank">LinkedIn</a></div>
                    	<div class="cicons gico"><a href="https://plus.google.com/u/0/105750471750794336610/posts" target="_blank">Google +</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="redbox">
            <div class="hstxt">
                <div class="row wrap">
                    <h2 class="white">Contact Us</h2>
                    <p class="formtxt white">Complete the form below to send us a quick email.</p>
                    <form>
                        <div class="small-12 medium-6 columns">
                            <input type="text" name="fullname" id="fullname" value="" /><label>Enter your full name</label>
                            <input type="text" name="email" id="email" value="" /><label>Enter your email address</label>
                            <div class="selectb">
                                <select>
                                    <option>Select Topic</option>
                                    <option>Support</option>
                                    <option>Get A Quote</option>
                                    <option>Design Query</option>
                                    <option>Just Saying Hi</option>
                                </select>
                            </div><label>Select inquiry type</label>
                        </div>
                        <div class="small-12 medium-6 columns">
                        	<textarea name="message" id="message"></textarea>
                        </div>
                        <div class="small-12 small-centered columns">
                        	<div class="allservbtn"><input type="submit" value="Send your message" /></div>
                        </div>
                    </form>                
                </div>
            </div>
        </div>
        <div class="lgreybox">
            <div class="map">
                <div data-interchange="[/imgmap.html, (small)], [/map.html, (medium)], [map.html, (large)]"></div>
            </div>
        </div>
<?php include 'footer.php'; ?>