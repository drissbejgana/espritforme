@include('header',['title'=>'Acceuil'])

<body id="homebody">
  <div class="logo">
    <img src="{{asset('images/esplogo.png')}}" height="auto" alt="">
  </div>

  <nav class="navbar sticky-top parent">
      <div class="d-flex w-100 justify-content-between align-items-center child">
  
      @if (Lang::locale()=='fr')
        <span style='font-size: 17px; padding-left: 20px; color:#FFF'>
            <strong>FR</strong>                   
            |
            <a style='text-decoration:none;color:#FFF' href="{{url('acceuil/en')}}">EN</a>
        </span>   
        @endif

        @if (Lang::locale()=='en')
        <span style='font-size: 17px; padding-left: 20px; color:#FFF'>
            <a style='text-decoration:none;color:#FFF' href="{{url('acceuil/fr')}}">FR</a>
            |
            <strong>EN</strong>

        </span>   
        @endif

  
              <a class="mobile" href="{{url('contact/'.Lang::locale())}}"  style="margin-right: -143px;">{{__('home.Tobook')}}</a>

             <div class="d-flex justify-content-between align-items-center">
              <a href="#"  class="navbar-brand mobile" style="color:#FFF" >{{__('home.Localization')}}</a>
              <a id="reserver" href="{{url('contact/'.Lang::locale())}}"  style="display:none">{{__('home.Tobook')}}</a>

              <div class="circel">
                  <div class="burger" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <div id="row1"></div>
                    <div id="row2"></div>
                    <div id="row3"></div>
                  </div>
                </div>
             </div>


      </div>

  </nav>

@include('menu')


<main>

    <img class="mobileimg" width="100%"  src="{{asset('images/bg.jpeg')}}" alt="">
 
      <div class="container texts mt-5">
        <h5 style="font-weight:bolder;color: #7A7E4E;" >
        Esprit Forme est une retraite élégante au cœur de Marrakech sur plus .
  Une véritable institution du bien-être avec hammam, sauna, cabines de soins .
   Chic et calme, l'endroit est l'endroit idéal pour se détendre dans une atmosphère feutrée et découverte dʼun spa.

       </h5>
        <hr style="width:25%;border-top:solid !important;opacity:1" >
        <p class="mt-4 mb-5">
        Un Hammam pour votre beauté, douceur et purification avec une décoration authentique de marbre, et des experts thérapeutes, leurs mains vous seront servi lʼart de prendre
soin de vos corps avec des massages différents et développés.
Au cœur du centre une piscine pour se relaxer, des cours aquagym aident votre renforcement musculaire ou bien pour vous aider à la rééducation de vos blessés.
        </p>
        <p class="mt-5 ">
        Sprit Forme devient de plus en plus populaire car les gens recherchent des moyens de soulager le stress et de se détendre. Ici, les thérapies de relaxation telles que les massages,
l'acupuncture et les bains de vapeur peuvent apporter un changement rafraîchissant dans le corps. Avec des conseils et des soins appropriés, les traitements peuvent même
contribuer à améliorer la santé d'un individu.
        </p>


        <h5 class="mt-4" style="font-weight:bolder; color: #7A7E4E;"  >
        Notre centre SPA et Bien-Être avec une salle du sport et une piscine,
         centre UNIQUE pour des clients UNIQUES.
       </h5>
        <hr style="width:25%;border-top:solid !important;opacity:1" >
        <p class="mt-4 mb-5">
        Notre salle de sport est un lieu doté dʼun équipement complet et de machines de dernière génération,
       nos coachs professionnels proposent des séances de remise en forme sur mesure en cours privé pour vous accompagner et atteindre vos objectifs.
        </p>
   
      </div>


      <div class="container texts mt-5">
        <h5 style="font-weight:bolder;color: #7A7E4E;" >
        Esprit Forme est une retraite élégante au cœur de Marrakech sur plus .
  Une véritable institution du bien-être avec hammam, sauna, cabines de soins .
   Chic et calme, l'endroit est l'endroit idéal pour se détendre dans une atmosphère feutrée et découverte dʼun spa.

       </h5>
        <hr style="width:25%;border-top:solid !important;opacity:1" >
        <p class="mt-4 mb-5">
        Un Hammam pour votre beauté, douceur et purification avec une décoration authentique de marbre, et des experts thérapeutes, leurs mains vous seront servi lʼart de prendre
soin de vos corps avec des massages différents et développés.
Au cœur du centre une piscine pour se relaxer, des cours aquagym aident votre renforcement musculaire ou bien pour vous aider à la rééducation de vos blessés.
        </p>
        <p class="mt-5 ">
        Sprit Forme devient de plus en plus populaire car les gens recherchent des moyens de soulager le stress et de se détendre. Ici, les thérapies de relaxation telles que les massages,
