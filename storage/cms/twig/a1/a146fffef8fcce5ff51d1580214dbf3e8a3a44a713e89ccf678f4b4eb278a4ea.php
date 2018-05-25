<?php

/* /home/phat/SourceCode/october/themes/david-batata-bootstrap-4/layouts/yame.htm */
class __TwigTemplate_95dce4388c82592cc9bca414c6ab0b806f4ea3ff1d08428ea25f2aa415eb2288 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "bower_components/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/css/styles.css", 3 => "assets/vendor/animate.css/animate.min.css", 4 => "assets/vendor/plyr/dist/plyr.css"));
        // line 14
        echo "\" rel=\"stylesheet\">
    ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "
  </head>
  <body>
      <div class=\"bg-dark-1\">
         ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("yame/navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "         ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("yame/slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        <section id=\"page\" class=\"container m-b-3\">
            ";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 24
        echo "        </section>
      </div>
    <script src=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "bower_components/bootstrap/dist/js/bootstrap.bundle.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js"));
        // line 34
        echo "\"></script>
    ";
        // line 35
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 36
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 37
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/phat/SourceCode/october/themes/david-batata-bootstrap-4/layouts/yame.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 37,  72 => 36,  65 => 35,  62 => 34,  60 => 26,  56 => 24,  54 => 23,  51 => 22,  46 => 21,  42 => 20,  36 => 16,  33 => 15,  30 => 14,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"{{ [
      'bower_components/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/css/styles.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css'
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}

  </head>
  <body>
      <div class=\"bg-dark-1\">
         {% partial 'yame/navbar' %}
         {% partial 'yame/slider' %}
        <section id=\"page\" class=\"container m-b-3\">
            {% page %}
        </section>
      </div>
    <script src=\"{{ [
      'assets/vendor/jquery/dist/jquery.min.js',
      'assets/vendor/tether/dist/js/tether.min.js',
      'bower_components/bootstrap/dist/js/bootstrap.bundle.min.js',
      'assets/vendor/wow/dist/wow.min.js',
      'assets/vendor/holderjs/holder.min.js',
      'assets/vendor/plyr/dist/plyr.js',
      'assets/js/scripts.js'
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
  </body>
</html>", "/home/phat/SourceCode/october/themes/david-batata-bootstrap-4/layouts/yame.htm", "");
    }
}
