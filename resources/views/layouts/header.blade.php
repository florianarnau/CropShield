<header id="main-menu">
    <a href="{{ route('dashboard') }}" class="home-link">
        <div class="hdr">
            <img src="{{ asset('images/logo.png') }}" alt="Logo de CropShield">
            <h1>CropShield</h1>
        </div>
    </a>
    <div class="header-content">
        <nav>
            <ul>
                <li>
                    <span>
                        <img src="{{ asset('images/icons/crop.png') }}" alt="">
                        parcelle
                    </span>
                    <ul class="submenu">
                        <li><a href="">Lister</a></li>
                        @if($user_role->name === 'admin')
                        <li><a href="">Ajouter</a></li>
                        @endif
                    </ul>
                </li>
                <li>
                    <span>
                        <img src="{{ asset('images/icons/weather-station.png') }}" alt="">
                        stations météo
                    </span>
                    <ul class="submenu">
                        <li><a href="">voir les données</a></li>
                        <li><a href="">lister</a></li>
                        @if($user_role->name === 'admin')
                        <li><a href="">Ajouter</a></li>
                        @endif
                    </ul>
                </li>
                <li>
                    <span>
                        <img src="{{ asset('images/icons/materiel.png') }}" alt="">
                        matériel
                    </span>
                    <ul class="submenu">
                        <li>
                            <span>enregistreurs</span>
                            <ul class="submenu sub">
                                <li>
                                    <span>virtuel</span>
                                    <ul class="submenu rub">
                                        <li><a href="">lister</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <span>
                        <img src="{{ asset('images/icons/application.png') }}" alt="">
                        applications
                    </span>
                    <ul class="submenu">
                        <li><a href="">Voir les données des OADs</a></li>
                        <li><a href="">prévisions météo</a></li>
                        <li><a href="">export en masse des données des stations</a></li>
                    </ul>
                </li>
                @if($user_role->name === 'admin')
                <li>
                    <span>
                        <img src="{{ asset('images/icons/subscription.png') }}" alt="">
                        abonnements
                    </span>
                    <ul class="submenu">
                        <li><a href="">abonnements aux prévisions météo</a></li>
                        <li><a href="">abonnements aux emails de la synthèse journalière</a></li>
                        <li><a href="">abonnements aux OADs</a></li>
                        <li><a href="">bloquer / débloquer</a></li>
                    </ul>
                </li>
                @endif
                <li>
                    <span>
                        <img src="{{ asset('images/icons/setting.png') }}" alt="">
                        paramètres
                    </span>
                    <ul class="submenu">
                        @if($user_role->name === 'admin')
                        <li><a href="">ajouter un utilisateur</a></li>
                        @endif
                        <li><a href="">station météo</a></li>
                        <li><a href="">graphique</a></li>
                        <li><a href="">emails synthèse journalière</a></li>
                    </ul>
                </li>
                <li>
                    <span>
                        <img src="{{ asset('images/icons/assistance.png') }}" alt="">
                        assistance
                    </span>
                    <ul class="submenu">
                        <li><a href="">contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
