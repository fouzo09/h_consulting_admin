<!--Menu start-->
<div class="col-xl-6 col-lg-6 col-12">
    <nav class="main-menu">
        <ul>
            <li class="menu-item">
                <a href="{{ url('/') }}">Accueil</a>
            </li>
            <li class="menu-item">
                <a href="{{ url('offres-emplois') }}">Offres emplois</a>
            </li>
            <li>
                <a href="{{ url('heuristic') }}">
                    Heuristic
                     <small class="icon-arrow"></small>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('heuristic').'#services' }}">A propos</a>
                    </li>
                    <li>
                        <a href="{{ Route('listeCarriere') }}">Carrière</a>
                    </li>
                    <li>
                        <a href="{{ url('actualites') }}">Actualité</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="{{ url('formations') }}">Formations</a>
            </li>
        </ul>
    </nav>
</div>
<!--Menu end-->
