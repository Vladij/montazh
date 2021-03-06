<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/home.twig */
class __TwigTemplate_fb9ba58a083f4f787d457f3bd0700601a991db6606796dd76f426a42c5e65f13 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<!-- First block -->
<div class=\"container mt-0\">
  <div id=\"carouselExampleSlidesOnlya\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <div class=\"col-12 col-lg-7 text-lg-right float-lg-right\">
          <img src=\"/catalog/view/theme/montazh/image/house.png\" alt=\"\">
        </div>
        <div class=\"col-12 col-lg-5 text-left float-left mt-5\">
          <h1 class=\"font-weight-bold mt-5 mb-5\">Mi velit mauris eget mauris nulla semper porttitor</h1>
          <p class=\"mb-5\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
          <div class=\"row\">
            <div class=\"col-9\">
              <div class=\"btn btn-primary first-block-button\">Заказать расчёт</div>
            </div>
            <div class=\"col-3\">
              <img src=\"/catalog/view/theme/montazh/image/svg/circle-first.svg\" alt=\"\">
            </div>
          </div>
        </div>
      </div>
      <div class=\"carousel-item\">
        <div class=\"col-12 col-lg-7 text-lg-right float-lg-right\">
          <img src=\"/catalog/view/theme/montazh/image/house.png\" alt=\"\">
        </div>
        <div class=\"col-12 col-lg-5 text-left float-left mt-5\">
          <h1 class=\"font-weight-bold mt-5 mb-5\">Mi velit mauris eget mauris nulla semper porttitor</h1>
          <p class=\"mb-5\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
          <div class=\"row\">
            <div class=\"col-9\">
              <div class=\"btn btn-primary first-block-button\">Заказать расчёт</div>
            </div>
            <div class=\"col-3\">
              <img src=\"/catalog/view/theme/montazh/image/svg/circle-first.svg\" alt=\"\">
            </div>
          </div>
        </div>
      </div>
      <div class=\"carousel-item\">
        <div class=\"col-12 col-lg-7 text-lg-right float-lg-right\">
          <img src=\"/catalog/view/theme/montazh/image/house.png\" alt=\"\">
        </div>
        <div class=\"col-12 col-lg-5 text-left float-left mt-5\">
          <h1 class=\"font-weight-bold mt-5 mb-5\">Mi velit mauris eget mauris nulla semper porttitor</h1>
          <p class=\"mb-5\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
          <div class=\"row\">
            <div class=\"col-9\">
              <div class=\"btn btn-primary first-block-button\">Заказать расчёт</div>
            </div>
            <div class=\"col-3\">
              <img src=\"/catalog/view/theme/montazh/image/svg/circle-first.svg\" alt=\"\">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Second block -->
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-12 col-md-11 mx-auto\">
      <div class=\"col-12 col-md-6 float-left\">
        <h1 class=\"mb-5 font-weight-bold\" style=\"font-size: 180%;\">Рассказываем о нас</h1>
        <p class=\"mb-5\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
        <img src=\"/catalog/view/theme/montazh/image/r38.png\" class=\"mt-3\" alt=\"\">
      </div>
      <div class=\"col-12 col-md-6 mt-5 mt-md-0 float-right\">
        <img src=\"/catalog/view/theme/montazh/image/r14.png\" alt=\"\">
        <p class=\"mt-3\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
        <p>Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
      </div>
    </div>
  </div>

</div>

