<?php

/* modules/custom/unicef42/templates/actions-solidaires.html.twig */
class __TwigTemplate_ce6f728c6dadeaaaf43daf81a02e401b3afc3e30177b8c62d41947dce0d84e19 extends Twig_Template
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

        // line 1
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["actionsSolidaires"]) {
            // line 3
            echo "\t\t<li><a href=\" 
\t\t";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getPath("u42p2.annees_actions_solidaires_index", array("actionSolidaire" => $this->getAttribute($context["actionsSolidaires"], "nom", array()))), "html", null, true));
            echo "
\t\t\">";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["actionsSolidaires"], "nom", array()), "html", null, true));
            echo "<br /></a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actionsSolidaires'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("unicef42.manif_sportive_controller_index")));
        echo "\">Manifestations sportive</a></li>
\t
</ul>";
    }

    public function getTemplateName()
    {
        return "modules/custom/unicef42/templates/actions-solidaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  65 => 6,  57 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }
}
/* <ul>*/
/* 	{% for actionsSolidaires in liste %}*/
/* 		<li><a href=" */
/* 		{{ path('u42p2.annees_actions_solidaires_index', {'actionSolidaire': actionsSolidaires.nom }) }}*/
/* 		">{{actionsSolidaires.nom}}<br /></a></li>*/
/* 	{% endfor %} */
/* 	<li><a href="{{ path('unicef42.manif_sportive_controller_index')}}">Manifestations sportive</a></li>*/
/* 	*/
/* </ul>*/
