@extends('layouts.master')
@section('title', 'Página Inicial')
@section('content')

    <!-- Slider --> 
    <section class="container slider-home">
        <div class="content">
            <div class="slider-navegacao" class="owl-carousel">
                @foreach($slider as $s)
                    <div class="item"><a href="{{url($s->link)}}"><img src="{{$s->imagem}}" class="img-responsive"></a></div>
                @endforeach
            </div>
        </div>              
    </section>

    <!-- Cursos -->
    <section class="container cursos-home">
        <div class="content">
            <h2>Cursos oferecidos na Fatec PG</h2>
        </div>
        <div class="content cursos-itens">
            <div class="cursos-item">
                <a href="{{ url('/cursos/ads') }}"><img src="img/icone_ads.png" class="img-responsive" alt="Análise e Desenvolvimento de Sistemas" title="Análise e Desenvolvimento de Sistemas"></a>
                <h3><a href="{{ url('/cursos/ads') }}">Análise e Desenvolvimento de Sistemas</a></h3>                
            </div>
            <div class="cursos-item">
                <a href="{{ url('/cursos/comex') }}"><img src="img/icone_comex.png" class="img-responsive" alt="Comércio Exterior" title="Comércio Exterior"></a>
                <h3><a href="{{ url('/cursos/comex') }}">Comércio Exterior</a></h3>                
            </div>
            <div class="cursos-item">
                <a href="{{ url('/cursos/ge') }}"><img src="img/icone_ge.png" class="img-responsive" alt="Gestão Empresarial" title="Gestão Empresarial"></a>
                <h3><a href="{{ url('/cursos/ge') }}">Gestão Empresarial</a></h3>                
            </div>
            <div class="cursos-item">
                <a href="{{ url('/cursos/pq') }}"><img src="img/icone_pq.png" class="img-responsive" alt="Processos Químicos" title="Processos Químicos"></a>     
                <h3><a href="{{ url('/cursos/pq') }}">Processos Químicos</a></h3>
            </div>
        </div>
    </section>

    <!-- Notícias -->   
    <section class="container noticias-home">
        <div class="content">
            <h2><a href="/noticia">Notícias</a></h2>
        </div>
        <div class="content">
            @if(count($noticias) == 0) 
                <div class="nenhuma-noticia">
                    <p>Não há notícias para serem exibidas.</p>
                </div>            
            @else  
                @foreach($noticias as $n)
                    <div class="noticias-item">
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
                            <p>{!! ($n->corpoNoticia) !!}</p>
                            
                            <?php
                                if($grande)  {   
                                    echo "<span><a href='noticia/$n->id'>Continue lendo...</a></span>";                         
                                }
                            ?>
                        </div>
                    </div>
                @endforeach
            @endif    
        </div><!-- noticias-itens -->
    </section>
@endsection
