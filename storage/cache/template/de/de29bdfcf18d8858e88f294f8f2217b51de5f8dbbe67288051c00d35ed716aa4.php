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

/* default/template/product/product.twig */
class __TwigTemplate_e932b3ee75e80c7675dd67b39a351f37c471675e7d00934ef9e64d7fb6c58ca6 extends \Twig\Template
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
<div class=\"container mt-4\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "        <p class=\"path\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    <div class=\"row justify-content-center\">
        <h1 class=\"font-weight-bold mb-5 text-center mt-5\"><?php echo \$heading_title; ?></h1>
    </div>

    <div id=\"galeryCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            ";
        // line 13
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 14
            echo "                ";
            if (($context["thumb"] ?? null)) {
                // line 15
                echo "                    <div class=\"carousel-item active\">
                        <div class=\"row\">
                            <div class=\"col-10\">
                                <img src=\"";
                // line 18
                echo ($context["popup"] ?? null);
                echo "\" class=\"galery_main\" alt=\"\">
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 23
            echo "                ";
            if (($context["images"] ?? null)) {
                // line 24
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 25
                    echo "                        <div class=\"carousel-item\">
                            <div class=\"row\">

                                <div class=\"col-3\">
                                    <img src=\"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 29);
                    echo "\" class=\"galery_left\" alt=\"\">
                                </div>
                                <div class=\"col-10\">
                                    <img src=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 32);
                    echo "\" class=\"galery_main\" alt=\"\">
                                </div>
                                <div class=\"col-3\">
                                    <img src=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 35);
                    echo "\" class=\"galery_right\" alt=\"\">
                                </div>

                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                ";
            }
            // line 42
            echo "            ";
        }
        // line 43
        echo "        </div>
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
        ";
        // line 58
        if (($context["images"] ?? null)) {
            // line 59
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 60
                echo "                <div class=\"col d-none d-md-flex col-md-1\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 60);
                echo "\" alt=\"\"></div>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 62
                echo "                <div class=\"col d-none d-md-flex col-md-1\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"\"></div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        ";
        }
        // line 65
        echo "        <a class=\"d-md-none d-inline-block galery-arrow-mini\" href=\"#galeryCarousel\" role=\"button\" data-slide=\"next\"><img src=\"/catalog/view/theme/montazh/image/svg/right_arrow.svg\" class=\"col d-md-none\" alt=\"\"></a>
    </div>
    <div class=\"row justify-content-center\">
        <div class=\"col-10 mt-5\">
            <p class=\"galery_description\">Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget mauris nulla semper porttitor Mi velit mauris eget</p>
        </div>
    </div>
</div>

<!-- Second block -->
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-10\">
            <h1 class=\"font-weight-bold\">Описание</h1>
            <p class=\"galery_description mt-4\">";
        // line 79
        echo ($context["description"] ?? null);
        echo "</p>
        </div>
    </div>
</div>

<!-- Third block -->
<div class=\"container galery\">
    ";
        // line 86
        if (($context["attribute_groups"] ?? null)) {
            // line 87
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 88
                echo "            <div class=\"row justify-content-center\">
                <div class=\"col-10\">
                    <h1 class=\"font-weight-bold mt-4 pt-4\" style=\"font-size: 200%;\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 90);
                echo "</h1>
                </div>
            </div>

            <ul>
                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 96
                    echo "                    <li class=\"row justify-content-center mt-3 characteristic\">
                        <div class=\"col-5 col-md-3\">";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 97);
                    echo "</div>
                        <div class=\"col-0 col-md-6\"></div>
                        <div class=\"col-5 col-md-2 text-md-right\">";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 99);
                    echo "</div>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "
            </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "    ";
        }
        // line 106
        echo "    ";
        if (($context["price"] ?? null)) {
            // line 107
            echo "        <div class=\"row mt-5 text-right price\">
            <div class=\"col-0 col-md-4 col-lg-5 col-xl-4\"></div>
            <div class=\"col-12 text-center col-md-4 col-lg-3 col-xl-4\"><p>Стоимость проекта:</p></div>
            <div class=\"col-12 col-md-4 col-lg-3 col-xl-4 text-center font-weight-bold\">
                <p>от ";
            // line 111
            echo ($context["price"] ?? null);
            echo "</p></div>
        </div>
    ";
        }
        // line 114
        echo "</div>

