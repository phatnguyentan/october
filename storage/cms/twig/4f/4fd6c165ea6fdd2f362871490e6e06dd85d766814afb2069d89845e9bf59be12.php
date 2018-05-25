<?php

/* /home/phat/SourceCode/october/themes/david-batata-bootstrap-4/pages/author.htm */
class __TwigTemplate_e4dc02762ef87d73e886ef8fe14c7927a87fe1466479228c8252585048197f85 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('jumbotron'        );
        // line 2
        echo "  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
<div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div>";
    }

    public function getTemplateName()
    {
        return "/home/phat/SourceCode/october/themes/david-batata-bootstrap-4/pages/author.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  26 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put jumbotron %}
  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
{% endput %}

<div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div>", "/home/phat/SourceCode/october/themes/david-batata-bootstrap-4/pages/author.htm", "");
    }
}
