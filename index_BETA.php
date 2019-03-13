<?php include('includes/header.html') ?>

<div class="PC">
	<div id="MENUSIDE">
		<div id="MENUSIDEindent">
			<span id="LOGO" class="bordersOfMenuSide">
				<img alt="logo" src="showcase/resources/images/logo.svg" />
				<img id="BlueLogo" alt="logo" src="showcase/resources/images/logoBlue.svg" class="hiddenLogo"/>
			</span>
		</div> 
	</div>

<!-- 	<div id="CONTENTSIDE">
		<div id="CONTENTSIDEindent">
			<div id="SourceContentSide" class="ContentSideSections Source">
				<div class="Content100 overHidden TextShadow">
					<?php include('pages/register.php'); ?> 
				</div>
			</div>
		</div>
	</div> -->





            <div id="CONTENTSIDE">
                <div id="CONTENTSIDEindent">

                    <!-- header bar start-->
                    <div class="ContentSideSections" id="PFTopLinksCover" style="height:60px;">
                        <a id="LOGOTEXTSIDE" href="/">
                            <span class="dispBlock logoDarkText fontSize30">PrimeUI</span>
                            <span class="dispBlock logoBlueText fontSize30 mediumFont">SHOWCASE</span>
                        </a>

                        <a href="http://forum.primefaces.org/viewforum.php?f=16" class="PFTopLinks floatRight boldFont"><img alt="mockosx" src="showcase/resources/images/community.svg" /><span class="PFDarkText">Forum</span></a>

                        <span class="PFTopLinks floatRight boldFont cursorPointer" id="themeSwitcher">
                            <img src="showcase/resources/images/themeswitcher.svg" /><span class="PFDarkText">Free Themes</span>
                            <div id="GlobalThemeSwitcher" class="navOverlay">
                                <a href="#" data-theme="afterdark"><span class="ui-theme ui-theme-afterdark"></span><span class="ui-text">Afterdark</span></a>
                                <a href="#" data-theme="afternoon"><span class="ui-theme ui-theme-afternoon"></span><span class="ui-text">Afternoon</span></a>
                                <a href="#" data-theme="afterwork"><span class="ui-theme ui-theme-afterwork"></span><span class="ui-text">Afterwork</span></a>
                                <a href="#" data-theme="aristo"><span class="ui-theme ui-theme-aristo"></span><span class="ui-text">Aristo</span></a>
                                <a href="#" data-theme="black-tie"><span class="ui-theme ui-theme-black-tie"></span><span class="ui-text">Black-Tie</span></a>
                                <a href="#" data-theme="bluesky"><span class="ui-theme ui-theme-bluesky"></span><span class="ui-text">Bluesky</span></a>
                                <a href="#" data-theme="bootstrap"><span class="ui-theme ui-theme-bootstrap"></span><span class="ui-text">Bootstrap</span></a>
                                <a href="#" data-theme="casablanca"><span class="ui-theme ui-theme-casablanca"></span><span class="ui-text">Casablanca</span></a>
                                <a href="#" data-theme="cruze"><span class="ui-theme ui-theme-cruze"></span><span class="ui-text">Cruze</span></a>
                                <a href="#" data-theme="dark-hive"><span class="ui-theme ui-theme-dark-hive"></span><span class="ui-text">Dark-Hive</span></a>
                                <a href="#" data-theme="delta"><span class="ui-theme ui-theme-delta"></span><span class="ui-text">Delta</span></a>
                                <a href="#" data-theme="dot-luv"><span class="ui-theme ui-theme-dot-luv"></span><span class="ui-text">Dot-Lov</span></a>
                                <a href="#" data-theme="eggplant"><span class="ui-theme ui-theme-eggplant"></span><span class="ui-text">Eggplant</span></a>
                                <a href="#" data-theme="excite-bike"><span class="ui-theme ui-theme-excite-bike"></span><span class="ui-text">Excite-Bike</span></a>
                                <a href="#" data-theme="flick"><span class="ui-theme ui-theme-flick"></span><span class="ui-text">Flick</span></a>
                                <a href="#" data-theme="glass-x"><span class="ui-theme ui-theme-glass-x"></span><span class="ui-text">Glass-X</span></a>
                                <a href="#" data-theme="home"><span class="ui-theme ui-theme-home"></span><span class="ui-text">Home</span></a>
                                <a href="#" data-theme="hot-sneaks"><span class="ui-theme ui-theme-hot-sneaks"></span><span class="ui-text">Hot-Sneaks</span></a>
                                <a href="#" data-theme="humanity"><span class="ui-theme ui-theme-humanity"></span><span class="ui-text">Humanity</span></a>
                                <a href="#" data-theme="le-frog"><span class="ui-theme ui-theme-le-frog"></span><span class="ui-text">Le-Forg</span></a>
                                <a href="#" data-theme="midnight"><span class="ui-theme ui-theme-midnight"></span><span class="ui-text">Midnight</span></a>
                                <a href="#" data-theme="mint-choc"><span class="ui-theme ui-theme-mint-choc"></span><span class="ui-text">Mint-Choc</span></a>
                                <a href="#" data-theme="overcast"><span class="ui-theme ui-theme-overcast"></span><span class="ui-text">Overcast</span></a>
                                <a href="#" data-theme="pepper-grinder"><span class="ui-theme ui-theme-pepper-grinder"></span><span class="ui-text">Pepper-Grinder</span></a>
                                <a href="#" data-theme="redmond"><span class="ui-theme ui-theme-redmond"></span><span class="ui-text">Redmond</span></a>
                                <a href="#" data-theme="rocket"><span class="ui-theme ui-theme-rocket"></span><span class="ui-text">Rocket</span></a>
                                <a href="#" data-theme="sam"><span class="ui-theme ui-theme-sam"></span><span class="ui-text">Sam</span></a>
                                <a href="#" data-theme="smoothness"><span class="ui-theme ui-theme-smoothness"></span><span class="ui-text">Smoothness</span></a>
                                <a href="#" data-theme="south-street"><span class="ui-theme ui-theme-south-street"></span><span class="ui-text">South-Street</span></a>
                                <a href="#" data-theme="start"><span class="ui-theme ui-theme-start"></span><span class="ui-text">Start</span></a>
                                <a href="#" data-theme="sunny"><span class="ui-theme ui-theme-sunny"></span><span class="ui-text">Sunny</span></a>
                                <a href="#" data-theme="swanky-purse"><span class="ui-theme ui-theme-swanky-purse"></span><span class="ui-text">Swanky-Purse</span></a>
                                <a href="#" data-theme="trontastic"><span class="ui-theme ui-theme-trontastic"></span><span class="ui-text">Trontastic</span></a>
                                <a href="#" data-theme="ui-darkness"><span class="ui-theme ui-theme-ui-darkness"></span><span class="ui-text">UI-Darkness</span></a>
                                <a href="#" data-theme="ui-lightness"><span class="ui-theme ui-theme-ui-lightness"></span><span class="ui-text">UI-Lightness</span></a>
                                <a href="#" data-theme="vader"><span class="ui-theme ui-theme-var"></span><span class="ui-text">Vader</span></a>
                            </div>
                        </span>
                        <span class="PFTopLinks floatRight boldFont cursorPointer" id="PremiumLayouts">
                            <img src="showcase/resources/images/layouts.svg" /><span class="PFDarkText">Premium Layouts</span>
                            <div id="PremiumLayoutsPanel" class="navOverlay">
                                <a href="http://www.primefaces.org/layouts/modena-primeui"><span class="ui-text">Modena</span></a>
                                <a href="http://www.primefaces.org/layouts/rio-primeui"><span class="ui-text">Rio</span></a>
                                <a href="http://www.primefaces.org/layouts/adamantium-primeui"><span class="ui-text">Adamantium</span></a>
                            </div>
                        </span>
                        <a href="https://github.com/primefaces/primeui/releases" class="PFTopLinks floatRight boldFont hashed"><img alt="mockosx" src="showcase/resources/images/download.svg" /><span class="PFDarkText">Download</span></a>
                        <a href="setup.html" class="PFTopLinks floatRight boldFont marginRight20 hashed"><img alt="mockosx" src="showcase/resources/images/setup.svg" /><span class="PFDarkText">QuickStart</span></a>

                        <div class="mobileLogoCover">
                            <img src="showcase/resources/images/logoDark.svg" style="height:30px;" class="floatLeft marginRight10" />
                            <span class="dispBlock logoDarkText fontSize14 floatLeft">PrimeUI <span class="dispBlock logoBlueText fontSize14 mediumFont">SHOWCASE</span></span>
                        </div>

                    </div>
                    <!-- header bar end-->

                    <div id="widgetdemo">
                        <div class="ContentSideSections overHidden">
   
                          <?php include('pages/register.php'); ?> 
                        </div>



                        <!-- <div class="ContentSideSections overHidden">
                            <div class="Content33 floatLeft overHidden" style="min-height:200px">
                              
                            </div>
                            <div class="Content33 floatLeft overHidden" style="min-height:200px">
                          
                            </div>
                            <div class="Content33 floatLeft overHidden" style="min-height:200px">
                               
                            </div>
                        </div> -->
                    </div>























</div>
<?php include('includes/footer.html'); ?>