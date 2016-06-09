<html>
    <head>
         
    </head>
    <body>
        
        <div class="containerMap">
            
          <h1 style="text-align:center">Disfruta de memorias inolvidables en los mejores parques del mundo!</h1>
          <br><br>

          <div class='container-Imgs'>
            <div class="div_logo">  
              <img class="logo" src="{{url()}}/assets/Imagenes/Epcot_Logo.png" alt="">
            </div>

            <!-- Mapa de imagen Epcot-->
            <div class="mapaEpcot">
              <img src="{{url()}}/assets/Imagenes/Epcot.png" alt="Ejemplo de mapa de imagen" usemap="#mapaEpcot"  width="403" height="537">
            </div>
            <div class="clear"></div>
            <map name="mapaEpcot">
                <!-- Atracciones -->
                <area id="Innovation" shape="circle" coords="205,170,10" alt="innovations" data-toggle="modal" href="#modalInnovetions">
                <area id="ImageWorks" shape="circle" coords="126,241,10" alt="imageWorks" data-toggle="modal" href="#modalIamgeWorks">
                <area id="Imagination!" shape="circle" coords="98,251,10" alt="imagination!" data-toggle="modal" href="#modalImagination">
                <area id="France" shape="circle" coords="46,428,10" alt="France" data-toggle="modal" href="#modalFrance">
                <area id="Germany" shape="circle" coords="319,468,10" alt="Germany" data-toggle="modal" href="#modalGermany">       

                <!-- Restaurantes -->
                <area id="LeCellier" shape="circle" coords="112,294,7" alt="LeCellier" data-toggle="modal" href="#modalLeCellier">
                <area id="Chefs" shape="circle" coords="68,426,7" alt="Chefs" data-toggle="modal" href="#modalChefs">
                <area id="Dragons" shape="circle" coords="320,363,7" alt="Dragons" data-toggle="modal" href="#modalDragons">
                <area id="Marrakesh" shape="circle" coords="92,477,7" alt="Marrakesh" data-toggle="modal" href="#modalMarrakesh">
                <area id="RoseCrown" shape="circle" coords="112,350,7" alt="RoseCrown" data-toggle="modal" href="#modalRoseCrown">
            </map>
          </div>
        
            <br><br><br><br><br><br>
            
            <div class='container-Imgs'>
              <!-- Mapa de imagen Animal Kingdom -->
              <div class="div_logo">
                <img class="logo" src="{{url()}}/assets/Imagenes/Animal_Kingdom_Logo.png" alt="logo">
              </div>
              
              <div class="mapaAK">
                <img src="{{url()}}/assets/Imagenes/AnimalKingdom.png" alt="AnimalKingdom" usemap="#mapaAK" width="604" height="590">
              </div>
              <div class="clear"></div>
              
              <map name="mapaAK">
                <!-- Atracciones -->
                <area id="Maharajah" shape="circle" coords="441,34,10" alt="" data-toggle="modal" href="#modalMaharajah">
                <area id="Flights" shape="circle" coords="340,96,10" alt="" data-toggle="modal" href="#modalFlights">
                <area id="Bug" shape="circle" coords="272,185,10" alt="" data-toggle="modal" href="#modalBug">
                <area id="Whirl" shape="circle" coords="583,365,10" alt="" data-toggle="modal" href="#modalWhirl">
                <area id="Dinasour" shape="circle" coords="521,519,10" alt="" data-toggle="modal" href="#modalDinosaur">       

                <!-- Restaurantes -->
                <area id="YakYeti" shape="circle" coords="402,105,7" alt="LeCellier" data-toggle="modal" href="#modalYakYeti">
                <area id="TamuTamu" shape="circle" coords="123,116,7" alt="Chefs" data-toggle="modal" href="#modalTamuTamu">
                <area id="Dawa" shape="circle" coords="143,129,7" alt="Dragons" data-toggle="modal" href="#modalDawa">
                <area id="Pizzafari" shape="circle" coords="200,277,7" alt="Marrakesh" data-toggle="modal" href="#modalPizzafari">
                <area id="Restauranosaurus" shape="circle" coords="461,409,7" alt="RoseCrown" data-toggle="modal" href="#modalRestaurantosaurus">
            </map>
            </div>
            
          <!-- Modals -->
          
          <!-- Epcot -->
          <!-- Parques -->
          <div class="modal fade" id="modalInnovetions" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Innovations</h4>
                </div>
                <div class="modal-body">
                  <p>Innovation. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/Innoventions.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalIamgeWorks" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">ImageWorks</h4>
                </div>
                <div class="modal-body">
                  <p>ImageWorks. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/imageworks.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalImagination" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Imagination</h4>
                </div>
                <div class="modal-body">
                  <p>Imagination. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/imagination.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalFrance" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">France</h4>
                </div>
                <div class="modal-body">
                  <p>France. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/france.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalGermany" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Germany</h4>
                </div>
                <div class="modal-body">
                  <p>Germany. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/germany.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>  
            
          <!-- Restaurantes -->  
          <div class="modal fade" id="modalLeCellier" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Le Cellier Steakhouse</h4>
                </div>
                <div class="modal-body">
                  <p>Le Celllier Steakhouse. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/leCellier.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>   
          
          <div class="modal fade" id="modalChefs" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Les Chefs De France</h4>
                </div>
                <div class="modal-body">
                  <p>Les Chefs De France. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/chefs.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>   
          
          <div class="modal fade" id="modalDragons" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Nine Dragons Restaurant</h4>
                </div>
                <div class="modal-body">
                  <p>Nine Dragons Restaurant. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/dragons.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>   
          
          <div class="modal fade" id="modalMarrakesh" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Restaurant Marrakesh</h4>
                </div>
                <div class="modal-body">
                  <p>Restaurant Marrakesh. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/marrakesh.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>   
          
          <div class="modal fade" id="modalRoseCrown" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Rose & Crown</h4>
                </div>
                <div class="modal-body">
                  <p>Rose & Crowns. Ubicada en Epcot.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/rosecrown.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>   
          
          
          <!-- Animal Kingdom -->
          <!-- Parques -->
          <div class="modal fade" id="modalMaharajah" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Maharajah Jungle Trek</h4>
                </div>
                <div class="modal-body">
                  <p>Maharajah Jungle Trek. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/maharajah.jpeg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>  
          
            <div class="modal fade" id="modalFlights" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Flights Of Wonder</h4>
                </div>
                <div class="modal-body">
                  <p>Flights of Wonder. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/flight.jpeg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalBug" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">It's Tough To Be A Bug</h4>
                </div>
                <div class="modal-body">
                  <p>It's Tough To Be A Bug. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/bug.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalWhirl" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Primeval Whirl</h4>
                </div>
                <div class="modal-body">
                  <p>Primeval Whirl. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/whirl.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalDinosaur" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">DINOSAUR</h4>
                </div>
                <div class="modal-body">
                  <p>DINOSAUR. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/dinosaur.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Resturantes -->
          <div class="modal fade" id="modalYakYeti" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Yak & Yeti</h4>
                </div>
                <div class="modal-body">
                  <p>Yak & Yeti. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/yeti.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalTamuTamu" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tamu Tamu Refreshments</h4>
                </div>
                <div class="modal-body">
                  <p>Tamu Tamu Refreshments. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/tamu.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalDawa" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Dawa Bar</h4>
                </div>
                <div class="modal-body">
                  <p>Dawa Bar. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/dawa.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalPizzafari" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Pizzafari</h4>
                </div>
                <div class="modal-body">
                  <p>Pizzafari. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/pizzafari.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="modalRestaurantosaurus" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Restaurantosaurus</h4>
                </div>
                <div class="modal-body">
                  <p>Restaurantosaurus. Ubicada en Animal Kingdom.</p>
                  <img style="width:100%" src="{{url()}}/assets/Imagenes/restaurantosaurus.jpg" alt="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>  
            
        </div>  
        @yield('content')
        
    </body>
</html>