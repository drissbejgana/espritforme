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

    <h1 class="colorgr" style="font-weight: bold;border-bottom:2px solid;width:240px;padding-left:90px" >PISCINE</h1>


    <div id="piscine" class="pt-5 mt-5 d-flex justify-content-evenly ">
            
    
        <div style="margin-top:-50px">
            <img style="width:300px;height:300px" class="rounded-circle" src="{{asset('images/entrainement.avif')}}" alt="" srcset="">
            <div id="pscat">
                 <h3 class="bold pt-3">Cours Kids</h3>
                 <p class="bold ms-3 colorbr">
                    Chaque Vendredi - Samedi
                 </p>
            </div>
        </div>

        <div id="piscinemob" class="w-50 position-relative mt-5 " style="height:400px; border:solid 2px #7A7E4E" >
          <div class="position-absolute w-100 d-flex justify-content-around " style="top:-125px">
                  <div class="d-flex flex-column aling-items-center justify-content-center">
                      <img style="width:250px;height:250px" class="rounded-circle" src="{{asset('images/entrainement.avif')}}" alt="" srcset="">
                     <div class="ps-5 pt-4">
                        <h4 class="bold">Aqua Gym</h4>     
                        <h4 class="bold">Diagnostic <span class="colorbr">(Sujok)</span></h4>     
                        <h4 class="bold">Tension</h4>     
                        <h4 class="bold">Séance Réspiratoire</h4>   
                     </div>  
                  </div>      
                  
                  <div class="">
                      <img style="width:250px;height:250px" class="rounded-circle" src="{{asset('images/entrainement.avif')}}" alt="" srcset="">
                      <div class="ps-5 pt-4">
                        <h4 class="bold">Ice Thérapy</h4>     
                        <h4 class="bold">Cardio</h4>    
                        <h4 class="bold">Apprentissage</h4> 

                     </div>    
                  </div>      
          
          </div>
            <div class="position-absolute mobile" style="top:40%;left:50%;tranform:translate(-50%);height:120px;width:1px; background-color:black" ></div>
        </div>
    
    </div>
  </main>
  @include('foot') 
  @include('whatsapp')

