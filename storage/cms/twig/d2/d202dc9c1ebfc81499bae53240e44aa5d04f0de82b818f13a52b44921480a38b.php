<?php

/* /home/phat/SourceCode/october/themes/david-batata-bootstrap-4/layouts/fallback.htm */
class __TwigTemplate_ed5178a2906ca2bd7be3ca01d9047bb1fbd0db00c064555d4bc66c9e216da246 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/home/phat/SourceCode/october/themes/david-batata-bootstrap-4/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/home/phat/SourceCode/october/themes/david-batata-bootstrap-4/layouts/fallback.htm", "");
    }
}
