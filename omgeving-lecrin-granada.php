<html>
    <head>
        <title>Casa en el valle</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <script defer src="assets/lib/fontawesome/js/all.js"></script>
 
        <link rel="stylesheet" href="assets/css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;1,400;1,500&family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;1,400;1,500&family=Montserrat:wght@300;400;500;600&family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
      </head>
    <body>
      <main id="casa">
        <div class="container">
            <header>
                <section class="top-navbar navbar-fixed-top">
                     <!--navigatie start-->
                     <?php include '_navigation.php';?> 
                     <!-- navigatie stop-->
                </section>
            </header>
          </div>
            <section>
              <div class="container-fluid">
                <!-- slider 2-->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/omgeving/lecrin-vallei-omgeving.jpg" alt="First slide">
                    </div>
                  </div>
              </div>
              <!-- end slider 2 -->
            </section>
           
            
            <section>
              <div class="container">
                    <div class="">
                      <div class="row">
                        <div class="col-md-12">
                          <h3>De omgeving en activiteiten</h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-2">
                          <div class="acc-desc">
                            <p><strong>La casa en el valle</strong> is de perfecte uitvalsbasis voor een heerlijke vakantie! De rust die er heerst en de diverse uitstapjes die je in de omgeving kunt maken, maakt dit de perfecte locatie voor elk wat wils.
                              Hieronder hebben we een kleine opsomming gemaakt van de mogelijkheden. Maar ook in het huis zelf ligt verschillende informatie en boekjes die tijdens de vakantie geraadpleegt mogen worden.
                             </p>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
            </section>
            <!-- section omgeving 1-->
            <section>
              <div class="container" id="omgeving">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="omgeving-container-parent first">
                          <div class="omgeving-child bg-one">
                            <a href="#" class="">Wandelen</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="omgeving-container-parent first">
                          <div class="omgeving-child bg-two">
                            <a href="#" class="">Granada</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="omgeving-container-parent first">
                          <div class="omgeving-child bg-three">
                            <a href="#" class="">Strand</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!--end section omgeving 1-->
               <!-- section omgeving 2-->
               <section>
                <div class="container" id="omgeving">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="omgeving-container-parent first">
                            <div class="omgeving-child bg-four">
                              <a href="#" class="">Alpujarras</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="omgeving-container-parent first">
                            <div class="omgeving-child bg-five">
                              <a href="#" class="">Lecrin Vallei</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="omgeving-container-parent first">
                            <div class="omgeving-child bg-six">
                              <a href="#" class="">Skie&euml;n</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!--end section omgeving 2-->
              <!-- area formulier -->
           <section>
             <div class="container">
                <div class="col-md-12 mb-2">
                    <div class="acc-desc">
        
                      <p>Heb jij ook zin in een vakantie in de mooie Lecrin Vallei? Waar je even terug ga in de tijd maar ook op een half uur rijden van wat meer hektiek, vul dan onderstaande
                          formulier in.
                      </p>
                    </div>
                    <form action="" method="post">
                      <div>
                        <label for="name">Naam</label>
                        <input type="text" id="name" name="user_name" />
                      </div>
                      <div>
                        <label for="surname">Achternaam</label>
                        <input type="text" id="surname" name="sure_name" />
                      </div>
                      <div>
                        <label for="mail">E-mail</label>
                          <input type="email" id="mail" mail="user_mail" />
                      </div>
                      <div>
                        <label for="name">Hoeveel mensen</label>
                          <select name="amount people">
                            <option value="4 personen">4 personen</option>
                            <option value="5 personen">5 personen<option>
                            <option value="6 personen" selected="selected">6 personen<option>
                             <option value="7 personen">7 personen<option>
                            <option value="8 personen">8 personen<option>
                            <option value="9 personen">9 personen<option>
                             <option value="10 personen">10 personen<option>
                          </select>
                      </div>
                      <div>
                        <label for="msg">Bericht:</label>
                          <textarea id="msg" name="user_message"></textarea>
                      </div>
                    </form>
                </div>
             </div>
          <section>
              <div class="container-fluid">
                 <!-- sub footer -->
                 <?php include '_sub-footer.php';?> 
                    <!-- end subfooter -->
                    <!-- footer -->
                    <?php include '_footer.php';?> 
                    <!-- end footer -->
            </section>
      </main>

          <!-- Bootstrap core JavaScript -->
          <script src="assets/lib/jquery/jquery-3.3.1.slim.min.js "></script>
          <script src="assets/lib/bootstrap/js/bootstrap.min.js "></script>
          <script defer src="assets/js/casa-valle.js"></script>
    </body>
</html>