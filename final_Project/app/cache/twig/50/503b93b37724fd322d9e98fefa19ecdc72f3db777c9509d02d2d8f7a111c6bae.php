<?php

/* homepageform.html.twig */
class __TwigTemplate_17c726fee0b1bd0cff88ed2d94605bcc497cdc79e3fbabddc08154bcf96c50ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("banner.html.twig", "homepageform.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "banner.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"page-content-div\">
        <h3>";
        // line 4
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h3>
        <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"post\">
            <fieldset>
                <legend>User details</legend>
                <br>
                <label for=\"username\">Enter your name:</label>
                <input id=\"username\" name=\"username\" type=\"text\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"50\">
                <br><br>
                <label for=\"password\">Enter your password:</label>
                <input id=\"password\" name=\"password\" type=\"password\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"50\">
                <br><br>
                <label for=\"email\">Enter your email:</label>
                <input id=\"email\" name=\"email\" type=\"text\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"50\">
                <br><br>
                <label for=\"requirements\">Dietary requirements:</label>
                <textarea id=\"requirements\" name=\"requirements\" value=\"\" rows=\"3\" cols=\"50\">Enter your special dietary requirements</textarea>
                <br><br>
                <input type=\"submit\" value=\"Create user account >>>\">
            </fieldset>
        </form>
        <p class=\"curr_page\"><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Home</a></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "homepageform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  58 => 16,  52 => 13,  46 => 10,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepageform.html.twig", "/p3t/phpappfolder/includes/encryption_and_hashing/app/templates/homepageform.html.twig");
    }
}
