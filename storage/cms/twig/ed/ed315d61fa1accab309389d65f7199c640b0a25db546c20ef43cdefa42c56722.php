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

/* /Volumes/External HD/Clients/www/vaersaga/themes/hambern-hambern-blank-bootstrap-4/pages/features.htm */
class __TwigTemplate_333fb882c85e2f75c1c4b87a185d3f933772cb674bcf164f02eae49302f64993 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('jumbotron'        );
        // line 2
        echo "  <h1 class=\"display-3\">Vaersaga.com</h1>
  <p class=\"lead\">This is webpage is under construction, come back later!</p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 5
        echo "
<h1 class=\"display-4 wow animated zoomInDown m-t-3\">Contact me for more information!</h1>

<dl class=\"row m-t-3 wow animated zoomInUp\" data-wow-delay=\".1s\">
  ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("simpleContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "</dl>";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/vaersaga/themes/hambern-hambern-blank-bootstrap-4/pages/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  43 => 5,  41 => 1,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put jumbotron %}
  <h1 class=\"display-3\">Vaersaga.com</h1>
  <p class=\"lead\">This is webpage is under construction, come back later!</p>
{% endput %}

<h1 class=\"display-4 wow animated zoomInDown m-t-3\">Contact me for more information!</h1>

<dl class=\"row m-t-3 wow animated zoomInUp\" data-wow-delay=\".1s\">
  {% component 'simpleContact' %}
</dl>", "/Volumes/External HD/Clients/www/vaersaga/themes/hambern-hambern-blank-bootstrap-4/pages/features.htm", "");
    }
}