<!-- Third block -->
<div class=\"container\">
  <div class=\"row justify-content-center mb-4\">
    <div class=\"col-12 mx-auto text-center\">
      <h1 class=\"font-weight-bold text-center\">Виды наших работ</h1>
    </div>
  </div>
  <div class=\"row mx-auto justify-content-center\">
    <div class=\"col-12 mb-5 col-lg-4 mb-lg-0\">
      <div class=\"card\">
        <img src=\"/catalog/view/theme/montazh/image/r15.png\" alt=\"\">
        <div class=\"card-img-overlay\">
          <h1 class=\"float-right font-weight-bold text-white card_number\">01</h1>
          <p class=\"float-left font-weight-bold text-white fixed-bottom position-absolute ml-4\">Строительство<br>домов</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 mb-5 col-lg-3 mb-lg-0\">
      <div class=\"card\">
        <img src=\"/catalog/view/theme/montazh/image/r16.png\" alt=\"\">
        <div class=\"card-img-overlay\">
          <h1 class=\"float-right font-weight-bold text-white card_number\">02</h1>
          <p class=\"float-left font-weight-bold text-white fixed-bottom position-absolute ml-4\">Строительство<br>террас</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 mb-5 col-lg-3 mb-lg-0\">
      <div class=\"card\">
        <img src=\"/catalog/view/theme/montazh/image/r17.png\" alt=\"\">
        <div class=\"card-img-overlay\">
          <h1 class=\"float-right font-weight-bold text-white card_number\">03</h1>
          <p class=\"float-left font-weight-bold text-white fixed-bottom position-absolute ml-4\">Строительство<br>беседок</p>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row mx-auto justify-content-center mt-4\">
    <div class=\"col-12 mb-5 col-lg-3 mb-lg-0\">
      <div class=\"card\">
        <img src=\"/catalog/view/theme/montazh/image/r33.png\" alt=\"\">
        <div class=\"card-img-overlay\">
          <h1 class=\"float-right font-weight-bold text-white card_number\">04</h1>
          <p class=\"float-left font-weight-bold text-white fixed-bottom position-absolute ml-4\">Строительство<br>домов</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 mb-5 col-lg-3 mb-lg-0\">
      <div class=\"card\">
        <img src=\"/catalog/view/theme/montazh/image/r32.png\" alt=\"\">
        <div class=\"card-img-overlay\">
          <h1 class=\"float-right font-weight-bold text-white card_number\">05</h1>
          <p class=\"float-left font-weight-bold text-white fixed-bottom position-absolute ml-4\">Строительство<br>террас</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 mb-5 col-lg-4 mb-lg-0\">
      <div class=\"card\">
        <img src=\"/catalog/view/theme/montazh/image/r31.png\" alt=\"\">
        <div class=\"card-img-overlay\">
          <h1 class=\"float-right font-weight-bold text-white card_number\">06</h1>
          <p class=\"float-left font-weight-bold text-white fixed-bottom position-absolute ml-4\">Строительство<br>беседок</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Fourth block -->
<div class=\"container\">
  <div class=\"row justify-content-center\">
    <h1 class=\"font-weight-bold mb-5 text-center\">Галерея наших работ</h1>
  </div>

  <div id=\"galeryCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <div class=\"row\">
          <div class=\"col-3\">
            <img src=\"/catalog/view/theme/montazh/image/placeholder.png\" class=\"galery_left\" alt=\"\">
          </div>
          <div class=\"col-10\">
            <img src=\"/catalog/view/theme/montazh/image/list.main.png\" class=\"galery_main\" alt=\"\">
          </div>
          <div class=\"col-3\">
            <img src=\"/catalog/view/theme/montazh/image/placeholder.png\" class=\"galery_right\" alt=\"\">
          </div>
        </div>
      </div>
      <div class=\"carousel-item\">
        <div class=\"row\">
          <div class=\"col-3\">
            <img src=\"/catalog/view/theme/montazh/image/list.main.png\" class=\"galery_left\" alt=\"\">
          </div>
          <div class=\"col-10\">
            <img src=\"/catalog/view/theme/montazh/image/placeholder.png\" class=\"galery_main\" alt=\"\">
          </div>
          <div class=\"col-3\">
            <img src=\"/catalog/view/theme/montazh/image/placeholder.png\" class=\"galery_right\" alt=\"\">
          </div>
        </div>
      </div>
      <div class=\"carousel-item\">
        <div class=\"row\">
          <div class=\"col-3\">
            <img src=\"/catalog/view/theme/montazh/image/placeholder.png\" class=\"galery_left\" alt=\"\">
          </div>
          <div class=\"col-10\">
            <img src=\"/catalog/view/theme/montazh/image/placeholder.png\" class=\"galery_main\" alt=\"\">
          </div>
          <div class=\"col-3\">
            <img src=\"/catalog/view/theme/montazh/image/list.main.png\" class=\"galery_right\" alt=\"\">
          </div>
        </div>
      </div>
    </div>
    <a class=\"carousel-control-prev d-none d-md-flex\" href=\"#galeryCarousel\" role=\"button\" data-slide=\"prev\">
      <div class=\"col-3 d-none d-md-block\">
        <img src=\"/catalog/view/theme/montazh/image/svg/left_arrow.svg\" alt=\"\" class=\"arrow\">
      </div>
    </a>
    <a class=\"carousel-control-next d-none d-md-flex d-none d-md-flex\" href=\"#galeryCarousel\" role=\"button\" data-slide=\"next\">
      <div class=\"col-3 d-none d-md-block\">
        <img src=\"/catalog/view/theme/montazh/image/svg/right_arrow.svg\" alt=\"\" class=\"arrow\">
      </div>
    </a>
  </div>

  <div class=\"row justify-content-center mt-4\">
    <a class=\"d-md-none d-inline-block galery-arrow-mini\" href=\"#galeryCarousel\" role=\"button\" data-slide=\"prev\"><img src=\"/catalog/view/theme/montazh/image/svg/left_arrow.svg\" class=\"col d-md-none\" alt=\"\"></a>
    <div class=\"col d-none d-md-flex col-md-1\"><img src=\"/catalog/view/theme/montazh/image/list.mini1.png\" alt=\"\"></div>
    <div class=\"col d-none d-md-flex col-md-1\"><img src=\"/catalog/view/theme/montazh/image/list.mini2.png\" alt=\"\"></div>
    <div class=\"col mt-3 mt-md-0 col-md-1\"><img src=\"/catalog/view/theme/montazh/image/list.mini3.png\" alt=\"\"></div>
    <div class=\"col mt-3 mt-md-0 col-md-1\"><img src=\"/catalog/view/theme/montazh/image/list.mini4.png\" alt=\"\"></div>
    <div class=\"col d-none d-md-flex col-md-1\"><img src=\"/catalog/view/theme/montazh/image/list.mini5.png\" alt=\"\"></div>
    <div class=\"col d-none d-md-flex col-md-1\"><img src=\"/catalog/view/theme/montazh/image/list.mini6.png\" alt=\"\"></div>
    <a class=\"d-md-none d-inline-block galery-arrow-mini\" href=\"#galeryCarousel\" role=\"button\" data-slide=\"next\"><img src=\"/catalog/view/theme/montazh/image/svg/right_arrow.svg\" class=\"col d-md-none\" alt=\"\"></a>
    </a>
  </div>
  <div class=\"row justify-content-center\">
    <div class=\"col-10 mt-5\">
      <p class=\"galery_description\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget</p>
    </div>
  </div>
