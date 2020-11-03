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

/* default/template/common/header.twig */
class __TwigTemplate_01d8caaad20e248acf2ae197da36b85f99e0e0f889482153ef374f3e0918a39e extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/catalog/view/theme/montazh/stylesheet/customize.css\">
  <link rel=\"shortcut icon\" href=\"/catalog/view/theme/montazh/image/favicon.jpg\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>

  <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
  <script src=\"/catalog/view/theme/montazh/javascript/services.js\"></script>

  <title>";
        // line 15
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body>

<!-- header -->
<div class=\"container mt-3 d-none d-md-block\">
  <div class=\"row\">
    <div class=\"col-0 float-left d-inline-block ml-3\">
      <img src=\"/catalog/view/theme/montazh/image/logotypes/logo-montazh.svg\" alt=\"\">
    </div>
    <div class=\"col-0 ml-0 ml-lg-0 ml-md-4 ml-lg-4 d-none d-md-inline-block mt-1\">
      <img src=\"/catalog/view/theme/montazh/image/logotypes/logo-montazh-text.svg\" alt=\"\">
    </div>

    <div class=\"col-0 mt-2 ml-4 pl-2 d-none d-md-inline-block\">
      <div class=\"row\">
        <a href=\"#\"><img src=\"/catalog/view/theme/montazh/image/logotypes/logo-instagram.svg\" alt=\"\" class=\"ml-0\"></a>
        <a href=\"#\"><img src=\"/catalog/view/theme/montazh/image/logotypes/logo-whatsapp.svg\" alt=\"\" class=\"ml-3\"></a>
        <a href=\"#\"><img src=\"/catalog/view/theme/montazh/image/logotypes/logo-telegram.svg\" alt=\"\" class=\"ml-3\"></a>
      </div>
      <div class=\"row\">
        <p class=\"ml-0 mt-2\" style=\"font-size: 90%;\">Напишите нашему менеджеру</p>
      </div>
    </div>
    <div class=\"col-3 ml-5 mt-2 d-none d-xl-inline-block\">
      <div class=\"row\">
        <div class=\"col-0\">
          <img src=\"/catalog/view/theme/montazh/image/svg/icon-mail.svg\" alt=\"\">
        </div>
        <div class=\"col-0 ml-2\">
          <a href=\"#\" class=\"mail\">support-team@montazh.ru</a>
        </div>

      </div>
      <div class=\"row\">
        <div class=\"col-0 mt-2\">
          <img src=\"/catalog/view/theme/montazh/image/svg/icon-dot.svg\" alt=\"\">
        </div>
        <div class=\"col-0 ml-2 mt-1 pt-1 address\">
          г. Казань, ул. Строительная, д. 34
        </div>
      </div>
    </div>
    <div class=\"col-2 col-lg-3 col-xl-2 ml-lg-5 ml-xl-0 mt-2 d-none d-lg-inline-block\">
      <div class=\"row\">
        <div class=\"col-0 font-weight-bold\">
          <a href=\"#\">8 (843) 654-25-22</a>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-0 mt-2\">
          Пн-Пт с 08:00 до 22:00
        </div>
      </div>
    </div>
    <div class=\"col-0 mt-2 ml-lg-3 ml-md-5 d-none d-md-inline-block\">
      <div class=\"btn btn-primary\">Заказать звонок</div>
    </div>
  </div>
</div>

