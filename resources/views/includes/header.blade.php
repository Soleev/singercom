<!-- resources/views/includes/header.blade.php -->
<div class="header sticky">
    <div class="container-fluid">
        <div class="logo">
            <a href="/">
                <img class="logo-dark" src="{{ asset('assets/images/logo.jpg') }}" alt="лого singeruz">
            </a>
        </div>
        <div class="header-menu-wrapper">
            <!-- Menu -->
            <ul class="header-menu">
                <li class="m-item">
                    <a class="m-link" href="/">Главная</a>
                </li>
                <li class="m-item">
                    <a class="m-link" href="#">Продукция</a>
                    <ul class="m-dropdown">

                        <li class="m-dropdown-item">
                            <a class="m-dropdown-link" href="#">Запчасти</a>
                            <ul class="m-subdropdown">
                                @foreach ($subcategoryParts as $part)
                                    <li class="m-subdropdown-item"><a class="m-subdropdown-link" href="{{ url($part->link) }}">{{ $part->tittle }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="m-dropdown-item">
                            <a class="m-dropdown-link" href="#">Расходники</a>
                            <ul class="m-subdropdown">
                                @foreach ($subcategoryConsumables as $consumable)
                                    <li class="m-subdropdown-item"><a class="m-subdropdown-link" href="{{ url($consumable->link) }}">{{ $consumable->tittle }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="m-dropdown-item">
                            <a class="m-dropdown-link" href="#">Оборудование</a>
                            <ul class="m-subdropdown">
                                @foreach ($subcategoryEquipment as $equipment)
                                    <li class="m-subdropdown-item"><a class="m-subdropdown-link" href="{{ url($equipment->link) }}">{{ $equipment->tittle }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="m-dropdown-item">
                            <a class="m-dropdown-link" href="{{ url('/catalog') }}">Все категории</a>
                        </li>
                    </ul>
                </li>
                <li class="m-item">
                    <a class="m-link" href="{{ url('/contacts') }}">Контакты</a>
                </li>
            </ul>

            <!-- Extra -->
            <div class="header-menu-extra">
                <ul class="list-inline">
                    <li><a href="https://t.me/SINGERuz_shop" target="_blank"><i class="fab fa-telegram"></i></a></li>
                    <li><a href="https://www.instagram.com/singeruz_shop" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <!-- Close Button -->
            <button class="close-button">
                <span></span>
            </button>
        </div><!-- end header-menu-wrapper -->
        <!-- Menu Toggle on Mobile -->
        <button class="m-toggle">
            <span></span>
        </button>
    </div><!-- end container -->
</div>
<!-- end Header -->
