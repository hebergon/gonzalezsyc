
<section>
    
    <div class="container" id="blogs">
        <h4 class="font-monse">Lo más reciente</h4>
        <hr>
        <div class="owl-carousel owl-theme" id="owl2">
            
            
            
        </div>
    </div>
    
</section>

<br><br>

<script>
  window.onload = getData;
  var b = -1;
  var ids = [];

  function getData(){
      db.collection('noticias').orderBy('fecha', 'desc').get().then((snapshot) => {
        snapshot.docs.forEach(doc => {
            var content = '';
            b = b + 1;
            var img1 = doc.data().imagen1;
            var titulo = doc.data().titulo;
            var descripcion = doc.data().descripcion;
            var uid = doc.id;
            content += '<div class="item"><div class="card cardd m-2"><img src="' + img1 + '" class="card-img-top rounded-top rounded-top" style="max-height: 250px;object-fit: cover;" alt="..."><div class="card-body"><h5 class="card-title">' + titulo + '</h5>';
            content += '<p class="card-text">¡Mira las fotos de nuestro evento!</p><div class="text-center"><a href="noticia.php?' + uid + '" class="btn btn-outline-primary">Ir al artículo</a></div></div></div></div>';
            add2(content);
        });
      });
  }

  function add2(content){
    $('#owl2').trigger('destroy.owl.carousel');
    $('#owl2').append(content);
    $('#owl2').owlCarousel({
      dots: true,
      items: 3,
      loop: false,
      autoplay: true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      lazyLoad: false,
      responsive:{
          0:{
              items:1,
              nav:false,
              
          },
          600:{
              items:2,
              nav: false
          },
          1000:{
              items:3,
              nav:true,
              loop:false
          }
      }
    
    });
  }

  function swal(){
      Swal.fire({
          icon: 'info',
          title: 'Oops...',
          text: '¡Próximamente!',
          
      })
  }
</script>