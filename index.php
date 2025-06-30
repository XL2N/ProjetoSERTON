<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERTON</title>
    <link rel="stylesheet" href="css/style-index.css">
</head>
<body>
    <div class="container">
        
        <header>
            <div class="logo">
                <img src="images/logo.png" alt="Logo Serton" />
            </div>
            <nav>
                <ul>
                    <li class="active"><a href="index.html">Página inicial</a></li>
                    <li><a href="sobre.html">Sobre nós</a></li>
                    <li><a href="categoria.html"">Categorias</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="buttons">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
                <div>
                    <span class="notifications">4</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                      </svg>
                </div>
                <div>
                    <a href="#" class="button-login">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                        </svg>                          
                        <span>Login</span>
                    </a>
                </div>
            </div>
        </header>
 
        <section class="principal">
                <div class="left">
                    <div>
                        <img src="images/principal/cactus.png" class="cacto" alt="Cacto" />
                        <h1>Bem vindo</h1>
                        <h1>O <span class="orange">sertão</span><br>agora está <span class="orange">online</span></h1>
                    </div>
                    <div>
                        <p class="subtitle">Fique por dentro das novidades dos estabelecimentos da sua cidade.</p>
                        <form action="#">
                            <input type="text" placeholder="Digite o nome da sua cidade" />
                            <button>Pesquisar</button>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <img src="images/principal/banner.png" alt="Banner" />
                    <img src="images/principal/pizza.png" class="pizza" alt="Pizza" />
                </div>
            </section>

    </div>
    <div class="container2">
        
        <section class="categorias">
            <h2 class="titulo">Categorias Populares</h2>
            <div class="categorias-grid">
                <div class="categoria-mercados">
                    <img src="icons/mercado.svg" alt="Mercados" />
                    <a>Mercados</a>
                </div>
                <div class="categoria-lojas"> 
                    <img src="icons/lojas.svg" alt="Lojas" />
                    <a>Lojas</a>
                </div>
                <div class="categoria-restaurantes">
                    <img src="icons/restaurantes.svg" alt="Restaurantes"/>
                    <a>Restaurantes</a>
                </div>
                <div class="categoria-farmacias">
                    <img src="icons/farmacias.svg" alt="Farmacias"/>
                    <a>Farmácias</a>
                </div>
                <div class="categoria-bar">
                    <img src="icons/bar.svg" alt="Bar" />
                    <a>Bar</a>
                </div>
            </div>
        </section>

        <section class="destaques">

            <div class="destaques-titulo">
                <h2>Destaques</h2>
                <span class="ver-todos">Ver todos</span>
            </div>
            
            <div class="destaques-grid">
                <div class="cartao" > 
                    <img src="images/principal/pizzaria1.png" alt="Pizzaria Sabor">
                    <div class="info">
                        <h3 class="nome">Pizzaria Sabor</h3>
                        <div class="avaliacao">
                            <img src="icons/star.svg" alt="estrelas">
                            <p> 4.5</p>
                        </div>
                        <div class="endereco">
                            <img src="icons/maps.svg" alt="estrelas" width="43px">
                            <p>Endereço <br/> Rua João Carlos Menezes - 100</p>
                        </div>
                    </div>
                </div>
                <div class="cartao"> 
                    <img src="images/principal/pizzaria2.png" alt="Pizzaria Sabor">
                    <div class="info">
                        <h3 class="nome">Pizzaria Sabor</h3>
                        <div class="avaliacao">
                            <img src="icons/star.svg" alt="estrelas">
                            <p> 4.5</p>
                        </div>
                        <div class="endereco">
                            <img src="icons/maps.svg" alt="estrelas" width="43px">
                            <p>Endereço <br/> Rua João Carlos Menezes - 100</p>
                        </div>
                    </div>
                </div>
                <div class="cartao"> 
                    <img src="images/principal/pizzaria3.png" alt="Pizzaria Sabor">
                    <div class="info">
                        <h3 class="nome">Pizzaria Sabor</h3>
                        <div class="avaliacao">
                            <img src="icons/star.svg" alt="estrelas">
                            <p> 4.5</p>
                        </div>
                        <div class="endereco">
                            <img src="icons/maps.svg" alt="estrelas" width="43px">
                            <p>Endereço <br/> Rua João Carlos Menezes - 100</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="social">
            <div class="serton">
                <img src="icons/serton.svg" alt="Logo SertOn" >
            </div>
            <p>Nossa missão é trazer o sertão para o mundo digital, valorizando e apoiando empreendedores locais</p>
            <div class="redes">    
                <img src="icons/instagram.svg" alt="Instagram">
                <img src="icons/facebook.svg" alt="Facebook">
                <img src="icons/twitter.svg" alt="Twitter">
            </div>
        </div>
        <div class="sobre">
            <h3>Sobre</h3>
            <a href="sobre.html">Sobre nós</a> 
            <a href="index.html">Novidades</a> 
            <a href="menuH.html">Menu</a>
        </div>
        <div class="novidades">
            <h3>Novidades</h3>
            <input type="text">
            <button>Inscrever-se</button>
        </div>
    </footer>
    <div class="retangulo"></div>
</body>
</html>