</div>

<!-- Fiveth block -->

<div class=\"container\">
  ";
        // line 228
        if (($context["products"] ?? null)) {
            // line 229
            echo "  <div class=\"row justify-content-center\">
    <h1 class=\"font-weight-bold text-center\">Карточки товаров</h1>
  </div>
    <div class=\"tags mt-5\" id=\"categories\">
      ";
            // line 233
            if (($context["categories"] ?? null)) {
                // line 234
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category_all"]) {
                    // line 235
                    echo "          <button class=\"hashtag\" id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_all"], "id", [], "any", false, false, false, 235);
                    echo "\" data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_all"], "href", [], "any", false, false, false, 235);
                    echo "\">#";
                    echo twig_get_attribute($this->env, $this->source, $context["category_all"], "name", [], "any", false, false, false, 235);
                    echo "</button>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_all'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 237
                echo "      ";
            }
            // line 238
            echo "    </div>
    <div class=\"shop-carousel\" id=\"productsbottom\">
      ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 241
                echo "        <div class=\"col-12 col-lg-4 mt-5 appended\">
          <div class=\"card bg-light border border-white\">
            <img class=\"card-img-top\" src=\"";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 243);
                echo "\" alt=\"Card image cap\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 245);
                echo "</h5>
              <p class=\"card-text\">";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 246);
                echo "</p>
              <h5 class=\"mb-4 font-weight-bold\">От ";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 247);
                echo "</h5>
              <a href=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 248);
                echo "\" class=\"btn btn-primary\">Смотреть проект</a>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "    </div>
  ";
        }
        // line 255
        echo "</div>
