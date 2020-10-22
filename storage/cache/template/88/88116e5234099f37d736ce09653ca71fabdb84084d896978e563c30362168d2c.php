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
class __TwigTemplate_b1a22ded26ac567ce540f29e7267c9ad3f19c5baf2a91fb5ca5882ebe755b614 extends \Twig\Template
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
            <div class=\"carousel-item active\">
                <div class=\"row\">
                    ";
        // line 16
        echo "                ";
        // line 17
        echo "                    <div class=\"col-3\">
                        <img src=\"/catalog/view/theme/montazh/image/placeholder.png\" class=\"galery_left\" alt=\"\">
                    </div>
                    <div class=\"col-10\">
                        <img src=\"";
        // line 21
        echo "\" class=\"galery_main\" alt=\"\">
                    </div>
                    <div class=\"col-3\">
                        <img src=\"/catalog/view/theme/montazh/image/placeholder.png\" class=\"galery_right\" alt=\"\">
                    </div>
                    ";
        // line 27
        echo "                </div>
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

<!-- Second block -->
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-10\">
            <h1 class=\"font-weight-bold\">Описание</h1>
            <p class=\"galery_description mt-4\">";
        // line 66
        echo ($context["description"] ?? null);
        echo "</p>
        </div>
    </div>
</div>

<!-- Third block -->
<div class=\"container galery\">
    ";
        // line 73
        if (($context["attribute_groups"] ?? null)) {
            // line 74
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 75
                echo "            <div class=\"row justify-content-center\">
                <div class=\"col-10\">
                    <h1 class=\"font-weight-bold mt-4 pt-4\" style=\"font-size: 200%;\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 77);
                echo "</h1>
                </div>
            </div>

            <ul>
                ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 83
                    echo "                    <li class=\"row justify-content-center mt-3 characteristic\">
                        <div class=\"col-5 col-md-3\">";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 84);
                    echo "</div>
                        <div class=\"col-0 col-md-6\"></div>
                        <div class=\"col-5 col-md-2 text-md-right\">";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 86);
                    echo "</div>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "
            </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    ";
        }
        // line 93
        echo "    ";
        if (($context["price"] ?? null)) {
            // line 94
            echo "        <div class=\"row mt-5 text-right price\">
            <div class=\"col-0 col-md-4 col-lg-5 col-xl-4\"></div>
            <div class=\"col-12 text-center col-md-4 col-lg-3 col-xl-4\"><p>Стоимость проекта:</p></div>
            <div class=\"col-12 col-md-4 col-lg-3 col-xl-4 text-center font-weight-bold\">
                <p>от ";
            // line 98
            echo ($context["price"] ?? null);
            echo "</p></div>
        </div>
    ";
        }
        // line 101
        echo "</div>

<!-- parser -->
<div class=\"container mt-5 pd-5\"> </div>

<!-- Fourth block -->
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <h1 class=\"font-weight-bold text-center\">Карточки товаров</h1>
    </div>
    <div class=\"tags mt-5\">
        <button class=\"hashtag\">#Наименование</button>
        <button class=\"hashtag\">#Наименование</button>
        <button class=\"hashtag\">#Наименование</button>
        <button class=\"hashtag\">#Наименование</button>
        <button class=\"hashtag\">#Наименование</button>
        <button class=\"hashtag\">#Наименование</button>
        <button class=\"hashtag\">#Наименование</button>
        <button class=\"hashtag\">#Наименование</button>
        <button class=\"hashtag\">#Наименование</button>
    </div>
    <div class=\"shop-carousel\">
        <div class=\"col-12 col-lg-4 mt-5\">
            <div class=\"card bg-light border border-white\">
                <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r42.png\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Типовой проект #</h5>
                    <p class=\"card-text\">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class=\"mb-4 font-weight-bold\">От 2 500 000 руб</h5>
                    <a href=\"#\" class=\"btn btn-primary\">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-lg-4 mt-5\">
            <div class=\"card bg-light border border-white\">
                <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r43.png\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Типовой проект #</h5>
                    <p class=\"card-text\">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class=\"mb-4 font-weight-bold\">От 2 500 000 руб</h5>
                    <a href=\"#\" class=\"btn btn-primary\">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-lg-4 mt-5\">
            <div class=\"card bg-light border border-white\">
                <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r44.png\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Типовой проект #</h5>
                    <p class=\"card-text\">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class=\"mb-4 font-weight-bold\">От 2 500 000 руб</h5>
                    <a href=\"#\" class=\"btn btn-primary\">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-lg-4 mt-5\">
            <div class=\"card bg-light border border-white\">
                <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r42.png\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Типовой проект #</h5>
                    <p class=\"card-text\">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class=\"mb-4 font-weight-bold\">От 2 500 000 руб</h5>
                    <a href=\"#\" class=\"btn btn-primary\">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-lg-4 mt-5\">
            <div class=\"card bg-light border border-white\">
                <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r43.png\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Типовой проект #</h5>
                    <p class=\"card-text\">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class=\"mb-4 font-weight-bold\">От 2 500 000 руб</h5>
                    <a href=\"#\" class=\"btn btn-primary\">Смотреть проект</a>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-lg-4 mt-5\">
            <div class=\"card bg-light border border-white\">
                <img class=\"card-img-top\" src=\"/catalog/view/theme/montazh/image/r44.png\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Типовой проект #</h5>
                    <p class=\"card-text\">Sagittis, etiam purus sit turpis Sagittis, etiam purus sit turpis</p>
                    <h5 class=\"mb-4 font-weight-bold\">От 2 500 000 руб</h5>
                    <a href=\"#\" class=\"btn btn-primary\">Смотреть проект</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container mt-2 pt-1\"> </div>
";
        // line 193
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
        return array (  292 => 193,  198 => 101,  192 => 98,  186 => 94,  183 => 93,  180 => 92,  172 => 89,  163 => 86,  158 => 84,  155 => 83,  151 => 82,  143 => 77,  139 => 75,  134 => 74,  132 => 73,  122 => 66,  81 => 27,  74 => 21,  68 => 17,  66 => 16,  56 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
