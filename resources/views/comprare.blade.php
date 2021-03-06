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
                      <!-- <i class="fad fa-calculator"></i>-->
                       <h3>VALUTAZIONI</h3>
                       Per dare il giusto valore all'immobile da comprare o da vendere
                  </p>

           </div>
           <div class="col-s-12" style="padding-top: 3em;scroll-padding-right: 2em;">
            <img src="images/shutterstock_553625629.jpg" id="fotoconsulting" style="max-width: 45em; ;width: 100%;height: auto;">
           </div>
           <div class="col col-s-6" style="padding-top: 3em;scroll-padding-left: 2em;">
            <h1>Per Comprare</h1>

            <h3>La tua casa su misura </h3>
            <ul>
                <li> <i class="fas fa-home"></i>  ricerche mirate immobili, </li>
                <li> <i class="fas fa-drafting-compass"></i>   case ideali in funzione delle Vostre esigenze  </li>
                <li>  <i class="fab fa-gratipay"></i>   desideri, sogni e bisogni personali. </li>
            </ul>



           <p>Concentriamo le energie su Immobili con le giuste caratteristiche,personalità e carattere.</p>

            <p>
                Sfruttiamo una profonda conoscenza del mercato  e del territorio in cui si opera,
            </p>
            <p>
                oltre ad una rete di relazioni che ci consente di ampliare notevolmente il campo di ricerca.
                 Verifichiamo tutta la documentazione urbanistica, catastale, energetica, ipotecaria, legale, amministrativa e condominiale. Nel caso di acquirenti non italiani,
                 tutte le fasi saranno seguite da professionisti in lingua straniera.
                </p>
            <p>
                Per trovare la vostra casa su misura, nel Team Paglieri collaborano esperti del settore che utilizzano metodologie realmente efficaci.
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
