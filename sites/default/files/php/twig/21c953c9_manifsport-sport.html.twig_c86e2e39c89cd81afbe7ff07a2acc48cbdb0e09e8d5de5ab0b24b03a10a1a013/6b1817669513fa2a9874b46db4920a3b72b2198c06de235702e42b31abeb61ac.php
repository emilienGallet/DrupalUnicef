<?php

/* modules/custom/u42p2/templates/manifsport-sport.html.twig */
class __TwigTemplate_d20d40df040d2bcc0694dc6e6389c52e7a30f47882e4daf230bd381829dc62fb extends Twig_Template
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
        $tags = array("for" => 3);
        $filters = array();
        $functions = array("path" => 4);

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

        // line 2
        echo "<ul>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["manifsportive"]) {
            // line 4
            echo "\t\t<li><a href=\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getPath("u42p2.img_manif_sportive_controller_index", array("sport" => (isset($context["sport"]) ? $context["sport"] : null), "lamanif" => $this->getAttribute($context["manifsportive"], "NomManifSportive", array()))), "html", null, true));
            echo " \">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["manifsportive"], "NomManifSportive", array()), "html", null, true));
            echo "<br /></a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manifsportive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "modules/custom/u42p2/templates/manifsport-sport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  50 => 4,  46 => 3,  43 => 2,);
    }
}
/* {#  src : ManifSportive #}*/
/* <ul>*/
/* 	{% for manifsportive in liste %}*/
/* 		<li><a href=" {{ path('u42p2.img_manif_sportive_controller_index', {'sport': sport, 'lamanif': manifsportive.NomManifSportive} ) }} ">{{manifsportive.NomManifSportive}}<br /></a></li>*/
/* 	{% endfor %}*/
/* </ul>*/
