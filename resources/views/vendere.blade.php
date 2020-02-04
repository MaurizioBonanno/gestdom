@component('components.header')

@endcomponent
<style>
    footer {
        color: white;
    }
    body {
        background-color: rgb(12, 71, 129);
        color: floralwhite;
    }
    a {
        color: floralwhite;
    }
    .card-text {
        color: gray;
    }
    .card-title {
        color: gray;
    }
    .container {
        padding-left: 24px;
    }
</style>

<div class="container" style="padding-top: 6em;">

    <div class="row justify-content-md-center">
       <div class="row">
           <div class="col bar-exp">
              <p>
                 <!-- <i class="fas fa-handshake"></i>-->
                   <h3>CONSULENZA A 360°</h3>
                    Prima, durante e dopo l'acquisto
              </p>
           </div>
           <div class="col bar-exp">
                <p>
                    <!-- <i class="fas fa-search-location"></i>-->
                       <h3>RICERCHE MIRATE IMMOBILI</h3>
                       Per trovare quello che stai davvero cercando
                  </p>

           </div>
           <div class="col bar-exp">
                <p>
                      <!-- <i class="fas fa-chart-line"></i>-->
                       <h3>ANALISI DI MERCATO</h3>
                       Per conoscere il mercato immobiliare di riferimento
                  </p>

           </div>
           <div class="col bar-exp">
                <p>
                      <!--  <i class="fad fa-calculator"></i>-->
                       <h3>VALUTAZIONI</h3>
                       Per dare il giusto valore all'immobile da comprare o da vendere
                  </p>

           </div>
           <div class="col-s-12" style="padding-top: 3em;scroll-padding-right: 2em;">
            <img src="images/shutterstock_1185179251.jpg" id="fotoconsulting" style="max-width: 45em; ;width: 100%;height: auto;">
           </div>
           <div class="col col-s-6" style="padding-top: 3em;scroll-padding-left: 2em;">
               <h1>Per Vendere</h1>
                <p>
                    Le vendite sono in aumento, arrivano nuovi Clienti pronti ad investire
                    a Genova e nella riviera di Levante. Abbiamo bisogno di Immobili Protagonisti da
                    proporre a Clienti già qualificati e con la capacità economica di comprare.
                    La Forza vendita è stata riqualificata, ha una nuova mentalità, una nuova serie
                    di Competenze.
                </p>
                 <p>
                   <i> Insieme al Team abbiamo sviluppato un piano di marketing e delle strategie
                    finalizzate alla vendita </i> che, in questo momento storico di Rinascita Immobiliare
                    del territorio ligure, ha ottenuto concreti risultati: Vendiamo.
                </p>
            <p><i><b>Affidati a noi: Team Paglieri</b></i> made in Re/Max Collection</p>

           </div>
       </div>
    </div>
    <hr>
    <div class="row justify-content-md-center">

        <div class="col-sm-12" style="text-align: center;">
        <h4>
            <p>
                Liguria - Levante quando la Luce inizia ad Arrivare - Il Posto Perfetto - Una Casa per Lui e per Lei<br>
                 Famiglia dove il Mare di Casa Ti ricorda chi sei - Mare come arredo
              </p>
             <p>
                 Terrazza con Casa - Attico - Villa con Vista - Dimora a  picco sul mare - Caletta privata - Villa d'epoca - Villa indipendente<br>

                 Villa liberty - Elegante appartamento
             </p>
             <p>Case in Riviera - Sorpese in Città- Una Sapiente commistione di Antico e Design -<br> Case Geniali

                Eleganza Cosmopolita fra gli Ulivi - Urban Chic - Giardini Privati - Aperture improvvise sull'infinità del Golfo
             </p>
    </h4>

        </div>
    </div>
</div>
<hr>

<script>
        $.noConflict();
        jQuery( document ).ready(function( $ ) {
          $('#fotoconsulting').hide();
          $('.bar-exp').hide();
          $('#fotoconsulting').fadeIn(2500);
          $('.bar-exp').fadeIn(2000);
        });
</script>
@component('components.footer')

@endcomponent
