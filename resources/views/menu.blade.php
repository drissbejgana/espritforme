<div class="menucontainer offcanvas offcanvas-end w-100" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

  <button type="button"  class="btnclose btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

  <div class="menu">

   
  @if (Lang::locale()=='en')
        @foreach($categories as $cat)
            <div class="piece mobile makeborder">
                    <a class="menu_cat" onclick="myfunc(event);">
                    {{$cat->name_en}} 
                    </a>
                
                  <div class="submenu close position-absolute">
                    <button class="btnclose btn-close" aria-label="Close" onclick="handleclose(event);" type="button"></button>
                      <div>
                        <h3 class="text-uppercase">  {{$cat->name_en}}</h3>
                        <ul>
                        @foreach($cat->subcategories as $subcat)
                           @if($cat->id===1)
                             <li><a href="{{url('piscine/'.Lang::locale())}}">{{$subcat->name_en}}</a></li>  
                           @else
                             <li><a href="{{url('categories/'.Lang::locale().'/'.$cat->id.'/'.$subcat->id)}}">{{$subcat->name_en}}</a></li>
                           @endif
                        @endforeach

                        </ul>
                      </div>
                  </div>
              </div>
       @endforeach

 @else

  @foreach($categories as $cat)
       <div class="piece mobile makeborder">
              <a class="menu_cat" onclick="myfunc(event);">
              {{$cat->name_cat}} 
              </a>
          
            <div class="submenu close position-absolute">
              <button class="btnclose btn-close" aria-label="Close" onclick="handleclose(event);" type="button"></button>
                <div>
                  <h3 class="text-uppercase">  {{$cat->name_cat}}</h3>
                  <ul>
                  @foreach($cat->subcategories as $subcat)
                      @if($cat->id===1)
                        <li><a href="{{url('piscine/'.Lang::locale())}}">{{$subcat->name_subcat}}</a></li>  
                      @else
                        <li><a href="{{url('categories/'.Lang::locale().'/'.$cat->id.'/'.$subcat->id)}}">{{$subcat->name_subcat}}</a></li>
                      @endif
                  @endforeach

                  </ul>
                </div>
            </div>
        </div>
    @endforeach
@endif

    
    <div class="piece" style="border-left: #F8D9CA solid 4px;">        
        <div class="submenu position-absolute ">
        <!-- <button class="btnclose btn-close" aria-label="Close" onclick="handleclose(event);" type="button"></button> -->
          <div class="menuprincipalcontainer" style="top: 50% !important;
    transform: translateY(-50%) !important;">
                <img src="{{asset('images/esplogo.png')}}"  alt="">

                <ul class="menuprincipal">
                  <li><a href="{{url('acceuil/'.Lang::locale())}}" class="colorgr">Acceuil</a></li>
                  <li><a href="{{url('contact/'.Lang::locale())}}" class="colorgr">Réserver</a></li>
                  <li><a href="{{url('contact/'.Lang::locale())}}" class="colorgr">Contact</a></li>
                  <li><a href="" class="colorgr">Galerie photo</a></li>
                  <li><a href="{{url('tarifs')}}" class="colorgr">Tarifs</a></li>

            @if (Lang::locale()=='en')
                        @foreach($categories as $cat)
                        
                                <li class="dropdown mobile_cat">
                                  <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{$cat->name_en}}
                                  </a>

                                  <ul class="dropdown-menu">
                                
                                    @foreach($cat->subcategories as $subcat)
                                        @if($cat->id===1)
                                          <li><a class="dropdown-item" href="{{url('piscine/'.Lang::locale())}}">{{$subcat->name_en}}</a></li>  
                                        @else
                                          <li><a class="dropdown-item" href="{{url('categories/'.Lang::locale().'/'.$cat->id.'/'.$subcat->id)}}">{{$subcat->name_en}}</a></li>
                                        @endif
                                    @endforeach
                                  </ul>
                                </li>
                          @endforeach
              @else
                          @foreach($categories as $cat)
                              
                              <li class="dropdown mobile_cat">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  {{$cat->name_cat}}
                                </a>

                                <ul class="dropdown-menu">
                                  @foreach($cat->subcategories as $subcat)
                                    @if($cat->id===1)
                                      <li><a class="dropdown-item" href="{{url('piscine/'.Lang::locale())}}">{{$subcat->name_subcat}}</a></li>  
                                    @else
                                    <li><a class="dropdown-item" href="{{url('categories/'.Lang::locale().'/'.$cat->id.'/'.$subcat->id)}}">{{$subcat->name_subcat}}</a></li>
                                    @endif
                                  @endforeach
                                </ul>
                              </li>
                         @endforeach


              @endif

                </ul>
          </div>
        </div>
        
      </div>


     
  </div>
</div>