<!-- Fiveth block -->
<div class=\"container\">
  <div class=\"row justify-content-center\">
    <h1 class=\"font-weight-bold text-center\">Карточка блога на главной</h1>
  </div>
  <div class=\"blog-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"col-12 col-lg-4 mt-5\">
      <div class=\"card bg-light border border-white\">
        <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r48.png\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Наименование новости</h5>
          <p class=\"card-text\">Короткий заголовок на две строчки, чтобы смотрелось эстетично</p>
          <a href=\"#\" class=\"read_more\">Читать далее</a>
          <p class=\"date pt-2\">01.01.2020</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 col-lg-4 mt-5\">
      <div class=\"card bg-light border border-white\">
        <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r49.png\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Наименование новости</h5>
          <p class=\"card-text\">Короткий заголовок на две строчки, чтобы смотрелось эстетично</p>
          <a href=\"#\" class=\"read_more\">Читать далее</a>
          <p class=\"date pt-2\">01.01.2020</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 col-lg-4 mt-5\">
      <div class=\"card bg-light border border-white\">
        <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r50.png\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Наименование новости</h5>
          <p class=\"card-text\">Короткий заголовок на две строчки, чтобы смотрелось эстетично</p>
          <a href=\"#\" class=\"read_more\">Читать далее</a>
          <p class=\"date pt-2\">01.01.2020</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 col-lg-4 mt-5\">
      <div class=\"card bg-light border border-white\">
        <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r48.png\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Наименование новости</h5>
          <p class=\"card-text\">Короткий заголовок на две строчки, чтобы смотрелось эстетично</p>
          <a href=\"#\" class=\"read_more\">Читать далее</a>
          <p class=\"date pt-2\">01.01.2020</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 col-lg-4 mt-5\">
      <div class=\"card bg-light border border-white\">
        <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r49.png\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Наименование новости</h5>
          <p class=\"card-text\">Короткий заголовок на две строчки, чтобы смотрелось эстетично</p>
          <a href=\"#\" class=\"read_more\">Читать далее</a>
          <p class=\"date pt-2\">01.01.2020</p>
        </div>
      </div>
    </div>
    <div class=\"col-12 col-lg-4 mt-5\">
      <div class=\"card bg-light border border-white\">
        <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r50.png\" alt=\"Card image cap\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Наименование новости</h5>
          <p class=\"card-text\">Короткий заголовок на две строчки, чтобы смотрелось эстетично</p>
          <a href=\"#\" class=\"read_more\">Читать далее</a>
          <p class=\"date pt-2\">01.01.2020</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Sixth pane -->
<div class=\"bg-dark pt-5 mt-5\" style=\"height: 600px;\">
  <div class=\"container mt-0\">
    <h1 class=\"text-white text-center mt-5 pt-5 font-weight-bold mb-2 pb-2\">Отзывы клиентов</h1>
    <div class=\"feedback-carousel\">
      <div class=\"col-12 col-md-5 mt-4 pt-4\">
        <p class=\"text-white\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
        <img src=\"/catalog/view/theme/montazh/image/e9.png\" class=\"avatar mt-3 float-left\" alt=\"\">
        <h5 class=\"text-white d-inline ml-3 mt-4 float-left\">Мelit mauris </h5>
        <div class=\"stars float-right mt-4\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
        </div>
      </div>
      <div class=\"col-12 col-md-5 mt-4 pt-4\">
        <p class=\"text-white\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
        <img src=\"/catalog/view/theme/montazh/image/e9.png\" class=\"avatar mt-3 float-left\" alt=\"\">
        <h5 class=\"text-white d-inline ml-3 mt-4 float-left\">Мelit mauris </h5>
        <div class=\"stars float-right mt-4\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
        </div>
      </div>

      <div class=\"col-12 col-md-5 mt-4 pt-4\">
        <p class=\"text-white\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
        <img src=\"/catalog/view/theme/montazh/image/e9.png\" class=\"avatar mt-3 float-left\" alt=\"\">
        <h5 class=\"text-white d-inline ml-3 mt-4 float-left\">Мelit mauris </h5>
        <div class=\"stars float-right mt-4\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
        </div>
      </div>
      <div class=\"col-12 col-md-5 mt-4 pt-4\">
        <p class=\"text-white\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
        <img src=\"/catalog/view/theme/montazh/image/e9.png\" class=\"avatar mt-3 float-left\" alt=\"\">
        <h5 class=\"text-white d-inline ml-3 mt-4 float-left\">Мelit mauris </h5>
        <div class=\"stars float-right mt-4\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
        </div>
      </div>
      <div class=\"col-12 col-md-5 mt-4 pt-4\">
        <p class=\"text-white\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
        <img src=\"/catalog/view/theme/montazh/image/e9.png\" class=\"avatar mt-3 float-left\" alt=\"\">
        <h5 class=\"text-white d-inline ml-3 mt-4 float-left\">Мelit mauris </h5>
        <div class=\"stars float-right mt-4\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
        </div>
      </div>
      <div class=\"col-12 col-md-5 mt-4 pt-4\">
        <p class=\"text-white\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
        <img src=\"/catalog/view/theme/montazh/image/e9.png\" class=\"avatar mt-3 float-left\" alt=\"\">
        <h5 class=\"text-white d-inline ml-3 mt-4 float-left\">Мelit mauris </h5>
        <div class=\"stars float-right mt-4\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
        </div>
      </div>
      <div class=\"col-12 col-md-5 mt-4 pt-4\">
        <p class=\"text-white\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor</p>
        <img src=\"/catalog/view/theme/montazh/image/e9.png\" class=\"avatar mt-3 float-left\" alt=\"\">
        <h5 class=\"text-white d-inline ml-3 mt-4 float-left\">Мelit mauris </h5>
        <div class=\"stars float-right mt-4\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/svg/star.svg\" alt=\"\">
        </div>
      </div>

    </div>

  </div>
