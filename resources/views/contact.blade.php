@include('header',['title'=>'Contact'])

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

  
  <main class="p-5 pt-0" style="height:100vh">
      <div id="contactheader" class="w-50 d-flex justify-content-between align-items-center pe-5 ps-5" >
            <h2 style="color:rgb(61, 94, 61);" >Contact</h2>
            <img src="{{asset('images/esplogo.png')}}" width="90px"  alt="">
      </div>
      <div class="contact d-flex justify-content-between w-100">
          <form id="contactform" class="w-50 p-5 pt-0"  action="">
            @csrf
            <label style="color:#7A7E4E;font-weight:bold">Nom</label>
              <div class="fw-bold mb-4">
                  <input type="text" id="name" style="border-bottom: 2px solid rgb(64, 107, 64) !important;width:80%;" class="form-control outlined-0 rounded-0 border-0 shadow-none"  id="floatingInput" >
              </div>
              <label style="color:#7A7E4E;font-weight:bold">{{__('home.Number')}}</label>
              <div class=" fw-bold mb-4">
                <input type="number" id="number" style="border-bottom: 2px solid rgb(64, 107, 64) !important;width:80%;" class="form-control outlined-0 border-0 rounded-0 shadow-none"  id="floatingInput" >
             </div>
             <label style="color:#7A7E4E;font-weight:bold">E-mail</label>
             <div class=" fw-bold mb-4">
              <input type="email" id="email" style="border-bottom: 2px solid rgb(64, 107, 64)!important;width:80%;" class="form-control outlined-0 border-0 rounded-0  shadow-none"  id="floatingInput" >
             </div>
             <label style="color:#7A7E4E;font-weight:bold">Message</label>
             <div class="fw-bold mb-4">
              <textarea id="message" style="border: 2px solid rgb(64, 107, 64) !important;width:80%;height:100px" class="form-control outlined-0 rounded-0 shadow-none" id="floatingTextarea2" ></textarea>
            </div>
             <div style="width:80%;" class="d-flex justify-content-center">
            <button type="button" onclick="SendMail()" style="background-color:#7A7E4E; color:#FFF;font-weight:bold" class="btn border rounded-0">ENVOYER</button>

             </div>
         </form>
            <div id="localisation" class="w-50" style="margin-top: -50px" class="d-flex flex-column">
                <iframe class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.9079196444054!2d-8.020910985049051!3d31.636371448570696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafef412698ac7b%3A0xa12ec0901226e04c!2sResidence%20Harmony!5e0!3m2!1sfr!2sma!4v1677674698803!5m2!1sfr!2sma"
                frameborder="0" style="height: 80%; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
                <div class="contactcord">
                    <p style="margin:0" class="text-center"><a href="tel:+212 6 61 90 61 36">+212 6 61 90 61 36</a></p>
                    <p style="margin:0" class="text-center"><a href="mailto:CONTCAT@ESPRITFORME.COM">CONTCAT@ESPRITFORME.COM</a></p>
                    <p style="margin:0" class="text-center">RESIDENCE HARMONY RUE MOHAMED RHIMI,QUARTIER CHAMP EL GHOUL, GUÉLIZ</p>
                    <p style="margin:0" class="text-center">(À COTÉ DU CAFÉ MOON ROOF)</p>
                </div>
            </div>
  
      </div>
  </main>



@include('foot')
@include('whatsapp')
