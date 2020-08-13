
	<div class="nav-container">
<div class="header1 ">
	<div class="gornji d-flex"> 
	<div id="myBtnContainer">
		<div class="dx text-center">
	
		
			<a  target="_blank" href="https://www.portalanalitika.me/">	<p>Portal Analitika</p></a>
			<a  target="_blank" href="https://www.instagram.com/redbullcg/">	<p>Red Bull </p></a>
			<a  target="_blank" href="https://www.facebook.com/lamiacasaPG/">	<p>La Mia Casa</p></a>
			<a  target="_blank" href="https://qqriq.me/">	<p>QQRIQ</p></a>
			<a  target="_blank" class="mr-0" href="https://nordpixels.me/">	<p>Nord Pixels</p></a>
		
		</div>
	  </div>
	</div>
{{-- <div class="gornji d-flex"> 

	
</div> --}}


</div>


		<div class="header2 d-flex">
			<div class="search">
				<div id="wrap">
		
			

			<div class="search-background bg-transparent">
					<div class="form-group  select2-lg  mb-0 bg-white searchText">
						<select class="form-control  border-bottom-0" data-placeholder="Šta želite pronaći? "  id="search1"  onchange="javascript:location.href = this.value;">
							<option value="#">Šta želite pronaći? </option>
						@foreach ($epizode as $epizoda)
						<option value="/epizoda/{{$epizoda->id}}">{{$epizoda->title}}</option>
						@endforeach
					</select>


					</div>
			</div>
				<input id="search_submit" class="searchB" value="Rechercher" type="submit">
				</div>
			</div>
			<nav>
				<div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
				<div>
				<ul class="nav-list">
				<li>
					<h5>	<a href="/">Početna</a></h5>
				</li>
				<li>
					
					<h5>	<a href="/sezona/1">  Podcast</a></h5>
				</li>
		{{-- 		<li>
					<h5>	<a href="#!">O nama</a></h5>
					</li> --}}
				<li>
					<h5>	<a href="/contact">Poslovna saradnja</a></h5>
				</li>
				<li>
					<h5>	<a href="/post">Mediji</a></h5>
				</li>
				
				

				</ul>
			</div>
			</nav>
			<div class="sheader">
			<div class="brandf ">
				<a href="https://www.patreon.com/bePatron?u=17793118">  <img src="/assets/images/patreon.svg" alt=""></a>

					<h5 class="podrzite">Podržite nas na Patreonu!</h5>
			
			</div>
		</div>
		
		</div>
	</div>
  
