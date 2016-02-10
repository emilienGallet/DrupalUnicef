<?php

/* modules/custom/unicef42/templates/accueil.html.twig */
class __TwigTemplate_e190385f2cbf5574ba2f08a2960686bba43bf0828414c4c1f0fb81cef853cf4f extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<a href=\"http://www.unicef.org\"><img src=\"http://192.168.56.1/site/sites/default/files/2016-01/global_logo_2013.png\"></a>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/unicef42/templates/accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <a href="http://www.unicef.org"><img src="http://192.168.56.1/site/sites/default/files/2016-01/global_logo_2013.png"></a>*/
/* */