<div class=\"navbar d-md-none mb-5 border border-light\">
  <div class=\"container mt-0\">
    <div class=\"navbar-brand\">
      <img src=\"/catalog/view/theme/montazh/image/logotypes/logo-montazh.svg\" alt=\"\">
    </div>
    <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbarContent\" aria-expanded=\"false\">
      <img src=\"/catalog/view/theme/montazh/image/svg/burger.svg\" class=\"burger\" alt=\"\">
      <img src=\"/catalog/view/theme/montazh/image/svg/exit.svg\" class=\"close\" alt=\"\">
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarContent\">
      <ul class=\"navbar-nav mr-auto mb-1 mt-2 text-center\">
        <li class=\"nav-item mt-2\">
          <a href=\"#\" class=\"nav-link\">Главная</a>
        </li>
        <li class=\"nav-item mt-2\">
          <a href=\"#\" class=\"nav-link\">О нас</a>
        </li>
        <li class=\"nav-item mt-2\">
          <a href=\"#\" class=\"nav-link\">Новости</a>
        </li>
        <li class=\"nav-item mt-2\">
          <a href=\"#\" class=\"nav-link\">Фотогалерея</a>
        </li>
        <li class=\"nav-item mt-2\">
          <a href=\"#\" class=\"nav-link\">Контакты</a>
        </li>
        <li class=\"nav-item mt-3\">
          <h4 class=\"orange\">8 (880) 555-55-55</h4>
        </li>
        <li class=\"nav-item mt-3\">
          <p>Напишите нашему менеджеру</p>
        </li>
        <li class=\"nav-item mt-2\">
          <img src=\"/catalog/view/theme/montazh/image/logotypes/logo-instagram.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/logotypes/logo-whatsapp.svg\" alt=\"\">
          <img src=\"/catalog/view/theme/montazh/image/logotypes/logo-telegram.svg\" alt=\"\">
        </li>
      </ul>
    </div>
  </div>
</div>

<header class=\"position-relative border border-light border-top border-bottom border-left-0 border-right-0 mt-3 w-100 d-none d-md-inline-block\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-3 col-sm-4 col-lg-3 col-xl-2\">
        <button class=\"btn btn-secondary mt-1 col-12\" id=\"services\" v-status=\"hidden\">
\t\t\t\t\t\t<span id=\"icon\">
\t\t\t    \t\t\t<img src=\"/catalog/view/theme/montazh/image/svg/icon-first.svg\" class=\"\" alt=\"\">
\t\t\t\t\t\t</span>
          Каталог услуг
        </button>
      </div>
      <div class=\"col-0 mt-3 mr-lg-4 ml-lg-1 ml-md-2 mr-md-2\" data-toggle=\"modal\" data-target=\"#authModal\"><a href=\"#\">Главная</a></div>
      <div class=\"col-0 mt-3 mr-lg-4 ml-lg-1 ml-md-2 mr-md-2\" data-toggle=\"modal\" data-target=\"#codeModal\"><a href=\"#\">О нас</a></div>
      <div class=\"col-0 mt-3 mr-lg-4 ml-lg-1 ml-md-2 mr-md-2\"><a href=\"#\">Новости</a></div>
      <div class=\"col-0 mt-3 mr-lg-4 ml-lg-1 ml-md-2 mr-md-2\"><a href=\"#\">Фотогалерея</a></div>
      <div class=\"col-0 mt-3 mr-lg-4 ml-lg-1 ml-md-2 mr-md-2\"><a href=\"#\">Контакты</a></div>
    </div>
  </div>
</header>

<!-- Modal frames -->
<div id=\"services_modal\">
  <div id=\"left_panel\">
    ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 142
            echo "    <div id=\"block\" block-id=\"block";
            echo $context["key"];
            echo "\" ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            } else {
                echo " class ";
            }
            echo ">
      <p>";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 143);
            echo "</p>
      ";
            // line 144
            if (twig_get_attribute($this->env, $this->source, $context["category"], "subcategories", [], "any", false, false, false, 144)) {
                // line 145
                echo "      <svg width=\"8\" height=\"12\" viewBox=\"0 0 8 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
        <path d=\"M1.66663 1.33329L6.33329 5.99996L1.66663 10.6666\" stroke=\"#CCD8E8\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
      </svg>
      ";
            }
            // line 149
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "
  </div>
  <div id=\"right_panel\">
    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 155
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "subcategories", [], "any", false, false, false, 155)) {
                // line 156
                echo "
    <div id=\"block";
                // line 157
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == 0)) {
                    echo " class=\"bigblock showed\" status=\"showed\" ";
                } else {
                    echo " class=\"bigblock hidden\" status=\"hidden\"";
                }
                echo " class=\"bigblock\">
      <h1>";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 158);
                echo "</h1>
      <table>

        <tr class=\"name\">
          ";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "subcategories", [], "any", false, false, false, 162));
                foreach ($context['_seq'] as $context["keysub"] => $context["subcategory"]) {
                    // line 163
                    echo "          <td class=\"name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["subcategory"], "name", [], "any", false, false, false, 163);
                    echo "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keysub'], $context['subcategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "        </tr>
        <tr id=\"parse\"></tr>
        ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "subcategories", [], "any", false, false, false, 167));
                foreach ($context['_seq'] as $context["keysub"] => $context["subcategory"]) {
                    // line 168
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["subcategory"], "thirdcategories", [], "any", false, false, false, 168)) {
                        // line 169
                        echo "        <tr>
          ";
                        // line 170
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subcategory"], "thirdcategories", [], "any", false, false, false, 170));
                        foreach ($context['_seq'] as $context["_key"] => $context["thirdcategory"]) {
                            // line 171
                            echo "          <td><a href=\"#\">";
                            echo twig_get_attribute($this->env, $this->source, $context["thirdcategory"], "name", [], "any", false, false, false, 171);
                            echo "</a></td>
          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thirdcategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 173
                        echo "        </tr>
        ";
                    }
                    // line 175
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keysub'], $context['subcategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "
      </table>
    </div>

      ";
            }
            // line 181
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "
";
        // line 184
        echo "  </div>
