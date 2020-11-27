<section class="ss">
        <a href="#" class="dark-btn ss_form-btn--advanced">Расширенный поиск</a>
        
        <form class="ss_form" action="/" method="post">
            <div class="single-input_wrapper as-item">
                <label>
                    <svg>
                        <use xlink:href="sprite.svg#search">
                        </use>
                    </svg>
                </label>
                <input class="single-input" type="text">
            </div>
            <button class="primary-btn ss_form-btn--simple" type="submit" name="button">Найти</button>
        </form>

        <div class="ss_new-post">
            @auth
                <a id="nav-publish" href="/new-post" class="primary-btn">
                    Разместить объявление
                    <svg class="ss_new-post--svg">
                        <use xlink:href="/sprite.svg#plus">
                        </use>
                    </svg>
                </a>
            @endauth

            @guest
                <a id="nav-publish" href="javascript:void(0);" class="primary-btn login-trigger">
                    Разместить объявление
                    <svg class="ss_new-post--svg">
                        <use xlink:href="/sprite.svg#plus">
                        </use>
                    </svg>
                </a>
            @endguest
        </div>
</section>