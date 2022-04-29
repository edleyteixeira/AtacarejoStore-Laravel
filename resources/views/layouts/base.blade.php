<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js"></script>
    </head>

    <style type="text/css">
        .txt-1{color: #f2ae1b;} .txt-2{color: #9450f4;} .txt-3{color: #fff;}
        .bg-1{background-color: #f2ae1b} .bg-2{background-color: #9450f4}
        .bgg-1{background-image: linear-gradient(#ffc446, #f2ae1b)} .bgg-2{background-image: linear-gradient(#9450f4, #5a11c1)}
        .bt{border: none; background: none; padding: 0; margin: 0;}
    </style>

    <body>
        <header>
            {{-- ANNOUNCEMENT --}}
            <section class="announcement d-flex justify-content-center  bg-2 p-1  txt-3 ">
                <span>TODA LOJA EM 10X SEM JUROS</span>
            </section>
            

            {{--MOBILE--}}   
            
                {{-- MENU HIDE MOBILE --}}
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <figure class="p-2">
                        <img src="/media/logo-menu-mobile.png" width="170" alt="Logomarca Atacarejo Store">
                        <figcaption > Logomarca Atacarejo Store </figcaption>
                    </figure>
                    <button class="navbar-toggler bt-menu d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
                        <ion-icon size="large"  src="/icons/menu.svg"></ion-icon>
                    </button>
                    <form action="" class="search d-none">
                        <label class="border w-75 p-2 d-flex rounded-pill align-items-stretch m-auto bg-white">
                            <input class="w-100 ps-2" type="text" placeholder="Busque um produto">
                            <button>
                                <ion-icon size="large" src="/icons/search.svg"></ion-icon>
                            </button>
                        </label>
                    </form>
                    <div class="offcanvas offcanvas-end" style="width: 300px" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                        <div class="offcanvas-header d-flex flex-column ">
                            <button type="button" class="btn-close bt-menu align-self-end me-2" data-bs-dismiss="offcanvas" aria-label="Close">
                                <ion-icon size="large" src="/icons/close.svg"></ion-icon>
                            </button>
                            <div  class="links-menu d-flex flex-column align-self-start mt-5">
                                <a class="me-3" href="/">Home</a>
                                <a href="/rastrearpedido/">Rastrear Pedido</a>
                                <a href="/contato/">Contato</a>
                                <hr>
                                <div class="d-flex flex-column">
                                    <a  href="#">Sobre</a>
                                    <a  href="#">Faq</a>
                                    <a  href="#">Politica de Privacidade</a>
                                    <a  href="#">Trocas e Devoluções</a>
                                    <a  href="#">Termos de Uso</a>
                                    <a  href="#">Política de Cookies</a>
                                </div>
                            </div>
                            <div class="mt-5 d-flex  w-100 justify-content-evenly">
                                <a class="me-2 text-success fs-5" href="https://wa.me/5581920010083"><ion-icon size="large" name="logo-whatsapp"></ion-icon> </a>
                                <a class="me-2 text-primary fs-5" href="tel:+"><ion-icon size="large" name="call"></ion-icon></a>
                                <a class="me-2 fs-6" href="mailto:contato@atacarejostore.com.br"><ion-icon size="large" name="mail"></ion-icon> </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-none d-md-flex justify-content-end w-50 me-5">
                        <a class="me-3" href="/">Home</a>
                        <a class="me-3" href="/rastrearpedido/">Rastrear Pedido</a>
                        <div class="dropdown">
                            <a class="me-3" class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Institucional</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Sobre</a></li>
                              <li><a class="dropdown-item" href="#">Faq</a></li>
                              <li><a class="dropdown-item" href="#">Politica de Privacidade</a></li>
                              <li><a class="dropdown-item" href="#">Trocas e Devoluções</a></li>
                              <li><a class="dropdown-item" href="#">Termos de Uso</a></li>
                              <li><a class="dropdown-item" href="#">Política de Cookies</a></li>
                              
                            </ul>
                        </div>
                        <a class="me-3" href="/contato/">Contato</a>
                              
                    </div>
                    
                    
                  </nav>
                  
                
                        
                        
                
                    
                </section>
            </nav>
        </header>
        
        <main>
            @yield('main')
            

        </main>
        

        <footer class="visually-hidden">
            <p>Atacarejo Store</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
