
<div id="footer">
<div class="container">
<div class="row">

<div class="col-md-6">
    <div class="col-md-6 wow fadeInUp box-footer" style="visibility: hidden; animation-name: none;">
        <h4>Internal Website <small> - Internal Link</small></h4>
        <div class="konten-footer">
            <ul>
            	<li><a href="http://">> Web Utama JEMBER's tobacco</a></li>
                <li><a href="http://" target="_blank">> Arsip tobacco</a></li>
                <li><a href="http://" target="_blank">> .... tobacco</a></li>
                <li><a href="http://" target="_blank">> .... tobacco</a></li>
                <li><a href="http://" target="_blank">> .... tobacco</a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 wow fadeInUp box-footer" style="visibility: hidden; animation-name: none;">
        <h4>Eksternal Website<small> - Eksternal Link</small></h4>
        <div class="konten-footer">
            <ul>
                
                <li><a href="http://" target="_blank">> JEMBER's tobacco</a></li>
                <li><a href="http://" target="_blank">></i> ................. </a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-12 wow fadeInUp box-footer" style="visibility: hidden; animation-name: none;">
        <h4>Partnership<small> - Kerja Sama</small></h4>
          
          <div class="konten-footer">
              <ul>
                  <img src="img/gojek.png" height="100">
                  
              </ul>
          </div>
    </div>
</div>


<div class="col-md-6 wow fadeInUp  box-footer" id="about-us" style="visibility: hidden; animation-name: none;">
    <h4>ABOUT US <small> - tentang kami</small></h4>
    <div class="konten-footer">
        <div class="row">
            <div class="col-md-6" style="text-align: justify">
            Jika ada pesan, kesan, kritik dan saran atau ada artikel yang kurang layak dipublikasikan. Silahkan hubungi kami melalui <a href="#" style="text-decoration: bold"> Kontak Form </a> <a href="#" style="text-decoration: bold"> Telepon </a> <a href="#" style="text-decoration: bold"> Fax </a> <a href="#" style="text-decoration: bold"> Email </a> kami berikut.
            </div>
            <div class="col-md-6">
                <span class="angka">JEMBER's Tobacco</span><br>
                <span class="angka">Jember</span><br>
                <i class="fa fa-home"></i> Fax :<span>0331 - 999998 <span><br>
                <i class="fa fa-phone"></i> Tlp :<span class="angka">0331 - 999999</span><br>
                                
                <i class="fa fa-envelope"></i> jemberstobacco@gmail.com <br>
            </div>
            <div class="col-md-12"></div>
        </div>
    </div>
</div>

  </div>

  <div class="row">
      <div class="col-md-12">© 2018 - Jurusan Teknologi Informasi - Politeknik Negeri Jember<br>
      Oleh : <span style="color:#00c0ef">Jember's Tobacco !!</span></div>
  </div>

  </div>

</div>
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.2.min.js"></script>-->
<script type="text/javascript" src="../js/jquery-1.js"></script>

<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="../js/bootstrap.js"></script>


<script type="text/javascript" src="../js/jquery_004.js"></script>

<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>-->
<script type="text/javascript" src="../js/jquery_008.js"></script>
<script type="text/javascript" src="../js/jquery_010.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery_007.js"></script>

<script async="" defer="defer" src="../js/embeds.js"></script>

<script type="text/javascript" src="../js/jquery_006.js"></script>


<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>-->
<script type="text/javascript" src="../js/owl.js"></script>


<script type="text/javascript" src="../js/jquery_003.js"></script>

<script type="text/javascript" src="../js/jquery_009.js"></script>

<script type="text/javascript" src="../js/jquery_005.js"></script>

<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>-->
<script type="text/javascript" src="../js/wow.js"></script>
<script type="text/javascript" src="../js/imagesloaded.js"></script>
<script type="text/javascript" src="../js/masonry.js"></script>


<script type="text/javascript" src="../js/main.js"></script>

<script type="text/javascript" src="../js/jquery_002.js"></script>

<script src="../js/api.js" async="" defer="defer"></script>

<script type="text/javascript" src="../js/jssocials.js"></script>

<script type="text/javascript" src="../js/prism.js"></script>
<script type="text/javascript" src="../js/prism-php.js"></script>
<script type="text/javascript" src="../js/prism-php-extras.js"></script>

<script type="text/javascript">
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
$(document).ready(function() {
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        // Avoid following the href location when clicking
        event.preventDefault(); 
        // Avoid having the menu to close when clicking
        event.stopPropagation(); 
        // If a menu is already open we close it
        //$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
        // opening the one you clicked on
        $(this).parent().addClass('open');

        var menu = $(this).parent().find("ul");
        var menupos = menu.offset();
      
        if ((menupos.left + menu.width()) + 30 > $(window).width()) {
            var newpos = - menu.width();      
        } else {
            var newpos = $(this).parent().width();
        }
        menu.css({ left:newpos });
    });
    if($('.jumbotron').length){
        $('.navbar-brand').hide();
    }        
});
$(function(){

  var contact_us;


  onloadCallback=function(){

  contact_us=grecaptcha.render(document.getElementById('recaptcha1'), {
          'sitekey' : "6LdQ4R0UAAAAAF45VpyVRqGyZh_nqFk1ZIJYcSfv",
          'theme' : 'light'
        });


  }


  $("#kontak-form").on("submit",function(evt){
    evt.preventDefault();    
    if(!$(this)[0].mengirim) {
    __this=$(this)      
    __this[0].mengirim=true;
    var val=__this.serialize();
    var action=__this.attr("action");
    __this.find("button").hide();
    __this.find(".cssload-container").show();
    $.ajax({
      type:"POST",
      url:action,
      data:val,
      cache:false,
      dataType:'json',
      success:function(a){
        if(a.status=='sukses'){
           noty({
            text:"Pesan anda terkirim. Terima kasih telah mengubungi kami",
            type: 'success',
            layout: 'center',            
            dismissQueue:true
                        });
         $('form#kontak-form').find("input[type=text],input[type=password], textarea").val("");
        } else if(a.status=='error') {
          noty({
            text:a.name,
            type: 'error',
            layout: 'center',
            dismissQueue:true

          });
        }

      },
      error:function(){
          noty({
            text:"Cek koneksi internet anda",
            type: 'error',
            layout: 'center',
            dismissQueue:true

          });
      },
      complete:function(){
        grecaptcha.reset(contact_us);  
        __this.find("button").show();
        __this.find(".cssload-container").hide();
        __this[0].mengirim=false;      
      }
    });
  }
  });


 var $grid = $(".grid").masonry({
    itemSelector: '.grid-item',   
    });

 $grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
 });

$(".grid a").tosrus({
  caption: {
    add:true
  }
});

});

$("#share").jsSocials({
            shares: [ "facebook", "twitter","googleplus", "whatsapp"],
            
 });

</script>