@extends('layouts.master')
@section('title', 'Página Inicial')
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
                <a href="{{ url('/cursos/ads') }}">
                    <img src="img/icone_ads.png" class="img-responsive" alt="Análise e Desenvolvimento de Sistemas" title="Análise e Desenvolvimento de Sistemas">
                    <h3>Análise e Desenvolvimento de Sistemas</h3>
                </a>
            </div>
            <div class="cursos__item">
                <a href="{{ url('/cursos/comex') }}">
                    <img src="img/icone_comex.png" class="img-responsive" alt="Comércio Exterior" title="Comércio Exterior">
                    <h3>Comércio Exterior</h3>
                </a>
            </div>
            <div class="cursos__item">
                <a href="{{ url('/cursos/ge') }}">
                    <img src="img/icone_ge.png" class="img-responsive" alt="Gestão Empresarial" title="Gestão Empresarial">
                    <h3>Gestão Empresarial</h3>
                </a>
            </div>
            <div class="cursos__item">
                <a href="{{ url('/cursos/pq') }}">
                    <img src="img/icone_pq.png" class="img-responsive" alt="Processos Químicos" title="Processos Químicos">     
                    <h3>Processos Químicos</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- Notícias -->   
    <div class="container" id="noticias">
        <div class="content">
            <h2><a href="/noticia">Notícias</a></h2>
        </div>
        <div class="content" id="noticias__itens">

            @foreach($noticias as $n)
                <div class="noticias__item">
                    <div class="data">{{ Carbon\Carbon::parse($n->dataInicio)->format('d/m/Y') }}</div>
                    <div class="noticia">
                        <h3><a href="noticia/{{$n->id}}">{{ $n->tituloNoticia }}</a></h3>
                        
                        <?php
                            $grande = false;
                            //limitar a quantidade de caracteres exibidos
                            if(strlen($n->corpoNoticia) > 600) {
                                $grande = true;
                                $textoMenor = substr($n->corpoNoticia, 0, 600);//cortando texto                                
                                $n->corpoNoticia = substr($textoMenor, 0, strrpos($textoMenor, ' ')) . '...'; //corta ao término da palavra
                            }
                        ?>                        
                        <p>{{ $n->corpoNoticia }}</p>
                        
                        <?php
                            if($grande)  {   
                                echo "<span><a href='noticia/$n->id'>Continue lendo...</a></span>";                         
                            }
                        ?>
                    </div>
                </div>
            @endforeach
        </div><!-- noticias__itens -->
    </div><!-- container -->
@endsection
