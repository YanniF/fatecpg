<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="DTI Fatec Praia Grande">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fatec PG - @yield('title')</title>

    <link rel="icon" type="image/png" href="{{ asset('img/icone.png') }}" />
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{{ asset('css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/owl-carousel/owl.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/owl-carousel/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <header>
    <div class="container">
        <div class="content">
                <div class="logoFatec">
                    <h1 class="hidden">Fatec PG</h1>
                    <a href="/">
                        <img src="{{ asset('img/logoFatec.png') }}" class="img-responsive" alt="Fatec PG" title="Fatec PG">
                    </a>                
                </div>
                <div class="logoCPS">
                    <h1 class="hidden">Centro Paula Souza</h1>
                    <a href="http://www.cps.sp.gov.br/" target="_blank">
                        <img src="{{ asset('img/logoCPS.png') }}" class="img-responsive" alt="Centro Paula Souza" title="Centro Paula Souza">
                    </a>
                </div>
                <div class="logoGoverno">
                    <h1 class="hidden">Governo do Estado de São Paulo</h1>
                    <a href="http://www.saopaulo.sp.gov.br/" target="_blank">
                        <img src="{{ asset('img/logoGoverno.png') }}" class="img-responsive" alt="Governo do Estado de São Paulo" title="Governo do Estado de São Paulo">
                    </a>
                </div>      
            </div>
        </div>            
    </header>

    <!-- Menu -->
    <div class="navegacao">
        <div class="container">
            <div class="content">
                <div class="navegacao-content">
                    <nav class="navbar navbar-default">
                        
                        <!-- For better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
            
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li {{ (Request::is('/') ? 'class=active' : '') }}><a href="/">Home <span class="sr-only">(current)</span></a></li>
                                <li class="dropdown {{ (Request::is('cursos/*') ? 'active' : '') }}">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/cursos/ads') }}">Análise e Desenvolvimento de Sistemas</a></li>
                                        <li><a href="{{ url('/cursos/comex') }}">Comércio Exterior</a></li>
                                        <li><a href="{{ url('/cursos/ge') }}">Gestão Empresarial</a></li>
                                        <li><a href="{{ url('/cursos/pq') }}">Processos Químicos</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://www.vestibularfatec.com.br/home/" target="_blank">Vestibular</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Siga <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="https://www.sigacentropaulasouza.com.br/aluno/login.aspx" target="_blank">Aluno</a></li>
                                        <li><a href="https://www.sigacentropaulasouza.com.br/fatec/defaultt.html" target="_blank">Professor</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://www.fatecpg.com.br/estagio/default.aspx">Estágio</a></li>
                                <li class="dropdown {{ (Request::is('secretaria') ? 'active' : '') }}">
                                    <a href="http://www.fatecpg.com.br/estagio/default.aspx" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departamentos <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="http://www.biblioceeteps.com.br/">Biblioteca</a></li>
                                        <li><a href="#">Coordenação</a></li>
                                        <li><a href="#">Direção</a></li>
                                        <li><a href="http://www.fatecpg.com.br/tic/default.aspx">DTI</a></li>
                                        <li><a href="{{action('Secretaria\SecretariaController@index')}}">Secretaria</a></li>
                                    </ul>
                                </li>
                            </ul>
                          
                            <ul class="nav navbar-nav navbar-right">
                                @if (Auth::guest())
                                    <li><a href="#" data-toggle="modal" data-target="#loginModal">Login <span class="glyphicon glyphicon-user"></span></a></li>
                                @else                                
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/noticia') }}"><span class="glyphicon glyphicon-menu-hamburger"></span> Notícias</a></li>
                                            <li><a href="{{ url('slider') }}"><span class="glyphicon glyphicon-menu-hamburger"></span> Slider</a></li>
                                            <li>
                                                <a href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    <span class="glyphicon glyphicon-log-out"></span> Logout
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="post" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>

                    </nav>
                </div><!-- navegacao-content -->
            </div><!-- content -->
        </div><!-- container -->
    </div><!-- Navegação -->

    <!-- Modal -->    
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label" for="username">Usuário:</label>
                            <div class="inputs">
                                <input type="text" class="form-control" name="username" id="username" maxlength="30" placeholder="Matrícula" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Senha:</label>
                            <div class="inputs">
                                <input type="password" class="form-control" name="password" id="password" maxlength="30" placeholder="Senha" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="check">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Lembrar</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="botao">
                                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                            </div>
                        </div>                    
                    </form>
                </div>            
            </div><!--modal-content-->
        </div>
    </div>   
       
    @yield('content')

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <div class="content">
                <div class="redes-sociais">
                    <a href="https://www.facebook.com/fatecpg" target="_blank">
                        <img src="{{ asset('img/icone_facebook.png') }}" class="img-responsive" alt="Facebook Fatec PG" title="Facebook Fatec PG">
                    </a>
                    <a href="https://twitter.com/fatecpg" target="_blank">
                        <img src="{{ asset('img/icone_twitter.png') }}" class="img-responsive" alt="Twitter Fatec PG" title="Twitter Fatec PG">
                    </a>
                </div>  
                <div class="endereco">
                    <p>Praça 19 de janeiro, 144 - Praia Grande - São Paulo - CEP: 11700-100<br>
                    Tel: (13) 3591-1303 / (13) 3591-6968</p>
                </div>          
            </div><!-- content -->
            <div class="content">
                <div class="mapa-cursos">
                    <h4><a href="#">Cursos</a></h4>
                    <ul>
                        <li><a href="{{ url('/cursos/ads') }}">Análise de Desenvolvimento de Sistemas</a></li>
                        <li><a href="{{ url('/cursos/comex') }}">Comércio Exterior</a></li>
                        <li><a href="{{ url('/cursos/ge') }}">Gestão Empresarial</a></li>
                        <li><a href="{{ url('/cursos/pq') }}">Processos Químicos</a></li>
                    </ul>
                </div>
                <div class="mapa_dar_nome">
                    <h4><a href="#">Lorem Ipsum</a></h4>
                    <ul>
                        <li><a href="#">Lorem Ipsum</a></li>
                        <li><a href="#">Lorem Ipsum</a></li>
                        <li><a href="#">Lorem Ipsum</a></li>
                        <li><a href="#">Lorem Ipsum</a></li>
                    </ul>
                </div>  
                <div class="departamentos">
                    <h4><a href="#">Departamentos</a></h4>
                    <ul>
                        <li><a href="#">Biblioteca</a></li>
                        <li><a href="#">Coordenação</a></li>
                        <li><a href="#">Direção</a></li>
                        <li><a href="#">DTI</a></li>
                        <li><a href="{{action('Secretaria\SecretariaController@index')}}">Secretaria</a></li>
                    </ul>
                </div>
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.724778682134!2d-46.41314740414381!3d-24.00549399093612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1db2fb42ff39%3A0x2f5e04fdcb8016f8!2sPra%C3%A7a+19+de+Janeiro%2C+144+-+Boqueir%C3%A3o%2C+Praia+Grande+-+SP%2C+11700-130!5e0!3m2!1spt-BR!2sbr!4v1464723859650" width="100%" height="135" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>              
            </div><!-- content -->
            <div class="content">
                <div class="desenvolvido">
                    <div>&copy; 2016 - Faculdade de Tecnologia de Praia Grande - Desenvolvido por <a href="/">DTI</a></div>
                </div>                
            </div>
        </div><!-- container -->
    </footer>
    
    <script src="{{ asset('js/plugins/jquery/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>    
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>