l'acupuncture et les bains de vapeur peuvent apporter un changement rafraîchissant dans le corps. Avec des conseils et des soins appropriés, les traitements peuvent même
contribuer à améliorer la santé d'un individu.
        </p>


        <h5 class="mt-4" style="font-weight:bolder; color: #7A7E4E;"  >
        Notre centre SPA et Bien-Être avec une salle du sport et une piscine,
         centre UNIQUE pour des clients UNIQUES.
       </h5>
        <hr style="width:25%;border-top:solid !important;opacity:1" >
        <p class="mt-4 mb-5">
        Notre salle de sport est un lieu doté dʼun équipement complet et de machines de dernière génération,
       nos coachs professionnels proposent des séances de remise en forme sur mesure en cours privé pour vous accompagner et atteindre vos objectifs.
        </p>
   
      </div>


      <div class="container texts mt-5">
        <h5 style="font-weight:bolder;color: #7A7E4E;" >
        Esprit Forme est une retraite élégante au cœur de Marrakech sur plus .
  Une véritable institution du bien-être avec hammam, sauna, cabines de soins .
   Chic et calme, l'endroit est l'endroit idéal pour se détendre dans une atmosphère feutrée et découverte dʼun spa.

       </h5>
        <hr style="width:25%;border-top:solid !important;opacity:1" >
        <p class="mt-4 mb-5">
        Un Hammam pour votre beauté, douceur et purification avec une décoration authentique de marbre, et des experts thérapeutes, leurs mains vous seront servi lʼart de prendre
soin de vos corps avec des massages différents et développés.
Au cœur du centre une piscine pour se relaxer, des cours aquagym aident votre renforcement musculaire ou bien pour vous aider à la rééducation de vos blessés.
        </p>
        <p class="mt-5 ">
        Sprit Forme devient de plus en plus populaire car les gens recherchent des moyens de soulager le stress et de se détendre. Ici, les thérapies de relaxation telles que les massages,
l'acupuncture et les bains de vapeur peuvent apporter un changement rafraîchissant dans le corps. Avec des conseils et des soins appropriés, les traitements peuvent même
contribuer à améliorer la santé d'un individu.
        </p>


        <h5 class="mt-4" style="font-weight:bolder; color: #7A7E4E;"  >
        Notre centre SPA et Bien-Être avec une salle du sport et une piscine,
         centre UNIQUE pour des clients UNIQUES.
       </h5>
        <hr style="width:25%;border-top:solid !important;opacity:1" >
        <p class="mt-4 mb-5">
        Notre salle de sport est un lieu doté dʼun équipement complet et de machines de dernière génération,
       nos coachs professionnels proposent des séances de remise en forme sur mesure en cours privé pour vous accompagner et atteindre vos objectifs.
        </p>
   
      </div>


      <div class="container texts mt-5">
        <h5 style="font-weight:bolder;color: #7A7E4E;" >
        Esprit Forme est une retraite élégante au cœur de Marrakech sur plus .
  Une véritable institution du bien-être avec hammam, sauna, cabines de soins .
   Chic et calme, l'endroit est l'endroit idéal pour se détendre dans une atmosphère feutrée et découverte dʼun spa.

       </h5>
        <hr style="width:25%;border-top:solid !important;opacity:1" >
        <p class="mt-4 mb-5">
        Un Hammam pour votre beauté, douceur et purification avec une décoration authentique de marbre, et des experts thérapeutes, leurs mains vous seront servi lʼart de prendre
soin de vos corps avec des massages différents et développés.
Au cœur du centre une piscine pour se relaxer, des cours aquagym aident votre renforcement musculaire ou bien pour vous aider à la rééducation de vos blessés.
        </p>
        <p class="mt-5 ">
        Sprit Forme devient de plus en plus populaire car les gens recherchent des moyens de soulager le stress et de se détendre. Ici, les thérapies de relaxation telles que les massages,
l'acupuncture et les bains de vapeur peuvent apporter un changement rafraîchissant dans le corps. Avec des conseils et des soins appropriés, les traitements peuvent même
contribuer à améliorer la santé d'un individu.
        </p>


        <h5 class="mt-4" style="font-weight:bolder; color: #7A7E4E;"  >
        Notre centre SPA et Bien-Être avec une salle du sport et une piscine,
         centre UNIQUE pour des clients UNIQUES.
       </h5>
        <hr style="width:25%;border-top:solid !important;opacity:1" >
        <p class="mt-4 mb-5">
        Notre salle de sport est un lieu doté dʼun équipement complet et de machines de dernière génération,
       nos coachs professionnels proposent des séances de remise en forme sur mesure en cours privé pour vous accompagner et atteindre vos objectifs.
        </p>
   
      </div>
<main>

@include('foot')

@include('whatsapp')

@include('footer')