@extends('layout.app')
@section('content')
	<main>
        <section class="header-video">
            <div id="hero_video">
                <div>
                    <h3><strong>De Cero a Avanzado con </strong><br>Gestion Excel</h3>
                    <p>Transformate en un <strong>maestro en excel</strong> con nuestro curso</p>
                </div>
                <a href="#admision" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
            </div>
            <img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
        </section>
		<!-- /header-video -->

        <ul id="grid_home" class="clearfix">
            <li>
                <a href="#0" class="img_container">
                    <img src="/img/excel1.webp" alt="">
                    <div class="short_info">
                        <h3><strong>ASESORÍA PERMANENTE </strong>Derecho de por vida a consultar cualquier tema relacionado con Excel, ya sea para su trabajo o estudios</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="#0" class="img_container">
                    <img src="img/excel2.jpg" alt="">
                    <div class="short_info">
                        <h3><strong>CURSOS PARA TODOS </strong>Sin requisito de edad ni conocimientos. El curso parte de lo básico nivelando a todos los alumnos, hasta llegar a un nivel intermedio avanzado</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="#0" class="img_container">
                    <img src="img/excel3.png" alt="">
                    <div class="short_info">
                        <h3><strong>OBJETIVO DEL CURSO </strong>El alumno quedará en condiciones de hacer fórmulas de complejidad simple e intermedia. Crear, manipular y entender tablas dinámicas, manejo de filtros y formatos condicionales, así como crear macros</h3>
                    </div>
                </a>
            </li>
        </ul>
		<!--/grid_home -->

		<div class="container-fluid margin_120_0" id="admision">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Incríbete a nuestro próximo curso</h2>
				<p>Estamos ubicados en Parque Central Oriente 276, Ciudad Satélite, Maipú</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="https://www.flow.cl/btn.php?token=1m19eam">
								<div class="preview"><span>Preview course</span></div><img src="/img/excel1.webp" class="img-fluid" alt=""></a>
							<div class="price">$100.000</div>

						</figure>
						<div class="wrapper">
							<small>Básico a Medio-Avanzado</small>
							<h3>Curso de Noviembre 2019</h3>
							<p>Domina Excel. Aprende desde los tips más básicos hasta gráficos y tablas dinámicas. Clases los días sábado en Preusat, Ciudad Satélite, Maipú.</p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small></small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 4 clases</li>
							<li><a href="https://www.flow.cl/btn.php?token=1m19eam">Comprar ahora</a></li>
						</ul>
					</div>
				</div>
				
				
			</div>
			<hr>
		</div>
		<!-- /container -->


	</main>
	<!-- /main -->
@endsection	