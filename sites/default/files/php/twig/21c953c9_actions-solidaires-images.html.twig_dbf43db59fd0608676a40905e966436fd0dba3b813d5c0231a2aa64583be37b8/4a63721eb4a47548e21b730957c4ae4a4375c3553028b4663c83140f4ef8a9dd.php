<?php

/* modules/custom/u42p2/templates/actions-solidaires-images.html.twig */
class __TwigTemplate_20f37b435a5686b98b98cdf2f6fd41cc73cfc66edd45c658eeb9b134d4cbe38b extends Twig_Template
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
        $tags = array("for" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 2
        echo "<h1>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["actionSolidaire"]) ? $context["actionSolidaire"] : null), "html", null, true));
        echo "</h1>
<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["imgactionssolidaires"]) {
            // line 5
            echo "\t\t<li><a href=\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["imgactionssolidaires"], "refLien", array()), "html", null, true));
            echo " \"><img src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["imgactionssolidaires"], "refLien", array()), "html", null, true));
            echo "\"/></a></li><br />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imgactionssolidaires'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "modules/custom/u42p2/templates/actions-solidaires-images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  53 => 5,  49 => 4,  43 => 2,);
    }
}
/* {# src : ImgActionsSolidairesController #}*/
/* <h1>{{actionSolidaire}}</h1>*/
/* <ul>*/
/* 	{% for imgactionssolidaires in liste %}*/
/* 		<li><a href=" {{ imgactionssolidaires.refLien }} "><img src="{{imgactionssolidaires.refLien}}"/></a></li><br />*/
/* 	{% endfor %}*/
/* </ul>*/
