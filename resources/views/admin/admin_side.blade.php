@if(Auth::user())
     <div class=" amenu">
        <a class="myLogoSvgAd" href="/admin/ ">
            <img class="" src="/assets/images/glaveDve.png">
        </a>
        <div class="sidebar">
            <ul>
                <li> <a href="/" class=" d-flex" target="_blank"> <span class="icon1 mr-3 width15"><i class="fa fa-fw fa-home"></i></span>Website
                        Home</a></li>

                <li>
                    <a href="/sezona/create" class="d-flex">    <span class="icon1 mr-3 width15"><i class="fa fa-plus"></i></span>Dodaj sezonu</a>
                </li>
                <li>
                    <a href="/epizoda/create" class="d-flex">     <span class="icon1 mr-3 width15"><i class="fa fa-plus"></i></span>Dodaj Epizodu</a>
                </li>
                <li>              
                     <a href="/admin/post/showUserBlogs/{{ Auth::user()->id}}" class="  d-flex">
                    <span class="icon1 mr-3 width15"><i class="fa fa-newspaper-o"></i></span>Moje Blog Objave
                </a>
            </li>   
            <li>
                <a href="/post/create" class=" d-flex">
                    <span class="icon1 mr-3 width15"><i class="fa fa-plus"></i></span>Dodaj Blog Objavu
                </a>
            </li>  
            <li>
                <h5>	<a href="/admin/comments">Komentari</a></h5>
            </li>
            </ul>
        </div>
      <a href="https://qqriq.me/">  <p class="doni">Made by @QQRIQ</p></a>
    </div>
@endif