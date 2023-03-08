@include('header',['title'=>'Tarifs'])

<body >
<nav class="navbar position-fixed end-0 d-flex flex-row-reverse align-items-center me-3 border-0">  
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
  <div class="tarifes p-4 ps-0">
            <div id="tarifsheader" class="d-flex justify-content-around" >
                <h3 class="gr" style="font-weight: bold;">MASSAGE&HAMMAM&SOINS</h3>
                <h4 class="gr">DÉTENDRE LE DOS, SOULAGE VOTRE COEUR</h4>
            </div>
            <hr style="width:40%;border-top:2px solid #464729 !important;opacity:1;" >

            <p class="text-center mb-5 colorbr" style="margin:auto;width: 70%;">
            Notre centre de beauté vous propose en exclusivité différents choix de hammam et des massages et des soins sur mesure
           </p>
 
            <div class="cats container d-flex justify-content-around  flex-wrap">
                <div class="cat">
                    <div class="d-flex aling-items colorbr" style="margin-bottom: 20px;"><span>JOUISSANCE </span>
                      <hr style="width:25%;border-top: 1px solid !important;opacity:1;margin: 17px;color:#000" >
                    </div>
                    <div class="d-flex" height="100%">
                           <div  class="d-flex align-items-center">
                              <img width="150px" height="250px" src="{{asset('images/img1.jpeg')}}" alt="">
                               <ul>
                                <li class="gr">Massage Relaxant <span>400 DHS</span></li>
                                <li class="gr">Massage Sportif <span >400 DHS</span></li>
                                <li class="gr">Massage Aux pierres chaudes <span >600 DHS</span></li>
                                <li class="gr">Massage Thailandais <span >400 DHS</span></li>
                                <li class="gr">Massage Californien <span >400 DHS</span></li>
                                <li class="gr">Massage Tonique <span >400 DHS</span></li>
                                <li class="gr">Massage Oriental <span >400 DHS</span></li>
                                <li class="gr">MassageFemme enceinte <span >300 DHS</span></li>
                               </ul>
                           </div>
                    </div>
                </div>


                <div class="cat">
                    <div class="d-flex aling-items colorbr" style="margin-bottom: 20px;"><span>JOUISSANCE </span>
                      <hr style="width:25%;border-top: 1px solid !important;opacity:1;margin: 17px;color:#000" >
                    </div>
                    <div class="d-flex" height="100%">
                           <div  class="d-flex align-items-center">
                       <hr class="mobile" style="height:30%;border: 1px solid !important;margin-right:10px" >

                              <img width="150px" height="250px" src="{{asset('images/img2.jpeg')}}" alt="">
                               <ul>
                                <li class="gr">Hammame VIP <span>400 DHS</span></li>
                                <li class="gr">Hammame Royal <span >400 DHS</span></li>
                                <li class="gr">Hammame Traditionnel <span >400 DHS</span></li>
                               </ul>
                           </div>
                    </div>
                </div>


              <div class="cat">
                <div class="d-flex aling-items colorbr" style="margin-bottom: 20px;"><span>JOUISSANCE </span>
                  <hr style="width:25%;border-top: 1px solid !important;opacity:1;margin: 17px;color:#000" >
                </div>
                <div class="d-flex" height="100%">
                       <div  class="d-flex align-items-center">
                          <img id="lastimage"  width="240px" height="150px" src="{{asset('images/img2.jpeg')}}"  alt="">
                           <ul>
                                <li class="gr">Soin Vapeur <span>400 DHS</span></li>
                                <li class="gr">Soin Eclat <span >400 DHS</span></li>
                                <li class="gr">Soin Cap Esthetique <span >300 DHS</span></li>
                           </ul>
                       </div>

                </div>
            </div>


            </div>



        </div>

@include('foot')
@include('whatsapp')



