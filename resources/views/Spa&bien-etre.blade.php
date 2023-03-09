@include('header',['title'=>'Categories'])

<body >
<nav class="navbar sticky-top d-flex flex-row-reverse align-items-center me-3 border-0">  
             <div class="d-flex flex-end align-items-center">
              <div class="circel" style="background-color:#FFF;opacity:1;border:1px solid">
                  <div class="burger" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <div id="row1"></div>
                    <div id="row2"></div>
                    <div id="row3"></div>
                  </div>
                </div>
             </div>
  </nav>
  
  @include('menu')
  <main class="">
  <div id="categories" class="p-4 d-flex justify-content-around ">
 

  @if(Lang::locale()=='en')
              @foreach($categories->subcategories as $cat)
                @if ($cat->id == $subcat)
                <div style="height:100vh;width:100%;" class="card me-2 order-first rounded-0 flex-fill" >
                        <img src="{{asset('images/'.$cat->image)}}" height="250px" width="100%" class="card-img-top rounded-0" alt="...">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center justify-content-center  " style="height: auto;">
                                <h4 class="text-uppercase">{{$cat->name_en}}</h4>
                                <i  onclick="show(event)" style="font-size: 4.5rem!important;color: rgb(37, 95, 47);visibility:hidden;height:0"  class="bi bi-plus-circle"></i>
                          </div>
                          <div class="subcat d-flex flex-column align-items-center show">
                                <ul>                    
                                  @foreach($cat->typesubcategories as $subtypecat)
                                    <li>{{$subtypecat->name_en}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                      </div>
                  @else
                  <div style="height:100vh;width:100%;" class="card me-2 rounded-0 flex-fill"  >
                          <img src="{{asset('images/'.$cat->image)}}" height="250px" width="100%" class="card-img-top rounded-0" alt="...">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center justify-content-center " style="height: 100%;">
                                  <h4 class="text-uppercase">{{$cat->name_en}}</h4>
                                  <i onclick="show(event);" style="font-size: 4.5rem!important;color: rgb(37, 95, 47);"  class="bi bi-plus-circle"></i>
                            </div>
                            <div class="subcat d-flex flex-column align-items-center">
                                  <ul>
                                    @foreach($cat->typesubcategories as $subtypecat)
                                      <li>{{$subtypecat->name_en}}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          </div>
                    </div>
                  
                  @endif

                @endforeach

   @else             
      @foreach($categories->subcategories as $cat)
                  @if ($cat->id == $subcat)
                  <div style="height:100vh;width:100%;" class="card me-2 rounded-0 order-first flex-fill"  >
                          <img src="{{asset('images/'.$cat->image)}}" height="250px" width="100%" class="card-img-top rounded-0" alt="...">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center justify-content-center  " style="height: auto;">
                                  <h4 class="text-uppercase">{{$cat->name_subcat}}</h4>
                                  <i  onclick="show(event)" style="font-size: 4.5rem!important;color: rgb(37, 95, 47);visibility:hidden;height:0"  class="bi bi-plus-circle"></i>
                            </div>
                            <div class="subcat d-flex flex-column align-items-center show">
                                  <ul>                    
                                    @foreach($cat->typesubcategories as $subtypecat)
                                      <li>{{$subtypecat->name}}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          </div>
                        </div>
                  @else
                  <div style="height:100vh;width:100%;" class="card me-2 rounded-0 flex-fill">
                          <img src="{{asset('images/'.$cat->image)}}" height="250px" width="100%" class="card-img-top rounded-0" alt="...">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center justify-content-center " style="height: 100%;">
                                  <h4 class="text-uppercase">{{$cat->name_subcat}}</h4>
                                  <i onclick="show(event);" style="font-size: 4.5rem!important;color: rgb(37, 95, 47);"  class="bi bi-plus-circle"></i>
                            </div>
                            <div class="subcat d-flex flex-column align-items-center">
                                  <ul>
                                    @foreach($cat->typesubcategories as $subtypecat)
                                      <li>{{$subtypecat->name}}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          </div>
                    </div>
                  
                  @endif
              @endforeach 
          
       @endif
              

      <!-- <div class="card me-2 rounded-0"  >
          <img src="bg.jpeg" style="max-height:40%" width="100%"  class="card-img-top rounded-0" alt="...">
          <div class="card-body">
             <div class="d-flex flex-column align-items-center justify-content-center " style="height: 100%;">
                  <h4 class="text-uppercase">COIFFURE&ONGLERIE</h4>
                  <i onclick="show(event)" style="font-size: 4.5rem!important;color: rgb(37, 95, 47);"  class="bi bi-plus-circle"></i>
             </div>
             <div class="subcat d-flex flex-column align-items-center">
                  <ul>
                      <li>Massage Traditionnel</li>
                      <li>Massage Traditionnel</li>
                      <li>Massage Traditionnel</li>
                      <li>Massage Traditionnel</li>
                  </ul>
              </div>
          </div>
        </div>
  
        <div class="card me-2 rounded-0"  >
          <img src="bg.jpeg" style="max-height:40%" width="100%"  class="card-img-top rounded-0" alt="...">
          <div class="card-body">
             <div class="d-flex flex-column align-items-center justify-content-center " style="height: 100%;">
                  <h4 class="text-uppercase">SOINS DU VISAGES</h4>
                  <i onclick="show(event);" style="font-size: 4.5rem!important;color: rgb(37, 95, 47);"  class="bi bi-plus-circle"></i>
             </div>
             <div class="subcat d-flex flex-column align-items-center">
                  <ul>
                      <li>Massage Traditionnel</li>
                      <li>Massage Traditionnel</li>
                      <li>Massage Traditionnel</li>
                      <li>Massage Traditionnel</li>
                  </ul>
              </div>
          </div>
        </div>
   -->
      
  
  
  
  </div>
    
  </main>
  @include('foot') 
  @include('whatsapp')

