
<br>
<section class="section" style="text-align:center;max-width: 90%;margin:auto;">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="text-left">
                    <h3 class="font-roboto" style="letter-spacing: 2px;">Algunos clientes con los que hemos trabajado</h3>
                </div>
                <div class="card cardd border-gray-300 p-2 p-md-3 p-lg-5 text-center section-md">
                    <div class="card-body pt-0">
                        <div class="container">
                            <div class="row mt-4 mt-lg-6" id="marcas">
                                <div class="owl-carousel owl-theme" id="carruselMarcas">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="text-right">
                            <a href="#" class="btn btn-outline-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<br>

<script>

    db.collection('marcas').get().then((snapshot) => {
        snapshot.docs.forEach(doc => {
            var content = '';
            
            var img = doc.data().imagen;
            
            var uid = doc.id;
            content += '<div class="item"><img src="'+ img +'" style="object-fit: contain;height: 100px; margin-right: 5px; padding: 15px;" alt="banner1"></div>';
            addBrand(content);
        });
      });

  

  function addBrand(content){
    $('#carruselMarcas').trigger('destroy.owl.carousel');
    $('#carruselMarcas').append(content);
    $('#carruselMarcas').owlCarousel({
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 2
            },
            700: {
                items: 5
            }
        },
        
        
    
    });
  }

  
</script>
