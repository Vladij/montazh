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

/* default/template/product/template.twig */
class __TwigTemplate_92f55d4b154c049610186ca44fe47f14205f06da9347bc8c8010d1ef25c7082e extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "<div class=\"col-12 col-lg-4 mt-5\">
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
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "<div class=\"col-12 col-lg-4 mt-5\">
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
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/template/product/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/template.twig", "");
    }
}
