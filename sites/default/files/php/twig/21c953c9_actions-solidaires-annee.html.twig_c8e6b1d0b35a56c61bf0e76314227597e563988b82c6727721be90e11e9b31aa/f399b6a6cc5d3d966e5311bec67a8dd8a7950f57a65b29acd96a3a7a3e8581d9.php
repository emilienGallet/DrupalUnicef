<?php

/* modules/custom/u42p2/templates/actions-solidaires-annee.html.twig */
class __TwigTemplate_c532dc63dd3f367dfdb8754ddb665d666983216ad5088105915189c870de40ae extends Twig_Template
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
        $tags = array("for" => 5);
        $filters = array();
        $functions = array("path" => 6);

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["actionSolidaire"]) ? $context["actionSolidaire"] : null), "html", null, true));
        echo "

<ul>
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ActionSolidaire"]) {
            // line 6
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getPath("u42p2.img_actions_solidaires_controller_index", array("actionSolidaire" => (isset($context["actionSolidaire"]) ? $context["actionSolidaire"] : null), "annee" => $this->getAttribute($context["ActionSolidaire"], "AnneeCivil_Annee", array()))), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["ActionSolidaire"], "AnneeCivil_Annee", array()), "html", null, true));
            echo "<br /></a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ActionSolidaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "modules/custom/u42p2/templates/actions-solidaires-annee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  53 => 6,  49 => 5,  43 => 2,);
    }
}
/* {#  src : AnneeActionSolidaire #}*/
/* {{actionSolidaire}}*/
/* */
/* <ul>*/
/* 	{% for ActionSolidaire in liste %}*/
/* 		<li><a href="{{ path('u42p2.img_actions_solidaires_controller_index', {'actionSolidaire': actionSolidaire, 'annee': ActionSolidaire.AnneeCivil_Annee} ) }}">{{ActionSolidaire.AnneeCivil_Annee}}<br /></a></li>*/
/* 	{% endfor %}*/
/* </ul>*/
