<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Reddle
 * @since Reddle 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="masthead" role="banner">

<!--BEGIN CES CUSTOM HEADER-->
		 <nav class="top-bar" data-topbar>
		          
		        <div>
		            <ul class="title-area">            
		            <li class="name hide-for-small">
		             <a href="http://97.77.231.42:8081/default.aspx"><img src="wp-content/themes/CES/img/home_logo.png" alt="Home Logo" width="180" height="140"/></a></li>
		            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		            <li class="toggle-topbar menu-icon mobilenav"><a style="color: #C60C30;" href="#">Menu</a></li>
		            <li id="sitetitle"><a style="color: #FFF;" href="http://97.77.231.42:8081/default.aspx">City Electric Supply</a></li>
		            </ul>
		        </div>
		         
		        <section class="top-bar-section">          
		          <div class="large-10 columns"> 
		          
		          
		              <div class="navheight">


		<asp:Panel ID="Loginpanel" runat="server" Visible="true">
		        <ul style="display:inline-block;" id="accountlogin" class="hide-for-small right">
		                      <li style="padding: 0px;" id="Li1" runat="server"><a style="padding: 0px;"href="http://97.77.231.42:8081/login.aspx">Login</a>&nbsp;</li>
		                      <li style="padding: 0px;"><div style="color: #FFF; padding: 7px 6px 0px 6px;">|</div>&nbsp;</li>
		                      <li style="padding: 0px;" id="Li2" runat="server"><a style="padding-right: 15px;"href="http://97.77.231.42:8081/login.aspx">Sign Up</a> </li>
		        </ul>


		   <!-- <a style="padding: 0px;"href="login.aspx">Login</a>&nbsp;;&nbsp  <a style="padding: 0px;"href="login.aspx">Sign Up</a> -->
		</asp:Panel>

		<asp:Panel ID="LogoutPanel" runat="server" Visible="false">


		            <ul style="display:inline-block;" id="accountlogin" class="hide-for-small right">
		                    <li style="padding: 0px;" id="Li7" runat="server">
		                       <a style="padding: 0px;"href="http://97.77.231.42:8081/Myaccount.aspx"> <asp:Label ID="LoginName" runat="server" Text=""></asp:Label></a>&nbsp;&nbsp;</li>
		                      <!--<li style="padding: 0px;" id="Li3" runat="server"><a style="padding: 0px;"href="http://97.77.231.42:8081/Myaccount.aspx">My Account</a>&nbsp;</li>
		                      <li style="padding: 0px;"><div style="color: #FFF; padding: 7px 6px 0px 6px;">|</div>&nbsp;</li>
		                      <li style="padding: 0px;" id="Li4" runat="server"><a style="padding-right: 15px;" href="http://97.77.231.42:8081/Logout.aspx">Logout</a> </li>-->
		                  </ul>
		</asp:Panel>

		              </div>
		             


		              <div>
		                <ul class="right">
		                    
		                   <li class="has-dropdown hide-for-medium-up"> <a href="#">Login | Sign Up </a> 
		                      <ul class="dropdown">
		                      <li style="padding: 0px;" id="Li5" runat="server"><a style="padding: 0px;"href="http://97.77.231.42:8081/login.aspx">Login</a></li>
		                      <li style="padding: 0px;" id="Li6" runat="server"><a style="padding: 0px;"href="http://97.77.231.42:8081/login.aspx">Sign Up</a> </li>
		                      </ul>  

		                  <li> <a href="http://97.77.231.42:8081/default.aspx">Home</a> </li>
		                  <li class="has-dropdown"> <a href="#" class="active">Company</a>
		                    <ul class="dropdown">
		                      <li> <a href="http://97.77.231.42:8081/aboutus.aspx">About Us</a> </li>
		                      <li> <a href="http://97.77.231.42:8081/timeline.aspx">Company Timeline</a> </li>
		                      <li> <a href="http://97.77.231.42:8081/login.aspx">Open An Account</a> </li>
		                      <li> <a href="http://97.77.231.42:8081/outreach.aspx">Company Outreach</a> </li>
		                      <li> <a href="http://97.77.231.42:8081/CEScareers.aspx">Careers</a> </li>
		                    </ul>       
		                  </li>

		                  <li class="has-dropdown"> <a href="#">Products</a> 
		                      <ul class="dropdown">
		                      <li> <a href="http://97.77.231.42:8081/madeinamerica.aspx">Made In America</a> </li>
		                      <li> <a href="http://97.77.231.42:8081/products.aspx">Line Card</a> </li>
		                    </ul>       
		                  </li>

		                  <li> <a href="http://97.77.231.42:8081/branchlocator.aspx">Branch Locator</a> </li>
		                  <li> <a href="http://97.77.231.42:8081/mobile.aspx">Mobile App</a> </li>
		                  <li class="has-dropdown"> <a href="#">Resources</a>
		                    <ul class="dropdown">
		                      <li> <a href="http://97.77.231.42:8081/calculator.aspx">Calculators</a> </li>
		                      <li> <a href="http://97.77.231.42:8081/catalogs.aspx">Catalogs</a> </li>
		                      <li> <a href="http://97.77.231.42:8081/references.aspx">Electrical References</a> </li>                   
		                    </ul>
		                  </li>
		                  <li  class="has-dropdown"> <a href="#">Community</a>
		                    <ul class="dropdown">
		                     <li> <a href="https://www.facebook.com/cityelectricsupply" target="_blank">Facebook</a> </li> 
		                     <li> <a href="https://twitter.com/SocialCityzen" target="_blank">Twitter</a> </li> 
		                     <li> <a href="http://www.linkedin.com/company/city-electric-supply" target="_blank">Linkedin</a> </li>
		                     <li> <a href="http://www.youtube.com/user/SocialCITYzen" target="_blank">Youtube</a> </li>  
		                    </ul>
		                  </li>     
		                  <li> <a href="http://97.77.231.42:8081/ContactUs.aspx">Contact Us</a> </li>   
		                </ul>
		              </div>
		           </div>
		        </section>
		    </nav>
<!--END CES CUSTOM HEADER-->

	</header><!-- #masthead -->

	<div id="main">