</div>

<div class=\"bg-light\">
  <div class=\"container mt-0 pt-5 pd-5\">
    <div class=\"col-12 col-lg-6 col-xl-5 mt-5 pt-4\">
      <div class=\"card contacts\">
        <div class=\"card-body\">
          <h1 class=\"text-center font-weight-bold mt-4 text-dark\">Контакты</h1>
          <p class=\"text-center mt-4\">Свяжитесь с нами, чтобы всё обсудить</p>
          <h4 class=\"text-center text-dark\">8 (800) 555 55-55</h4>
          <p class=\"text-center mt-3\">Мы работает круглосуточно</p>
          <p class=\"font-weight text-center mt-5\">Посетите наш офис</p>
          <p class=\"text-center\">Россия, Москва, дачный посёлок Кокошкино</p>
        </div>
      </div>
    </div>
  </div>
  <div class=\"container mt-5 pt-5\"></div>
</div>

<script>
  \$(document).ready(function(){
    \$('body #categories button').on('click', function(e){
      e.preventDefault();
      // \$('body #productsbottom .appended').remove();
      \$.ajax({
        url: '/index.php?route=product/product/categoryProductsAjax&category_id=' + \$(this).attr('id'),
        type: 'GET',
        dataType: 'json'
      }).done(function(data){
        if(data.products.length >= 4) {
          \$('body #productsbottom .appended').remove();
          \$('body #productsbottom').css('display', 'block');
          \$.each(data.products, function (i, item) {
            var html = '<div class=\"col-12 col-lg-4 mt-5 appended\" id=\"appended_' + i + '\">' +
                    '<div class=\"card bg-light border border-white\">' +
                    '<img class=\"card-img-top\" src=\"' + item.thumb + '\" alt=\"Card image cap\">' +
                    '<div class=\"card-body\">' +
                    '<h5 class=\"card-title\">' + item.name + '#</h5>' +
                    '<p class=\"card-text\">' + item.description + '</p>' +
                    '<h5 class=\"mb-4 font-weight-bold\">От ' + item.price + '</h5>' +
                    '<a href=\"' + item.href + '\" class=\"btn btn-primary\">Смотреть проект</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            \$('body #productsbottom').slick('slickAdd', html);
          });
        }else{
          /*\$('.shop-carousel').slick('unslick');*/
          \$('body #productsbottom .appended').remove();
          \$('body #productsbottom').css('display', 'flex');

          \$.each(data.products, function (i, item) {
            var html = '<div class=\"col-12 col-lg-4 mt-5 appended\" id=\"appended_' + i + '\">' +
                    '<div class=\"card bg-light border border-white\">' +
                    '<img class=\"card-img-top\" src=\"' + item.thumb + '\" alt=\"Card image cap\">' +
                    '<div class=\"card-body\">' +
                    '<h5 class=\"card-title\">' + item.name + '#</h5>' +
                    '<p class=\"card-text\">' + item.description + '</p>' +
                    '<h5 class=\"mb-4 font-weight-bold\">От ' + item.price + '</h5>' +
                    '<a href=\"' + item.href + '\" class=\"btn btn-primary\">Смотреть проект</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            \$('body #productsbottom').append(html);
            \$('body #productsbottom .slick-dots').css('display', 'none');
          });
        }
      })
    });
  });
</script>
";
        // line 497
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 497,  342 => 255,  338 => 253,  327 => 248,  323 => 247,  319 => 246,  315 => 245,  310 => 243,  306 => 241,  302 => 240,  298 => 238,  295 => 237,  282 => 235,  277 => 234,  275 => 233,  269 => 229,  267 => 228,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
