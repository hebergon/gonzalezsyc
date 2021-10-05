
<br>
<section style="text-align:center;max-width: 90%;margin:auto;">
    <div class="text-left">
        <h3 class="font-roboto" style="letter-spacing: 2px;">Nuestros proyectos arquitectónicos</h3>
    </div>
    <br>
    <div class="card cardd border-gray-300 p-2 p-md-3 p-lg-5 text-center">
        
        <div class="card-body pt-0">
            <div class="container">
                <div class="row mt-4 mt-lg-6" id="marcas">
                    <div class="owl-carousel owl-theme" id="carruselProyectos">

                    </div>
                </div>
            </div>
            <div class="text-right">
                <a href="#" class="btn btn-outline-primary">Ver más</a>
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
            addProject(content);
        });
      });

  

  function addProject(content){
    $('#carruselProyectos').trigger('destroy.owl.carousel');
    $('#carruselProyectos').append(content);
    $('#carruselProyectos').owlCarousel({
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
