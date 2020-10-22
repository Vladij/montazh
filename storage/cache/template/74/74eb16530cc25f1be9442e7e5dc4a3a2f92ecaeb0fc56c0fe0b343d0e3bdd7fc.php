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
class __TwigTemplate_efb172e90fcd642797214b6febb6fbe0c1c3e1c26665ed1faca220b82af401fd extends \Twig\Template
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
        // line 63
        echo ($context["description"] ?? null);
        echo "</p>
        </div>
    </div>
</div>

<!-- Third block -->
<div class=\"container galery\">
    ";
        // line 70
        if (($context["attribute_groups"] ?? null)) {
            // line 71
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 72
                echo "            <div class=\"row justify-content-center\">
                <div class=\"col-10\">
                    <h1 class=\"font-weight-bold mt-4 pt-4\" style=\"font-size: 200%;\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 74);
                echo "</h1>
                </div>
            </div>

            <ul>
                ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 80
                    echo "                    <li class=\"row justify-content-center mt-3 characteristic\">
                        <div class=\"col-5 col-md-3\">";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 81);
                    echo "</div>
                        <div class=\"col-0 col-md-6\"></div>
                        <div class=\"col-5 col-md-2 text-md-right\">";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 83);
                    echo "</div>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "
            </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "    ";
        }
        // line 90
        echo "    ";
        if (($context["price"] ?? null)) {
            // line 91
            echo "        <div class=\"row mt-5 text-right price\">
            <div class=\"col-0 col-md-4 col-lg-5 col-xl-4\"></div>
            <div class=\"col-12 text-center col-md-4 col-lg-3 col-xl-4\"><p>Стоимость проекта:</p></div>
            <div class=\"col-12 col-md-4 col-lg-3 col-xl-4 text-center font-weight-bold\">
                <p>от ";
            // line 95
            echo ($context["price"] ?? null);
            echo "</p></div>
        </div>
    ";
        }
        // line 98
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
        // line 190
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
        return array (  284 => 190,  190 => 98,  184 => 95,  178 => 91,  175 => 90,  172 => 89,  164 => 86,  155 => 83,  150 => 81,  147 => 80,  143 => 79,  135 => 74,  131 => 72,  126 => 71,  124 => 70,  114 => 63,  56 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