</div>
<script>
  \$(document).ready(function(){
    \$('body #services_modal #left_panel #block').on('click', function(){
      var blocksButtons = \$('body #services_modal #left_panel').find('.active');
      blocksButtons.removeClass('active');
      \$(this).addClass('active');
      var blockId = \$(this).attr('block-id');
      var bigblock = \$(this).closest('#services_modal').find('#right_panel #' + blockId);
      var bigblocksecond = \$(this).closest('#services_modal').find('#right_panel .showed');

      bigblocksecond.removeClass('showed');
      bigblocksecond.addClass('hidden');
      bigblock.addClass('showed');
    });
  });
</script>
<div class=\"modal fade\" id=\"authModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body text-center\">
        <div class=\"row justify-content-right\">
          <div class=\"col-12\">
            <img src=\"/catalog/view/theme/montazh/image/svg/exit.svg\" class=\"close float-right\" data-dismiss=\"modal\" aria-label=\"Close\" alt=\"\">
          </div>
        </div>

        <img src=\"/catalog/view/theme/montazh/image/svg/warning.svg\" class=\"mt-5 text-center\"  alt=\"\">
        <h1 class=\"font-weight-bold mt-5\">Пожалуйста, авторизуйтесь на сайте!</h1>
        <p class=\"mt-5\">Уважаемые клиенты, после неоднократных случаев кражи фото-материала мы сделали авторизацию по телефону. После ввода номера телефона, вам придет WhatsApp-сообщение с кодом для входа.</p>
        <form action=\"\">
          <input type=\"text\" class=\"pl-3 pr-3 mt-3 w-50\" name=\"phone\" placeholder=\"+7 800 555-35-35\">
          <div class=\"btn btn-primary w-50 mt-4 mb-3\">Получить SMS</div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"codeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body text-center\">
        <div class=\"row justify-content-right\">
          <div class=\"col-12\">
            <img src=\"/catalog/view/theme/montazh/image/svg/exit.svg\" class=\"close float-right\" data-dismiss=\"modal\" aria-label=\"Close\" alt=\"\">
          </div>
        </div>

        <img src=\"/catalog/view/theme/montazh/image/svg/warning.svg\" class=\"mt-5 text-center\"  alt=\"\">
        <h1 class=\"font-weight-bold mt-5\">Осталось ввести код</h1>
        <p class=\"mt-5\">Уважаемые клиенты, после неоднократных случаев кражи фото-материала мы сделали авторизацию по телефону. После ввода номера телефона, вам придет WhatsApp-сообщение с кодом для входа.</p>
        <form action=\"\">
          <input type=\"text\" class=\"pl-3 pr-3 mt-3 w-50\" name=\"code\" placeholder=\"__ __ __ - __ __ __\">
          <div class=\"btn btn-primary w-50 mt-4 mb-3\">Отправить код</div>
        </form>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 184,  316 => 182,  310 => 181,  303 => 176,  297 => 175,  293 => 173,  284 => 171,  280 => 170,  277 => 169,  274 => 168,  270 => 167,  266 => 165,  257 => 163,  253 => 162,  246 => 158,  236 => 157,  233 => 156,  230 => 155,  226 => 154,  221 => 151,  214 => 149,  208 => 145,  206 => 144,  202 => 143,  191 => 142,  187 => 141,  58 => 15,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