<!-- parser -->
<div class=\"container mt-5 pd-5\"> </div>

<!-- Fourth block -->
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <h1 class=\"font-weight-bold text-center\">Карточки товаров</h1>
    </div>
    <div class=\"tags mt-5\" id=\"categories\">
        ";
        // line 125
        if (($context["categories"] ?? null)) {
            // line 126
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category_all"]) {
                // line 127
                echo "        <button class=\"hashtag\" id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_all"], "id", [], "any", false, false, false, 127);
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_all"], "href", [], "any", false, false, false, 127);
                echo "\">#";
                echo twig_get_attribute($this->env, $this->source, $context["category_all"], "name", [], "any", false, false, false, 127);
                echo "</button>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_all'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "        ";
        }
        // line 130
        echo "    </div>
    <div class=\"shop-carousel\" id=\"productsbottom\">
        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productsbottom"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["productbottom"]) {
            // line 133
            echo "            <div class=\"col-12 col-lg-4 mt-5 appended\">
                <div class=\"card bg-light border border-white\">
                    <img class=\"card-img-top\" src=\"";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["productbottom"], "thumb", [], "any", false, false, false, 135);
            echo "\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["productbottom"], "name", [], "any", false, false, false, 137);
            echo "#</h5>
                        <p class=\"card-text\">";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["productbottom"], "description", [], "any", false, false, false, 138);
            echo "</p>
                        <h5 class=\"mb-4 font-weight-bold\">От ";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["productbottom"], "price", [], "any", false, false, false, 139);
            echo "</h5>
                        <a href=\"#\" class=\"btn btn-primary\">Смотреть проект</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productbottom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "    </div>
</div>

<div class=\"container mt-2 pt-1\"> </div>
<script>
    \$(document).ready(function(){
       \$('body').on('click', '#categories button', function(e){
          e.preventDefault();
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
                          '<img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r44.png\" alt=\"Card image cap\">' +
                          '<div class=\"card-body\">' +
                          '<h5 class=\"card-title\">' + item.name + '#</h5>' +
                          '<p class=\"card-text\">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>' +
                          '<h5 class=\"mb-4 font-weight-bold\">От 2 500 000 руб</h5>' +
                          '<a href=\"#\" class=\"btn btn-primary\">Смотреть проект</a>' +
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
                          '<img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r44.png\" alt=\"Card image cap\">' +
                          '<div class=\"card-body\">' +
                          '<h5 class=\"card-title\">' + item.name + '#</h5>' +
                          '<p class=\"card-text\">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>' +
                          '<h5 class=\"mb-4 font-weight-bold\">От 2 500 000 руб</h5>' +
                          '<a href=\"#\" class=\"btn btn-primary\">Смотреть проект</a>' +
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
        // line 200
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 200,  336 => 145,  324 => 139,  320 => 138,  316 => 137,  311 => 135,  307 => 133,  303 => 132,  299 => 130,  296 => 129,  283 => 127,  278 => 126,  276 => 125,  263 => 114,  257 => 111,  251 => 107,  248 => 106,  245 => 105,  237 => 102,  228 => 99,  223 => 97,  220 => 96,  216 => 95,  208 => 90,  204 => 88,  199 => 87,  197 => 86,  187 => 79,  171 => 65,  168 => 64,  159 => 62,  151 => 60,  145 => 59,  143 => 58,  126 => 43,  123 => 42,  120 => 41,  108 => 35,  102 => 32,  96 => 29,  90 => 25,  85 => 24,  82 => 23,  74 => 18,  69 => 15,  66 => 14,  64 => 13,  56 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
