<?php

/* /opt/lampp/htdocs/flatui/themes/responsiv-flat/layouts/fallback.htm */
class __TwigTemplate_479f5f241b6da8b06287137d85a908dff3e6133a5248c3f9ded94ed5fabe42d0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        return "/opt/lampp/htdocs/flatui/themes/responsiv-flat/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/opt/lampp/htdocs/flatui/themes/responsiv-flat/layouts/fallback.htm", "");
    }
}
