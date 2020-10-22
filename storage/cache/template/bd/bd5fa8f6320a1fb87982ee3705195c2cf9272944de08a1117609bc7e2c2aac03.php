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

/* default/template/common/footer.twig */
class __TwigTemplate_286547dd5554305a6cb71bc0943b583f22b715449e95250257e759fe11c06e62 extends \Twig\Template
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
        echo "<!-- footer -->
<div class=\"bg-white\">
  <img src=\"/catalog/view/theme/montazh/image/svg/back-to-top.svg\" class=\"position-absolute btt\" style=\"margin-left: 80%;margin-top: -75px;\" alt=\"\">
  <div class=\"container mt-5 d-none d-lg-block\">
    <div class=\"row\">
      <div class=\"col-5\">
        <img src=\"/catalog/view/theme/montazh/image/logotypes/logo-montazh.svg\" alt=\"\">
        <p class=\"mt-4\">© СтройМонтажГрупп  |  All rights reserved  |  Telegram @studiosiberia</p>
        <p class=\"inn\">ИНН/КПП: 6319038803/631901001<br>ОГРН: 1036300882672</p>
        <a href=\"#\"><img src=\"/catalog/view/theme/montazh/image/logotypes/logo-whatsapp.svg\" class=\"mt-3 mb-5\" alt=\"\"></a>
        <a href=\"#\"><img src=\"/catalog/view/theme/montazh/image/logotypes/logo-telegram.svg\" class=\"ml-3 mt-3 mb-5\" alt=\"\"></a>
      </div>
      <div class=\"col-3 ml-lg-5 pl-lg-5\">
        <p><a href=\"#\">Главная</a></p>
        <p><a href=\"#\">Как это работает</a></p>
        <p><a href=\"#\">Почему мы?</a></p>
        <p><a href=\"#\">О нас</a></p>
        <p><a href=\"#\">Наши преимущества</a></p>
      </div>
      <div class=\"col-3\">
        <p><a href=\"#\" class=\"orange\">Рассчитать стоимость</a></p>
        <p><a href=\"#\">Лицензии и сертификаты</a></p>
        <p><a href=\"#\">Что мы предлагаем</a></p>
        <p><a href=\"#\">Отзывы</a></p>
        <p><a href=\"#\">Контакты</a></p>
      </div>
    </div>
    <div class=\"row justify-content-center mt-5 pt-5\">
      <p class=\"text-center brand\">Заказать качественный дизайн и код напрямую через Telegram: @studiosiberia</p>
    </div>
  </div>

  <div class=\"container mt-5 d-lg-none\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <img src=\"/catalog/view/theme/montazh/image/logotypes/logo-montazh.svg\" alt=\"\">
      </div>
      <div class=\"col-12 text-center mt-5\">
        <p><a href=\"#\">Главная</a></p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p><a href=\"#\">Как это работает</a></p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p><a href=\"#\">Почему мы?</a></p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p><a href=\"#\">О нас</a></p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p><a href=\"#\">Наши преимущества</a></p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p><a href=\"#\" class=\"orange\">Рассчитать стоимость</a></p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p><a href=\"#\">Лицензии и сертификаты</a></p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p><a href=\"#\">Что мы предлагаем</a></p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p><a href=\"#\">Отзывы</a></p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p><a href=\"#\">Контакты</a></p>
      </div>
      <div class=\"col-12 text-center mt-5\">
        <p>© СтройМонтажГрупп  |  All rights reserved  |  Telegram @studiosiberia</p>
      </div>
      <div class=\"col-12 text-center mt-2\">
        <p class=\"inn\">ИНН/КПП: 6319038803/631901001<br>ОГРН: 1036300882672</p>
      </div>
      <div class=\"col-12 text-center mt-4\">
        <a href=\"#\"><img src=\"/catalog/view/theme/montazh/image/logotypes/logo-whatsapp.svg\" class=\"mr-3 footer-social\" alt=\"\"></a>
        <a href=\"#\"><img src=\"/catalog/view/theme/montazh/image/logotypes/logo-telegram.svg\" class=\"ml-3 footer-social\" alt=\"\"></a>
      </div>
      <div class=\"col-12 text-center mt-4 mb-5\">
        <p class=\"brand\">Заказать качественный дизайн и код напрямую через Telegram: @studiosiberia</p>
      </div>
    </div>
  </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\"></script>
<script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
