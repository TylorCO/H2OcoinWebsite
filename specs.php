<?php
$menu = "menu_4";
$desc = "Official website of H2Ocoin - Charitable crypto-currency";
$title = "H2Ocoin - A coin for water charities";
include ('inc/header.php') ; ?>
	<aside class="a4">
		<ul>
			<li><a href="#top" class="icon2 top" title="back to the top"><span>top</span></a></li>
			<li class="inView selected"><a href="#specs" class="icon2 algos2" title="specs"><span>Specs</span></a></li>
			<li><a href="#howto" class="icon2 question" title="how to mine"><span>How to mine</span></a></li>
			<li><a href="#explorer" class="icon2 blocks" title="block explorer"><span>Block Explorer</span></a></li>
		</ul>
	</aside>
	<section id="specs" class="first triangle scroll">
		<article>
			<h1>H2O's specs</h1>
			<ul class="grid3">
				<li>
					<span class="icon coins"></span>
					<h3>Coins</h3>
					<span><span class="blue"><b>2,000,000,000</b></span> H2O</span><br />
					<h3>Premine</h3>
					<span><span class="blue"><b>2.5%</b></span> (50,000,000 H2O)</span>
				</li>
				<li>
					<span class="icon algos"></span>
					<h3>Algos</h3>
					<span>Scrypt Adaptive with <span class="blue"><b>-N</b></span> factor</span><br />
					<h3>Difficulty readjustment</h3>
					<span>Dark Gravity Wave <span class="blue"><b>3</b></span></span><br />
				</li>
				<li>
					<span class="icon blocks2"></span>
					<h3>Time per blocks</h3>
					<span>Time : <span class="blue"><b>60</b></span> seconds</span>
					<h3>Reward per blocks</h3>
					<span><span class="blue"><b>1,600</b></span> H2O</span>
				</li>
			</ul>
			<h3>About the premine</h3>
			<p>Premines in crypto are often synonymous with scam due to previous malicious events. H2O was created in March and we are still here and did not flee with the money. Better, the premine was used for 3 things :</p>
			<ul>
				<li>Payments for IPO investors</li>
				<li>Giveaways / bounties</li>
				<li>17.5 BTC donation to TheWaterProject on April 8th</li>
			</ul>
			<p>Proof about the donation : <a href="http://www.reuters.com/article/2014/04/17/idUSnGNX8w8PDv+1c6+GNW20140417">article</a> from Reuters and confirmation from TheWaterProject official twitter below :</p>
			<blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/H2Ocoin">@H2Ocoin</a> <a href="https://twitter.com/ThisWeeksCoin">@ThisWeeksCoin</a> Thanks so much for your very generous gift. Another amazing outpouring of support from the cryptocoin community!!</p>&mdash; The Water Project (@TheWaterProject) <a href="https://twitter.com/TheWaterProject/statuses/453555910896812032">8 Avril 2014</a></blockquote>
			<script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</article>
	</section>
	<section id="howto" class="shade triangle scroll">
		<article>
			<h2>How to mine ?</h2>
			<p>H2Ocoin is a Scrypt-N coin which requires special versions of mining softwares. It's to be noted that Scrypt-N mining halves the hashing-rate but as it is the same for everybody, the percentage of finding a block stays the same. And so do the rewards.</p>
			<p>The following tutorial is freely inspired of <a href="https://twitter.com/Zisef">Zisef</a>'s one findable on ThisWeeksCoin.com <a href="http://thisweekscoin.com/forum/index.php/topic,1196.0.html" title="">here</a>.
			<p class="ul"><span class="arrow2"></span><b>GPU mine</b> using <b>VertMiner</b> (currently fastest method):</p>
			<ul class="details">
				<li>Windows version : <a href="https://vertcoin.org/downloads/vertminer-0.5.2.zip">https://vertcoin.org/downloads/vertminer-0.5.2.zip</a></li>
				<li>Imprived version of VertMiner : <a href="https://bitcointalk.org/index.php?topic=466867.0">https://bitcointalk.org/index.php?topic=466867.0</a></li>
				<li>Source code for both Windows and Linux : <a href="https://github.com/Bufius/vertminer-gpu">https://github.com/Bufius/vertminer-gpu</a></li>
			</ul>
			<p><span class="icon purpose"></span>If you want to build from source, here's a tutorial : <a href="http://vertcoin.org/gpu-miner-build-howto.html">Building Vertminer</a></p>
			<p class="ul"><span class="arrow2"></span><b>GPU mine</b> using <b>CUDAminer</b> modified for N Scrypt support</p>
			<ul class="details">
				<li>Windows Version : <a href="https://vertcoin.org/downloads/CudaminerWin64.zip">https://vertcoin.org/downloads/CudaminerWin64.zip</a></li>
				<li>Source code for both Windows and Linux : <a href="https://github.com/cbuchner1/CudaMiner">https://github.com/cbuchner1/CudaMiner</a></li>
				<li>OSx Build of CUDAMiner : <a href="https://vertcoin.org/downloads/CudaminerOSx-Aleks_N.zip">https://vertcoin.org/downloads/CudaminerOSx-Aleks_N.zip</a></li>
			</ul>
			<p><span class="icon purpose"></span>The "--algo=scrypt:2048" switch is needed to mine H2OCoin with CUDAMiner</p>
			<p class="ul"><span class="arrow2"></span><b>CPU mine</b> using <b>CGminer</b> or <b>CPUminer</b> modified for N Scrypt</p>
			<ul class="details">
				<li>Windows version <a href="https://www.amazon.com/clouddrive/share?s=D_fMD9YnSuMm5b8Ldi-jiA">https://www.amazon.com/clouddrive/share?s=D_fMD9YnSuMm5b8Ldi-jiA</a></li>
				<li>Source : <a href="https://github.com/Bufius/cpuminer-vert">https://github.com/Bufius/cpuminer-vert</a></li>
			</ul>
			<p class="ul"><span class="arrow2"></span><b>CPU mine</b> with the <b>wallet</b> (currently slowest method):</p>
			<ul class="details">
				<li>Open H2Ocoin Wallet</li>
				<li>Choose Help</li>
				<li>Select Debug window</li>
				<li>Select Console</li>
				<li>Type “setgenerate true”</li>
				<li>Type  "getmininginfo" to see hashrate</li>
			</ul>
			<h3>Configurations</h3>
			<ul class="h3">
				<li>Tweak your settings to improve your performances : <a href="https://bitcointalk.org/index.php?topic=416572" title="">The big VTC Vertcoin settings thread</a></li>
				<li>Compare your hashrate with similar GPU's : <a href="http://www.verters.com/vertcoin-hardware-list">Vertcoin Mining Hardware List</a></li>
			</ul>
		</article>
	</section>
	<section id="explorer" class="triangle scroll">
		<article>
			<h2>Explore the blockchain</h2>
			<iframe src="http://explorer.embargocoin.com:2750/chain/H2Ocoin"></iframe>
			<p class="center">&gt;&gt;&gt; <a href="http://explorer.embargocoin.com:2750/chain/H2Ocoin">External link to explorer</a> &lt;&lt;&lt;</p>
		</article>
	</section>
	<footer>
		<div class="logo">
			<p>h<span class="deux">2</span>o</p>
		</div>
	</footer>
</body>
</html>