@extends('layouts.master')

@section('content')
<!-- Slider --> 
    <div class="container" id="slider">
        <div class="content">
            <div id="slider__navegacao" class="owl-carousel">
                <div class="item"><span id="img1"><img src="img/slider1.png" class="img-responsive" alt="Imagem 1"></span></div>
                <div class="item"><span id="img2"><img src="img/slider2.png" class="img-responsive" alt="Imagem 2"></span></div>
                <div class="item"><span id="img3"><img src="img/slider3.png" class="img-responsive" alt="Imagem 3"></span></div>
            </div>
        </div>              
    </div>

    <!-- Cursos -->
    <div class="container" id="cursos">
        <div class="content">
            <h2>Cursos oferecidos na Fatec PG</h2>
        </div>
        <div class="content" id="cursos__itens">
            <div class="cursos__item">
                <a href="#">
                    <img src="img/icone_ads.png" class="img-responsive" alt="Análise e Desenvolvimento de Sistemas" title="Análise e Desenvolvimento de Sistemas">
                    <h3>Análise e Desenvolvimento de Sistemas</h3>
                </a>
            </div>
            <div class="cursos__item">
                <a href="#">
                    <img src="img/icone_comex.png" class="img-responsive" alt="Comércio Exterior" title="Comércio Exterior">
                    <h3>Comércio Exterior</h3>
                </a>
            </div>
            <div class="cursos__item">
                <a href="#">
                    <img src="img/icone_ge.png" class="img-responsive" alt="Gestão Empresarial" title="Gestão Empresarial">
                    <h3>Gestão Empresarial</h3>
                </a>
            </div>
            <div class="cursos__item">
                <a href="#">
                    <img src="img/icone_pq.png" class="img-responsive" alt="Processos Químicos" title="Processos Químicos">     
                    <h3>Processos Químicos</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- Notícias -->   
    <div class="container" id="noticias">
        <div class="content">
            <h2>Notícias</h2>
        </div>
        <div class="content" id="noticias__itens">
            <div class="noticias__item">
                <div class="data">05/05/2016</div>
                <div class="noticia">
                    <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non semper turpis. Etiam eleifend tristique nisl mollis facilisis. Donec id metus id massa porttitor bibendum. Integer sed vulputate massa, quis aliquam enim. Nulla id quam sapien. Aenean malesuada congue orci, et consequat orci placerat eget. In viverra diam in lacus consectetur, ac sagittis ipsum porta. Donec feugiat consequat mi, a dapibus metus euismod eu. Duis tellus enim, porttitor et ligula at, mattis molestie nisi.</p>
                    <span><a href="#">Continue lendo...</a></span>
                </div>
            </div>
            <div class="noticias__item">
                <div class="data">05/05/2016</div>
                <div class="noticia">
                    <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non semper turpis. Etiam eleifend tristique nisl mollis facilisis. Donec id metus id massa porttitor bibendum. Integer sed vulputate massa, quis aliquam enim. Nulla id quam sapien. Aenean malesuada congue orci, et consequat orci placerat eget. In viverra diam in lacus consectetur, ac sagittis ipsum porta. Donec feugiat consequat mi, a dapibus metus euismod eu. Duis tellus enim, porttitor et ligula at, mattis molestie nisi.</p>
                    <span><a href="#">Continue lendo...</a></span>
                </div>
            </div>
            <div class="noticias__item">
                <div class="data">05/05/2016</div>
                <div class="noticia">
                    <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non semper turpis. Etiam eleifend tristique nisl mollis facilisis. Donec id metus id massa porttitor bibendum. Integer sed vulputate massa, quis aliquam enim. Nulla id quam sapien. Aenean malesuada congue orci, et consequat orci placerat eget. In viverra diam in lacus consectetur, ac sagittis ipsum porta. Donec feugiat consequat mi, a dapibus metus euismod eu. Duis tellus enim, porttitor et ligula at, mattis molestie nisi.</p>
                    <span><a href="#">Continue lendo...</a></span>
                </div>
            </div>
        </div><!-- noticias__itens -->
    </div><!-- container -->
@endsection
