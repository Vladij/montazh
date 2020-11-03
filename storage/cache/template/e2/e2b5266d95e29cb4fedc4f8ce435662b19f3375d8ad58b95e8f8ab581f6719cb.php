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
class __TwigTemplate_5ef75015a02f8d40345e7dc583c572f7edc26691bea9db9f2340cfc1ddc21cfc extends \Twig\Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 142
            echo "    <div id=\"block\" block-id=\"house\" ";
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["categories"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)) {
                echo " class=\"active\" ";
            }
            echo ">
      <p>";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 143);
            echo "</p>
      <svg width=\"8\" height=\"12\" viewBox=\"0 0 8 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
        <path d=\"M1.66663 1.33329L6.33329 5.99996L1.66663 10.6666\" stroke=\"#CCD8E8\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
      </svg>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
    <div id=\"block\" block-id=\"terrace\">
      <p>Строительство террас</p>
      <svg width=\"8\" height=\"12\" viewBox=\"0 0 8 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
        <path d=\"M1.66663 1.33329L6.33329 5.99996L1.66663 10.6666\" stroke=\"#CCD8E8\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
      </svg>
    </div>

  </div>
  <div id=\"right_panel\">
    <div id=\"house\" status=\"showed\">
      <h1>Строительство домов</h1>
      <table>
        <tr class=\"name\">
          <td class=\"name\">Строительство домов</td>
          <td class=\"name\">Строительство домов</td>
          <td class=\"name\">Строительство домов</td>
        </tr>
        <tr id=\"parse\"></tr>
        <tr>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
          <td><a href=\"#\">Строительство домов</a></td>
        </tr>
      </table>
    </div>
    <div id=\"terrace\" status=\"hidden\">
      <h1>Строительство террас</h1>
      <table>
        <tr class=\"name\">
          <td class=\"name\">Строительство террас</td>
          <td class=\"name\">Строительство террас</td>
          <td class=\"name\">Строительство террас</td>
        </tr>
        <tr id=\"parse\"></tr>
        <tr>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
          <td><a href=\"#\">Строительство террас</a></td>
        </tr>
      </table>
    </div>
    <div id=\"alcove\" status=\"hidden\">
      <h1>Строительство беседок</h1>
      <table>
        <tr class=\"name\">
          <td class=\"name\">Строительство беседок</td>
          <td class=\"name\">Строительство беседок</td>
          <td class=\"name\">Строительство беседок</td>
        </tr>
        <tr id=\"parse\"></tr>
        <tr>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
          <td><a href=\"#\">Строительство беседок</a></td>
        </tr>
      </table>
    </div>
    <div id=\"furniture\" status=\"hidden\">
      <h1>Корпусная мебель</h1>
      <table>
        <tr class=\"name\">
          <td class=\"name\">Корпусная мебель</td>
          <td class=\"name\">Корпусная мебель</td>
          <td class=\"name\">Корпусная мебель</td>
        </tr>
        <tr id=\"parse\"></tr>
        <tr>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
          <td><a href=\"#\">Корпусная мебель</a></td>
        </tr>
      </table>
    </div>
    <div id=\"bbq\" status=\"hidden\">
      <h1>Изготовление барбекю</h1>
      <table>
        <tr class=\"name\">
          <td class=\"name\">Изготовление барбекю</td>
          <td class=\"name\">Изготовление барбекю</td>
          <td class=\"name\">Изготовление барбекю</td>
        </tr>
        <tr id=\"parse\"></tr>
        <tr>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
          <td><a href=\"#\">Изготовление барбекю</a></td>
        </tr>
      </table>
    </div>
    <div id=\"construct\" status=\"hidden\">
      <h1>Сборные конструкции</h1>
      <table>
        <tr class=\"name\">
          <td class=\"name\">Сборные конструкции</td>
          <td class=\"name\">Сборные конструкции</td>
          <td class=\"name\">Сборные конструкции</td>
        </tr>
        <tr id=\"parse\"></tr>
        <tr>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
        </tr>
        <tr>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
          <td><a href=\"#\">Сборные конструкции</a></td>
        </tr>
      </table>
    </div>
  </div>
</div>
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
        return array (  210 => 149,  198 => 143,  191 => 142,  187 => 141,  58 => 15,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
