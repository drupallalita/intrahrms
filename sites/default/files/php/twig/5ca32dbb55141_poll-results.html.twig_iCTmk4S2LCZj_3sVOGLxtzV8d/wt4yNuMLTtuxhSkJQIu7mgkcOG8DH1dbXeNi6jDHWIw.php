<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/poll/templates/poll-results.html.twig */
class __TwigTemplate_a01e8c274ac4a11bdc5b0e88b745570945ed4df33574c983f34b6602b1274e35 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 22];
        $filters = ["t" => 31];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 21
        echo "<div class=\"poll\">
  ";
        // line 22
        if (($context["show_question"] ?? null)) {
            // line 23
            echo "    <h3 class=\"poll-question\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["question"] ?? null)), "html", null, true);
            echo "</h3>
  ";
        } else {
            // line 25
            echo "    <h3 class=\"poll-results-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["results_title"] ?? null)), "html", null, true);
            echo "</h3>
  ";
        }
        // line 27
        echo "  <dl>
    ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["results"] ?? null)), "html", null, true);
        echo "
  </dl>
  <div class=\"total\">
    ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total votes: "));
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["votes"] ?? null)), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/poll/templates/poll-results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  75 => 28,  72 => 27,  66 => 25,  60 => 23,  58 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display the poll results in a block.
 *
 * Variables available:
 * - title: The title of the poll.
 * - results: The results of the poll.
 * - votes: The total results in the poll.
 * - links: Links in the poll.
 * - pid: The pid of the poll
 * - cancel_form: A form to cancel the user's vote, if allowed.
 * - raw_links: The raw array of links.
 * - vote: The choice number of the current user's vote.
 *
 * @see template_preprocess_poll_results()
 *
 * @ingroup themeable
 */
#}
<div class=\"poll\">
  {% if show_question %}
    <h3 class=\"poll-question\">{{ question }}</h3>
  {% else %}
    <h3 class=\"poll-results-title\">{{ results_title }}</h3>
  {% endif %}
  <dl>
    {{ results }}
  </dl>
  <div class=\"total\">
    {{ 'Total votes: '|t }} {{ votes }}
  </div>
</div>
", "modules/contrib/poll/templates/poll-results.html.twig", "D:\\Sites\\devdesktop\\intrahrms-test\\docroot\\modules\\contrib\\poll\\templates\\poll-results.html.twig");
    }
}
