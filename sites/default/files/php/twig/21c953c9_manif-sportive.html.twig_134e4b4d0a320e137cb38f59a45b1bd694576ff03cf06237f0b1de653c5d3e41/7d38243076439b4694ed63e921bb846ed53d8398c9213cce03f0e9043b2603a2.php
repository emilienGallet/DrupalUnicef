<?php

/* modules/custom/unicef42/templates/manif-sportive.html.twig */
class __TwigTemplate_c91e289195228871c59ed7ad2eac50e87b7e0faba2faec963501a6d0c12eb57b extends Twig_Template
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
        $tags = array("for" => 2);
        $filters = array();
        $functions = array("path" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
                array(),
                array('path')
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
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sports"]) ? $context["sports"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sport"]) {
            // line 3
            echo "\t\t<li><a href=\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getPath("u42p2.manif_sportive_index", array("sport" => $this->getAttribute($context["sport"], "nomSport", array()))), "html", null, true));
            echo " \">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["sport"], "nomSport", array()), "html", null, true));
            echo "<br /></a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo " 
</ul>";
    }

    public function getTemplateName()
    {
        return "modules/custom/unicef42/templates/manif-sportive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }
}
/* <ul>*/
/* 	{% for sport in sports %}*/
/* 		<li><a href=" {{ path('u42p2.manif_sportive_index', {'sport': sport.nomSport} ) }} ">{{sport.nomSport}}<br /></a></li>*/
/* 	{% endfor %} */
/* </ul>*/
