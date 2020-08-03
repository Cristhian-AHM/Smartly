@extends('structure')
@section('title', 'Desarrollo de Software a Medida | Smartly Code')
@section('link')
<link href="{{asset('/css/welcome.css')}}" rel="stylesheet"> 
@stop

@section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center-container mt-lg-5">
                       <h1>
                            Diseñamos experiencias
                            <br>
                            extraordinarias
                       </h1>
                    </div>
                    <div class="col-md-12 center-container mt-3">
                        <p class="subtitle">Entregamos resultados significativos y duraderos para nuestros 
                            clientes <br> mejorando la experiencia de sus usuarios.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="Proyectos">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-12 center-container negative-margin-top">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{asset('images/TDAHKids/tdahkids.png')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('images/Iwaachi/iwaachi-project.png')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('images/Chuuk/chuuk.png')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('images/Computer_Vision/Mesh-errors-project.png')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('images/ITW/itw.png')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('images/Chuuk/chuuk-project.png')}}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Que_Hacemos" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center-container">
                        <h2> Lo que hacemos </h2>
                        <br>
                        <p>
                            Volvemos realidad tus ideas.
                            <br>
                            Nos destacamos por nuestras habilidades en el desarrollo de aplicaciones web y móviles
                            <br>
                            utilizando tecnología para ayudar a que su negocio tenga exito.
                        </p>
                    </div>
                </div>
                <div class="container mt-5 pb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="carouselCards" class="carousel slide d-none d-sm-block" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <div class="row">
                                        <div class="offset-lg-2 col-lg-3 col-md-4">
                                          <div class="card center-container card-wdg">
                                            <img class="card-img-top img-bot mt-4 img-wdg" src="{{asset('/images/Icons/web-design.png')}}" alt="Card image cap">
                                            <img class="card-img-top img-top mt-4 img-wdg" src="{{asset('/images/Icons/web-design-white.png')}}" alt="Card image cap">
                                            <div class="card-body">
                                              <h5 class="card-title">Diseño Web</h5>
                                              <p class="card-text text-justify">Con una pasión para los detalles, nos comprometemos totalmente a proporcionar un diseño web que no sólo se vea bien, sino que también sea funcional y fácil de usar.</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="card center-container card-md">
                                            <img class="card-img-top img-bot mt-2 img-md" src="{{asset('/images/Icons/mobile-development.png')}}" alt="Card image cap">
                                            <img class="card-img-top img-top mt-2 img-md" src="{{asset('/images/Icons/mobile-development-white.png')}}" alt="Card image cap">
                                            <div class="card-body">
                                              <h5 class="card-title negative-margin-title">Desarrollo Móvil</h5>
                                              <p class="card-text text-justify">Hoy en día 7 de cada 10 personas poseen un smartphone, por lo que el desarrollo móvil es algo esencial. Creamos aplicaciones móviles efectivas y fáciles de usar.</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                          <div class="card center-container card-wd">
                                            <img class="card-img-top img-bot mt-4 img-wd" src="{{asset('/images/Icons/web-development.png')}}" alt="Card image cap">
                                            <img class="card-img-top img-top mt-4 img-wd" src="{{asset('/images/Icons/web-development-white.png')}}" alt="Card image cap">
                                            <div class="card-body">
                                              <h5 class="card-title mt-4">Desarrollo Web</h5>
                                              <p class="card-text text-justify">Nos mantenemos a la vanguardia en las tecnologías de desarrollo web, asegurando que su sitio web se construye sobre una base estable y duradera.</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row">
                                      <div class="offset-lg-2 col-lg-3 col-md-4">
                                        <div class="card center-container card-ux">
                                          <img class="card-img-top img-bot mt-2 img-ux" src="{{asset('/images/Icons/ux-design.png')}}" alt="Card image cap">
                                          <img class="card-img-top img-top mt-2 img-ux" src="{{asset('/images/Icons/ux-design-white.png')}}" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title negative-margin-title">Diseño UX</h5>
                                            <p class="card-text text-justify">A través del diseño UX, creamos una mejor experiencia digital para sus usuarios, simplificando lo complejo manteniendo así el producto intuitivo y fácil de usar.</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class=" col-lg-3 col-md-4">
                                        <div class="card center-container card-cv">
                                          <img class="card-img-top img-bot mt-4 img-cv" src="{{asset('/images/Icons/computer-vision.png')}}" alt="Card image cap">
                                          <img class="card-img-top img-top mt-4 img-cv" src="{{asset('/images/Icons/computer-vision-white.png')}}" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title mt-1">Visión Artificial</h5>
                                            <p class="card-text text-justify">Smartly Code le ofrece servicios en sistemas de vision artificial para el control de calidad, reconocimiento, inspección y detección de defectos entre otros.</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-3 col-md-4">
                                        <div class="card center-container card-ad">
                                          <img class="card-img-top img-bot mt-4 img-ad" src="{{asset('/images/Icons/Administration.png')}}" alt="Card image cap">
                                          <img class="card-img-top img-top mt-4 img-ad" src="{{asset('/images/Icons/Administration-white.png')}}" alt="Card image cap"> 
                                          <div class="card-body">
                                            <h5 class="card-title">Mantenimiento Web</h5>
                                            <p class="card-text text-justify">Nosotros nos encargamos de cuidar, actualizar y mantener tu sitio web asegurandonos que siempre esté en línea.</p>
                                          </div>
                                        </div>
                                      </div>
                                        
                                      </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="row">
                                        <div class="offset-lg-4 col-lg-3 col-md-4">
                                          <div class="card center-container card-con">
                                            <img class="card-img-top img-bot mt-3 img-con" src="{{asset('/images/Icons/consult.png')}}" alt="Card image cap">
                                            <img class="card-img-top img-top mt-3 img-con" src="{{asset('/images/Icons/consult-white.png')}}" alt="Card image cap"> 
                                            <div class="card-body">
                                              <h5 class="card-title">Asesoría Tecnológica</h5>
                                              <p class="card-text text-justify">El asesoramiento tecnológico trata de orientar a las empresas acerca de cuales son las tecnologías más adecuadas de acuerdo sus necesidades. </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselCards" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselCards" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div id="cards-xs" class="d-block d-sm-none">
                              <div class="row">
                                <div class="col-sm-12 ">
                                  <div class="card center-container card-wdg">
                                    <img class="card-img-top img-bot mt-4 img-wdg" src="{{asset('/images/Icons/web-design.png')}}" alt="Card image cap">
                                    <img class="card-img-top img-top mt-4 img-wdg" src="{{asset('/images/Icons/web-design-white.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Diseño Web</h5>
                                      <p class="card-text text-justify">Con una pasión para los detalles, nos comprometemos totalmente a proporcionar un diseño web que no sólo se vea bien, sino que también sea funcional y fácil de usar.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                  <div class="card center-container card-md">
                                    <img class="card-img-top img-bot mt-2 img-md" src="{{asset('/images/Icons/mobile-development.png')}}" alt="Card image cap">
                                    <img class="card-img-top img-top mt-2 img-md" src="{{asset('/images/Icons/mobile-development-white.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title negative-margin-title">Desarrollo Móvil</h5>
                                      <p class="card-text text-justify">Hoy en día 7 de cada 10 personas poseen un smartphone, por lo que el desarrollo móvil es algo esencial. Creamos aplicaciones móviles efectivas y fáciles de usar.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                  <div class="card center-container card-wd">
                                    <img class="card-img-top img-bot mt-4 img-wd" src="{{asset('/images/Icons/web-development.png')}}" alt="Card image cap">
                                    <img class="card-img-top img-top mt-4 img-wd" src="{{asset('/images/Icons/web-development-white.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title mt-4">Desarrollo Web</h5>
                                      <p class="card-text text-justify">Nos mantenemos a la vanguardia en las tecnologías de desarrollo web, asegurando que su sitio web se construye sobre una base estable y duradera.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                  <div class="card center-container card-ux">
                                    <img class="card-img-top img-bot mt-2 img-ux" src="{{asset('/images/Icons/ux-design.png')}}" alt="Card image cap">
                                    <img class="card-img-top img-top mt-2 img-ux" src="{{asset('/images/Icons/ux-design-white.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title negative-margin-title">Diseño UX</h5>
                                      <p class="card-text text-justify">A través del diseño UX, creamos una mejor experiencia digital para sus usuarios, simplificando lo complejo manteniendo así el producto intuitivo y fácil de usar.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=" col-sm-12 mt-3">
                                  <div class="card center-container card-cv">
                                    <img class="card-img-top img-bot mt-4 img-cv" src="{{asset('/images/Icons/computer-vision.png')}}" alt="Card image cap">
                                    <img class="card-img-top img-top mt-4 img-cv" src="{{asset('/images/Icons/computer-vision-white.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title mt-1">Visión Artificial</h5>
                                      <p class="card-text text-justify">Smartly Code le ofrece servicios en sistemas de vision artificial para el control de calidad, reconocimiento, inspección y detección de defectos entre otros.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                  <div class="card center-container card-ad">
                                    <img class="card-img-top img-bot mt-4 img-ad" src="{{asset('/images/Icons/Administration.png')}}" alt="Card image cap">
                                    <img class="card-img-top img-top mt-4 img-ad" src="{{asset('/images/Icons/Administration-white.png')}}" alt="Card image cap"> 
                                    <div class="card-body">
                                      <h5 class="card-title">Mantenimiento Web</h5>
                                      <p class="card-text text-justify">Nosotros nos encargamos de cuidar, actualizar y mantener tu sitio web asegurandonos que siempre esté en línea.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                  <div class="card center-container card-con">
                                    <img class="card-img-top img-bot mt-3 img-con" src="{{asset('/images/Icons/consult.png')}}" alt="Card image cap">
                                    <img class="card-img-top img-top mt-3 img-con" src="{{asset('/images/Icons/consult-white.png')}}" alt="Card image cap"> 
                                    <div class="card-body">
                                      <h5 class="card-title">Asesoría Tecnológica</h5>
                                      <p class="card-text text-justify">El asesoramiento tecnológico trata de orientar a las empresas acerca de cuales son las tecnologías más adecuadas de acuerdo sus necesidades. </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="hr">
        <section id="Trabaja_con_Nosotros" class="pt-5 mb-5">
          <div class="container">
            <div class="row">
              <div class="col-md-5 text-justify">
                <h2>Tú manejas el negocio, nosotros manejamos la aplicación</h2>
                <br>
                <p>
                  Cubrimos todo lo necesario para desarrollar un producto innovador de primera categoría,
                  desde la experencia del usuario hasta las aplicaciones nativas.
                  <br><br>
                  Creemos que una buena comunicación y una relación de trabajo positiva son esenciales
                   cuando se trabaja en cualquier proyecto. Trabajaremos estrechamente con usted a lo largo de
                    su proyecto, escucharemos sus requerimientos para poder traer a la vida el proyecto que desea.
                    Incluso después de que el proyecto se haya completado, seguiremos a su lado para apoyarlo con su nuevo 
                     sitio web, y mantenerlo en condiciones de primera clase y funcionando sin problemas.
                  Codificamos con estándares muy altos y probamos continuamente, lo que crea productos fáciles de mantener
                  y de alta calidad.
                </P>
              </div>
              <div class="col-md-7 left-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                    <img src="{{asset('images/Decoration_Images/computer.jpg')}}" class="img-fluid reduced corner-border" alt="">
                    </div>
                    <div class="col-md-6 mt-5">
                      <img src="{{asset('images/Decoration_Images/developer.jpg')}}" class="img-fluid corner-border" alt="">
                    </div>
                    <div class="col-md-6 mt-5">
                      <img src="{{asset('images/Decoration_Images/notebook.jpg')}}" class="img-fluid corner-border" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="hr">
        <section id="Nuestro_Trabajo" class="pt-5">
          <div class="container">
            <div class="row">
              <div class="col-md-12 center-container mb-5">
                <h2> Vea el trabajo que amamos hacer </h2>
                <br>
                <p> Somos un equipo pequeño y centrado con las habilidades para hacerlo realidad. </p>
              </div>
              <div class="col-md-6 mt-md-5 center-container container-img">
                <img src="{{asset('images/Iwaachi/iwaachi-reports.jpg')}}" alt="" class="img-fluid img-iwaachi">
                <img src="{{asset('images/Iwaachi/iwaachi-stadistics.jpg')}}" alt="" class="img-fluid img-iwaachi">
                <img src="{{asset('images/Iwaachi/iwaachi.jpg')}}" alt="" class="img-fluid img-iwaachi">
              </div>
              <div class="col-md-6 mt-md-5 pt-md-5 ">
                <h5 class="font-weight-bold">Smartly Code</h5>
                <h4 class="font-weight-bold">Iwáachi</h4>
                
                <p class="text-justify mt-4">Iwáachi, del Tarahumara que significa "Agujero", es un producto propio de nosotros, es una aplicación móvil enfocada en la identificación, clasificación y 
                  ubicación de baches, calles dañadas y hundimientos en el manto asfáltico de las ciudades. Tan solo basta con una fotografía en el problema y la aplicación se encarga de 
                identificar, registrar y ubicar el desperfecto mostrándolo en un mapa, dándonos un resumen de los desperfectos registrados y un historial para ver si se le esta dando seguimiento pertinente.</p>
              </div>
              <hr class="hr">
              <div class="col-md-6 mt-5 pt-3">
                <h5 class="font-weight-bold">
                  ITW | Global Diversified Manufacturer</h5>
                <h4 class="font-weight-bold">Prueba Electrica</h4>
                
                <p class="text-justify mt-4">ITW vino con un problema claro, la alta rotación de personal en su área de prueba eléctrica. Ellos tenían una idea clara de como querían solucionar este problema
                  pero carecían de la habilidad técnica necesaria para llevarla acabo. Después de realizar un análisis exhaustivo se diseño una solución capaz de suprimir su problema y con una curva 
                  de aprendizaje baja para que fuese sencilla de asimiliar por sus empleados. Dos actualizaciones más se realizaron en este caso para brindar más opciones a los encargados tales como la generación de reportes,
                  la implementación de modelos de piezas y el seguimiento individual de cada empleado por mencionar algunos.
                </p>
              </div>
              <div class="col-md-6 container-img-itw mt-5 pt-5">
                <img src="{{asset('images/ITW/itw-test.png')}}" alt="" class="img-fluid img-itw">
                <img src="{{asset('images/ITW/itw-models.png')}}" alt="" class="img-fluid img-itw">
                <img src="{{asset('images/ITW/itw-screen.png')}}" alt="" class="img-fluid img-itw">
              </div>
            </div>
          </div>
        </section>

        <section id="contact" class="Yellow">
          <div class="container contact ">
            <div class="row">
              <div class="col-md-6 center-container">
                <h3 class="text-justify bold mb-4">¡Trabajemos juntos!</h3>
                <p class="text-justify footer-subtitle">Si quieres trabajar con nosotros, sólo rellena el formulario de enfrente, dando tantos detalles como puedas, y nos pondremos en contacto para discutir tu proyecto más a fondo.</p>
              </div>
              <div class="col-md-6 center-container ">
                <form class="contactForm ml-md-5 shadow">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre*">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="tel" class="form-control" id="inputPassword4" placeholder="Teléfono">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Correo*">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="inputPassword4" placeholder="Compañía">
                    </div>
                  </div>
                  <div class="form-group col-md-12">

                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Cuéntanos sobre tu proyecto"></textarea>
                  </div>
                  <button type="submit" class="btn btn-outline-dark">Enviar</button>
                </form>
              </div>
            </div>
          </div>
        </section>

        @stop


