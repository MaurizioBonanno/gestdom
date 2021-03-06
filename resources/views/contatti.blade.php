@component('components.header')

@endcomponent


<br><br>
<style>
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
</style>

<div class="container" style="padding-top: 2em;">
     <div class="row justify-content-md-center">
        <div class="row">
            <div class="col-s-12">
             <img src="images/team_paglieri_migliorata.png" id="teamfoto" style="width: 100%;height: auto;">
            </div>
            <div class="col col-s-12">
                    <h2>PAGLIERI REAL ESTATE SRL</h2>
                    <p>Via XX Settembre 1/1 , 16121 , Genova, Italy</p>
                    <p>C.F. P.IVA 02653930996</p>
                    <p>REA GE-502112</p>
                    <h3>Puoi contattarci telefonicamente al:</h3>
                    <p>
                        <a href="tel:+39 347.11.755.32 " class="btn btn-lg btn-primary" role="button">
                          <i class="fas fa-phone-square-alt"></i> +39 347.11.755.32
                        </a>
                    </p>
                    <p>
                        <a href="tel:+39 327.705.2339" class="btn btn-lg btn-primary" role="button">
                          <i class="fas fa-phone-square-alt"></i> +39 327 705 2339
                        </a>
                    </p>
                    <h3>Oppure Scriverci :</h3>
                    <p>
                      @mail : <a href="mailto:info@paglierire.it?subject=richiesta%20di%20informazioni">info@paglierire.it</a>
                    </p>
                    <p>
                      @mail : <a href="mailto:paglierire@pec.it">paglierire@pec.it</a>
                    </p>
                    <h3>O mandare un messaggio:</h3>
                    <p>
                        <a href="https://wa.me/393471175532?text=Sarei%20interessato%20ad%20avere%20maggiori%20informazioni%20grazie" target="_blank">
                            <img src="images/whatsapp.png" alt="conttataci con whatsapp"
                            style="max-width: 100px; max-height: auto;">
                          </a>
                    </p>

            </div>
        </div>
<br><br><br><br>



   </div>
</div>
<hr>

<script>
        $.noConflict();
        jQuery( document ).ready(function( $ ) {
          $('#teamfoto').hide();
          $('#teamfoto').fadeIn(2000);
        });
</script>


@component('components.footer')

@endcomponent
