<?php

/* /home/phat/SourceCode/october/themes/david-batata-bootstrap-4/partials/yame/navbar.htm */
class __TwigTemplate_ccd336c5f2f76484d0309a26b06c24c5a229e8602e5152338cc442b570b0795a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"navbar\" style=\"font-size: 12px\">
\t<nav class=\"navbar-dark navbar-fixed-top\">
\t\t<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <a href=\"/home\">
                        <img src=\"https://res.yame.vn/Content/images/logo-white.png\" alt=\"Yame.vn\">
                    </a>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"pt-3\">
                        <form class=\"form-inline\" method=\"GET\" action=\"/search\">
                            <div class=\"form-group pr-1\">
                                <input type=\"text\" class=\"form-control\" name=\"keyword\" id=\"topSearchKeyword\" placeholder=\"Tìm kiếm sản phẩm\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"navbar-nav row pt-2\" style=\"flex-direction: row\">
                        <li class=\"col-md-3 nav-item";
        // line 22
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "home")) ? (" active") : (""));
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">GÓP Ý <br> THAN PHIỀN </a>
                        </li>
                        <li class=\"col-md-3 nav-item";
        // line 25
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "features")) ? (" active") : (""));
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("features");
        echo "\">GIAO HÀNG <br> TOÀN QUỐC</a>
                        </li>
                        <li class=\"col-md-3 nav-item";
        // line 28
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "features")) ? (" active") : (""));
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("features");
        echo "\">ĐẶT HÀNG <br> (028) 7307 1441</a>
                        </li>
                        <li class=\"col-md-3 nav-item";
        // line 31
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "author")) ? (" active") : (""));
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("author");
        echo "\">BẢO HÀNH <br> 365 NGÀY </a>
                        </li>
                    </ul>
                </div>
            </div>
\t\t</div>
\t</nav>
</section>
<div class=\"navbar-nav bg-dark-2\">
    <ul class=\"container list-inline\" style=\"margin-bottom: 2px\">
        <li class=\"list-inline-item\"><a href=\"#\" class=\"list-group-item-action\">MỚI VỀ</a></li>
        <li class=\"list-inline-item\"><a href=\"#\" class=\"list-group-item-action\">BÁN CHẠY</a></li>
        <li class=\"list-inline-item\">
            <a class=\"dropdown-toggle list-group-item-action\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                aria-expanded=\"false\">
                ÁO THUN
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                <a class=\"dropdown-item\" href=\"#\">ÁO THUN MABƯ</a>
            </div>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/phat/SourceCode/october/themes/david-batata-bootstrap-4/partials/yame/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  69 => 31,  64 => 29,  60 => 28,  55 => 26,  51 => 25,  46 => 23,  42 => 22,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" style=\"font-size: 12px\">
\t<nav class=\"navbar-dark navbar-fixed-top\">
\t\t<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">
                    <a href=\"/home\">
                        <img src=\"https://res.yame.vn/Content/images/logo-white.png\" alt=\"Yame.vn\">
                    </a>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"pt-3\">
                        <form class=\"form-inline\" method=\"GET\" action=\"/search\">
                            <div class=\"form-group pr-1\">
                                <input type=\"text\" class=\"form-control\" name=\"keyword\" id=\"topSearchKeyword\" placeholder=\"Tìm kiếm sản phẩm\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"navbar-nav row pt-2\" style=\"flex-direction: row\">
                        <li class=\"col-md-3 nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
                            <a class=\"nav-link\" href=\"{{ 'home'|page }}\">GÓP Ý <br> THAN PHIỀN </a>
                        </li>
                        <li class=\"col-md-3 nav-item{{ this.page.baseFileName == 'features' ? ' active' }}\">
                            <a class=\"nav-link\" href=\"{{ 'features'|page }}\">GIAO HÀNG <br> TOÀN QUỐC</a>
                        </li>
                        <li class=\"col-md-3 nav-item{{ this.page.baseFileName == 'features' ? ' active' }}\">
                            <a class=\"nav-link\" href=\"{{ 'features'|page }}\">ĐẶT HÀNG <br> (028) 7307 1441</a>
                        </li>
                        <li class=\"col-md-3 nav-item{{ this.page.baseFileName == 'author' ? ' active' }}\">
                            <a class=\"nav-link\" href=\"{{ 'author'|page }}\">BẢO HÀNH <br> 365 NGÀY </a>
                        </li>
                    </ul>
                </div>
            </div>
\t\t</div>
\t</nav>
</section>
<div class=\"navbar-nav bg-dark-2\">
    <ul class=\"container list-inline\" style=\"margin-bottom: 2px\">
        <li class=\"list-inline-item\"><a href=\"#\" class=\"list-group-item-action\">MỚI VỀ</a></li>
        <li class=\"list-inline-item\"><a href=\"#\" class=\"list-group-item-action\">BÁN CHẠY</a></li>
        <li class=\"list-inline-item\">
            <a class=\"dropdown-toggle list-group-item-action\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                aria-expanded=\"false\">
                ÁO THUN
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                <a class=\"dropdown-item\" href=\"#\">ÁO THUN MABƯ</a>
            </div>
        </li>
    </ul>
</div>", "/home/phat/SourceCode/october/themes/david-batata-bootstrap-4/partials/yame/navbar.htm", "");
    }
}
