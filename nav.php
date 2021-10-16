<main class="display-grid">
    <header class="top-row">
        <input type="radio" class="toggle__radio" name="toggle" id="toggle" aria-label="nav-menu-toggle" role="button">
        <label for="toggle" class="toggle">
            <div class="toggle__line toggle__line_1"></div>
            <div class="toggle__line toggle__line_2"></div>
        </label>
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__item"><a class="menu__link" href="index.php">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Tutoring</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Workshops</a></li>
                <li class="menu__item"><a class="menu__link" href="faq.php">About Us</a></li>
                <li class="menu__item"><a class="menu__link" href="volunteer.php">Volunteer</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Donate</a></li>
            </ul>
        </nav>
        <figure class="logo">
            <a class="logo__link" href="index.php"></a>
        </figure>
        <form class="search-bar">
            <button class="search-bar__button">
                <img class="search-bar__button-icon" src="dist/img/magnifying-glass.svg" alt="search">
            </button>
            <input class="search-bar__input" placeholder="Search">
        </form>
    </header>