<section id="banner-area">
    <div class="owl-carousel owl-theme" id="carruselPrincipal">
        
    </div>
</section>

<script>

    db.collection('banners').get().then((snapshot) => {
        snapshot.docs.forEach(doc => {
            var content = '';
            
            var img = doc.data().imagen;
            
            var uid = doc.id;
            content += '<div class="item"><img src="'+ img +'" alt="banner1"></div>';
            addBanner(content);
        });
    });

  

  function addBanner(content){
    $('#carruselPrincipal').trigger('destroy.owl.carousel');
    $('#carruselPrincipal').append(content);
    $('#carruselPrincipal').owlCarousel({
        dots: true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        
    
    });
  }
</script>
