{{ header }}
<!-- First block -->
<div class="container mt-4">
    {% for breadcrumb in breadcrumbs %}
    <p class="path">{{ breadcrumb.text }}</p>
    {% endfor %}
    <div class="row justify-content-center">
        <h1 class="font-weight-bold mb-5 text-center mt-5"><?php echo $heading_title; ?></h1>
    </div>

    <div id="galeryCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-3">
                        <img src="/catalog/view/theme/montazh/image/placeholder.png" class="galery_left" alt="">
                    </div>
                    <div class="col-10">
                        <img src="/catalog/view/theme/montazh/image/list.main.png" class="galery_main" alt="">
                    </div>
                    <div class="col-3">
                        <img src="/catalog/view/theme/montazh/image/placeholder.png" class="galery_right" alt="">
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev d-none d-md-flex" href="#galeryCarousel" role="button" data-slide="prev">
            <div class="col-3 d-none d-md-block">
                <img src="/catalog/view/theme/montazh/image/svg/left_arrow.svg" alt="" class="arrow">
            </div>
        </a>
        <a class="carousel-control-next d-none d-md-flex d-none d-md-flex" href="#galeryCarousel" role="button" data-slide="next">
            <div class="col-3 d-none d-md-block">
                <img src="/catalog/view/theme/montazh/image/svg/right_arrow.svg" alt="" class="arrow">
            </div>
        </a>
    </div>

    <div class="row justify-content-center mt-4">
        <a class="d-md-none d-inline-block galery-arrow-mini" href="#galeryCarousel" role="button" data-slide="prev"><img src="/catalog/view/theme/montazh/image/svg/left_arrow.svg" class="col d-md-none" alt=""></a>
        <div class="col d-none d-md-flex col-md-1"><img src="/catalog/view/theme/montazh/image/list.mini1.png" alt=""></div>
        <div class="col d-none d-md-flex col-md-1"><img src="/catalog/view/theme/montazh/image/list.mini2.png" alt=""></div>
        <div class="col mt-3 mt-md-0 col-md-1"><img src="/catalog/view/theme/montazh/image/list.mini3.png" alt=""></div>
        <div class="col mt-3 mt-md-0 col-md-1"><img src="/catalog/view/theme/montazh/image/list.mini4.png" alt=""></div>
        <div class="col d-none d-md-flex col-md-1"><img src="/catalog/view/theme/montazh/image/list.mini5.png" alt=""></div>
        <div class="col d-none d-md-flex col-md-1"><img src="/catalog/view/theme/montazh/image/list.mini6.png" alt=""></div>
        <a class="d-md-none d-inline-block galery-arrow-mini" href="#galeryCarousel" role="button" data-slide="next"><img src="/catalog/view/theme/montazh/image/svg/right_arrow.svg" class="col d-md-none" alt=""></a>
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-10 mt-5">
            <p class="galery_description">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget</p>
        </div>
    </div>
</div>

<!-- Second block -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 class="font-weight-bold">Описание</h1>
            <p class="galery_description mt-4">{{ description }}</p>
        </div>
    </div>
</div>

<!-- Third block -->
<div class="container galery">
    {% if attribute_groups %}
    {% for attribute_group in attribute_groups %}
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 class="font-weight-bold mt-4 pt-4" style="font-size: 200%;">{{ attribute_group.name }}</h1>
        </div>
    </div>

    <ul>
        {% for attribute in attribute_group.attribute %}
        <li class="row justify-content-center mt-3 characteristic">
            <div class="col-5 col-md-3">{{ attribute.name }}</div>
            <div class="col-0 col-md-6"></div>
            <div class="col-5 col-md-2 text-md-right">{{ attribute.text }}</div>
        </li>
        {% endfor %}

    </ul>
    {% endfor %}
    {% endif %}
    {% if price %}
    <div class="row mt-5 text-right price">
        <div class="col-0 col-md-4 col-lg-5 col-xl-4"></div>
        <div class="col-12 text-center col-md-4 col-lg-3 col-xl-4"><p>Стоимость проекта:</p></div>
        <div class="col-12 col-md-4 col-lg-3 col-xl-4 text-center font-weight-bold">
            <p>от {{ price }}</p></div>
    </div>
    {% endif %}
</div>

<!-- parser -->
<div class="container mt-5 pd-5"> </div>

<!-- Fourth block -->
<div class="container">
    <div class="row justify-content-center">
        <h1 class="font-weight-bold text-center">Карточки товаров</h1>
    </div>
    <div class="tags mt-5">
        <button class="hashtag">#Наименование</button>
        <button class="hashtag">#Наименование</button>
        <button class="hashtag">#Наименование</button>
        <button class="hashtag">#Наименование</button>
        <button class="hashtag">#Наименование</button>
        <button class="hashtag">#Наименование</button>
        <button class="hashtag">#Наименование</button>
        <button class="hashtag">#Наименование</button>
        <button class="hashtag">#Наименование</button>
    </div>
    <div class="shop-carousel">
        <div class="col-12 col-lg-4 mt-5">
            <div class="card bg-light border border-white">
                <img class="card-img-top" src="/catalog/view/theme/montazh/image/r42.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Типовой проект #</h5>
                    <p class="card-text">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class="mb-4 font-weight-bold">От 2 500 000 руб</h5>
                    <a href="#" class="btn btn-primary">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-5">
            <div class="card bg-light border border-white">
                <img class="card-img-top" src="/catalog/view/theme/montazh/image/r43.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Типовой проект #</h5>
                    <p class="card-text">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class="mb-4 font-weight-bold">От 2 500 000 руб</h5>
                    <a href="#" class="btn btn-primary">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-5">
            <div class="card bg-light border border-white">
                <img class="card-img-top" src="/catalog/view/theme/montazh/image/r44.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Типовой проект #</h5>
                    <p class="card-text">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class="mb-4 font-weight-bold">От 2 500 000 руб</h5>
                    <a href="#" class="btn btn-primary">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-5">
            <div class="card bg-light border border-white">
                <img class="card-img-top" src="/catalog/view/theme/montazh/image/r42.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Типовой проект #</h5>
                    <p class="card-text">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class="mb-4 font-weight-bold">От 2 500 000 руб</h5>
                    <a href="#" class="btn btn-primary">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-5">
            <div class="card bg-light border border-white">
                <img class="card-img-top" src="/catalog/view/theme/montazh/image/r43.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Типовой проект #</h5>
                    <p class="card-text">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class="mb-4 font-weight-bold">От 2 500 000 руб</h5>
                    <a href="#" class="btn btn-primary">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-5">
            <div class="card bg-light border border-white">
                <img class="card-img-top" src="/catalog/view/theme/montazh/image/r44.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Типовой проект #</h5>
                    <p class="card-text">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class="mb-4 font-weight-bold">От 2 500 000 руб</h5>
                    <a href="#" class="btn btn-primary">Смотреть проект</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2 pt-1"> </div>
        {{ footer }}