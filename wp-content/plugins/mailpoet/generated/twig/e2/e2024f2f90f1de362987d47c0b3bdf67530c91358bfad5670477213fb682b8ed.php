<?php

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* upgrade_tiers.html */
class __TwigTemplate_c260ca698e3584b2cbf2795424a7e23a50fca4519ec42363a4acb3eb996211e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'after_javascript' => [$this, 'block_after_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "upgrade_tiers.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<style>
  body { background: white; }
  #wpbody-content { padding-top: 64px; }
</style>
<div class=\"mailpoet-top-bar\">
  <a role=\"button\" class=\"mailpoet-top-bar-logo\" title=\"";
        // line 9
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscAttr("Back to section root", "mailpoet");
        echo "\" tabindex=\"0\" href=\"admin.php?page=mailpoet-homepage\">
    <div class=\"mailpoet-top-bar-logo-desktop\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 80 24\"><path fill=\"#FF5301\" d=\"M.781 17.716c.418-.332 1.014-.313 1.41.045.522.438 1.18.682 1.86.69h31.622c1.48 0 2.898.589 3.945 1.635l.165.165.165-.165c1.045-1.049 2.465-1.637 3.945-1.635h30.975c.681-.008 1.339-.252 1.86-.69.398-.351.99-.37 1.41-.045l.36.285c.248.206.404.503.434.825.01.323-.122.636-.36.855-1.016.908-2.328 1.415-3.69 1.425H43.875c-1.323-.001-2.484.883-2.835 2.16v.03c-.015.105-.165.66-1.275.66-1.11 0-1.26-.555-1.275-.66v-.03c-.35-1.277-1.511-2.161-2.835-2.16H4.051c-1.362-.01-2.674-.517-3.69-1.425-.243-.216-.376-.53-.36-.855.014-.324.168-.625.422-.825zm52.335-14.07c.708-.006 1.41.121 2.07.375.597.23 1.139.582 1.59 1.035.46.463.813 1.02 1.035 1.635.247.677.37 1.394.36 2.115.01.735-.111 1.467-.36 2.16-.221.622-.574 1.19-1.035 1.665-.46.457-1.005.819-1.605 1.065-.66.252-1.362.379-2.07.375-.721.005-1.438-.122-2.113-.375-.604-.239-1.15-.602-1.605-1.065-.438-.476-.788-1.024-1.037-1.62-.234-.691-.35-1.416-.345-2.145-.005-.732.122-1.459.375-2.145.227-.62.585-1.183 1.05-1.65.462-.458 1.014-.816 1.62-1.05.66-.26 1.362-.387 2.07-.375zM71.373.96c.345 0 .615.09.765.27.128.154.205.342.222.54l.003.12v2.04h1.41c.257-.026.504.104.63.33.11.218.167.46.165.705 0 .857-.383 1.082-.74 1.107l-.07.003h-1.395v4.86c0 .255.045.435.135.525.108.102.256.152.405.135.118.006.236-.015.345-.06l.155-.065.16-.055.285-.135c.121-.06.255-.091.39-.09.327-.022.637.148.795.435.15.26.227.555.225.855.007.2-.029.4-.105.585-.084.189-.226.347-.405.45-.24.147-.5.262-.77.339l-.205.05-.273.059c-.364.068-.736.1-1.107.092-.842 0-1.547-.225-2.057-.69-.467-.427-.72-1.067-.76-1.91l-.005-.235V2.28c-.005-.224.058-.443.18-.63.12-.165.274-.303.45-.405.18-.095.373-.166.572-.21.197-.047.398-.072.6-.075zm-7.305 2.655c1.38 0 2.505.435 3.315 1.29s1.23 2.1 1.23 3.69c0 .39-.12.675-.375.84-.253.137-.533.214-.818.226l-.172-.001h-5.265c.165 1.38.93 2.055 2.355 2.055.329.01.657-.052.96-.18.27-.135.525-.24.705-.345.18-.105.345-.195.51-.3.197-.111.42-.168.645-.165.285 0 .54.15.78.42.22.254.342.578.345.915.003.239-.076.472-.225.66-.19.223-.419.411-.675.555-.45.274-.941.471-1.455.585-.54.13-1.094.196-1.65.195-.721.006-1.44-.095-2.13-.3-.608-.19-1.167-.513-1.635-.945-.452-.458-.814-.998-1.065-1.59-.255-.728-.377-1.495-.36-2.265-.004-.666.092-1.328.285-1.965.184-.624.49-1.206.9-1.71.424-.511.957-.921 1.56-1.2.698-.327 1.464-.486 2.235-.465zm-40.11.015c1.455 0 2.52.285 3.165.87.599.543.926 1.358.97 2.444l.005.256v5.55c0 .39-.105.69-.315.87-.21.18-.54.27-1.005.27-.339.015-.674-.074-.96-.255-.223-.158-.343-.407-.37-.739l-.005-.146v-.015c-.075.09-.165.18-.255.27-.19.191-.407.353-.645.48-.275.15-.567.265-.87.345-.378.094-.766.14-1.155.135-1.005 0-1.817-.27-2.402-.78-.585-.54-.885-1.26-.885-2.145-.012-.455.08-.907.27-1.32.171-.354.417-.666.72-.915.315-.262.676-.46 1.065-.585.412-.137.833-.242 1.26-.315.48-.09.975-.165 1.44-.21.31-.03.627-.06.955-.086l.5-.034v-.24c-.001-.178-.027-.354-.075-.525-.044-.164-.12-.317-.225-.45-.118-.145-.274-.254-.45-.315-.235-.085-.484-.126-.735-.12-.175-.006-.35.004-.525.03-.158.024-.314.064-.465.12-.159.065-.314.14-.465.225-.195.105-.385.22-.568.345-.165.105-.315.21-.465.285-.184.081-.384.122-.585.12-.318 0-.621-.13-.84-.36-.246-.222-.383-.54-.375-.87.009-.275.11-.539.285-.75.222-.29.503-.53.825-.705.419-.235.868-.412 1.335-.525.604-.147 1.223-.218 1.845-.21zM5.968.509l.2.002c.57 0 1.005.105 1.32.33.272.198.484.465.616.773l.059.157 3.075 8.805L14.19 1.83c.117-.425.39-.79.765-1.02.437-.218.923-.32 1.41-.3.54 0 .975.105 1.29.315.292.195.472.514.495.86V12.75c.004.297-.103.586-.3.81-.195.225-.555.345-1.08.345-.48 0-.825-.12-1.035-.33-.189-.216-.299-.489-.315-.773V5.281l-2.715 7.5c-.09.316-.3.585-.585.75-.273.14-.577.213-.885.21-.48 0-.84-.105-1.08-.3-.21-.181-.378-.405-.493-.656l-.062-.154-2.548-6.765v6.855c.004.297-.103.586-.3.81-.195.225-.555.345-1.08.345-.495 0-.84-.105-1.065-.315-.167-.18-.268-.427-.294-.758l-.006-.172V1.906c0-.495.18-.855.525-1.08.29-.164.61-.266.938-.303L5.969.51zM43.084.57c1.665 0 2.895.375 3.66 1.11.765.735 1.155 1.785 1.155 3.135 0 .481-.065.96-.195 1.425-.145.502-.396.967-.735 1.365-.4.45-.898.804-1.455 1.035-.547.24-1.224.373-2.031.4l-.31.005h-2.1v3.645c.008.297-.087.589-.27.825-.194.24-.554.36-1.094.36-1.123 0-1.41-.593-1.438-1.14l-.002-.09V1.56c-.016-.284.107-.558.33-.735.194-.146.425-.233.665-.252l.145-.003h3.675zm-7.89-.136c.327-.002.65.086.93.256.26.167.422.45.436.754l-.001.116v11.145c0 .42-.135.72-.39.9-.299.193-.65.287-1.005.27-1.123 0-1.41-.552-1.425-1.057V1.636c0-.555.255-1.2 1.455-1.2zm-3.255 3.646c.223.194.36.467.386.759l.004.126v7.725c0 .42-.135.72-.39.9-.299.193-.65.287-1.005.27-1.123 0-1.41-.552-1.438-1.044l-.002-.081v-7.8c.018-.295.139-.578.345-.795.24-.225.615-.345 1.11-.345.353-.023.703.078.99.285zm-6.525 5.28c-.42.045-.825.09-1.215.15-.42.06-.735.12-.945.165-.57.12-.93.285-1.095.495-.16.17-.247.396-.24.63-.018.247.075.489.255.66.18.165.495.24.945.24.735 0 1.305-.18 1.71-.51.34-.277.548-.68.58-1.112l.005-.163V9.36zm27.705-3.345c-.69 0-1.23.24-1.62.735-.405.495-.6 1.185-.6 2.085 0 .9.21 1.605.6 2.085.397.48.997.746 1.62.72.72 0 1.245-.24 1.65-.72.405-.48.6-1.2.6-2.085s-.195-1.59-.585-2.085c-.39-.495-.945-.735-1.665-.735zm10.935-.165c-.48-.01-.947.15-1.32.45-.302.272-.507.633-.588 1.028l-.027.172h3.72c-.013-.174-.049-.346-.105-.51-.078-.207-.19-.4-.33-.57-.142-.183-.328-.328-.54-.42-.258-.102-.533-.153-.81-.15zM42.858 2.956h-1.785V6.69h1.785c.35.005.7-.046 1.035-.15.241-.073.462-.201.645-.375.156-.162.274-.357.345-.57.073-.238.109-.486.105-.735.004-.245-.032-.488-.105-.72-.07-.223-.188-.428-.345-.6-.18-.189-.4-.333-.645-.42-.332-.118-.683-.174-1.035-.165zM30.933 0c.385 0 .759.126 1.065.36.345.255.51.63.51 1.14.016.41-.142.807-.435 1.095-.314.276-.722.42-1.14.405-.418.018-.827-.127-1.14-.405-.296-.292-.454-.696-.435-1.11-.006-.35.113-.688.334-.956l.1-.11.122-.099c.293-.216.652-.33 1.019-.32z\"></path></svg>
    </div>
    <div class=\"mailpoet-top-bar-logo-mobile\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 39 40\"><path fill=\"#FF5301\" d=\"M34.987 29.367c.673-.59 1.67-.623 2.38-.076l.608.481c.441.345.717.86.76 1.418.016.546-.206 1.073-.608 1.443-1.714 1.534-3.929 2.389-6.228 2.405H26.43c-2.234-.001-4.193 1.491-4.784 3.646v.05c-.026.177-.304 1.114-2.152 1.114s-2.127-.937-2.152-1.114v-.05c-.592-2.155-2.551-3.647-4.785-3.646H7.089c-2.3-.016-4.515-.871-6.228-2.405-.411-.364-.635-.895-.608-1.443.023-.545.282-1.053.709-1.393l.608-.48c.705-.56 1.711-.528 2.38.075.88.74 1.989 1.152 3.139 1.165h5.443c2.497.002 4.891.994 6.658 2.76l.278.278.279-.304c1.764-1.769 4.16-2.762 6.658-2.76h5.418c1.158-.007 2.277-.42 3.164-1.164zM10.4.25l.262.004c.962 0 1.696.177 2.228.557.536.39.934.94 1.139 1.57l5.19 14.86L24.18 2.482c.197-.716.659-1.331 1.29-1.722.739-.366 1.557-.54 2.38-.506.912 0 1.646.177 2.178.532.553.371.87 1.006.835 1.67v18.456c.007.503-.173.99-.506 1.367-.33.38-.937.583-1.823.583-.81 0-1.392-.203-1.747-.557-.372-.426-.563-.98-.531-1.545V8.304l-4.583 12.658c-.15.535-.505.989-.987 1.266-.461.238-.974.36-1.494.354-.81 0-1.417-.177-1.822-.506-.427-.366-.75-.837-.937-1.367L12.129 9.29v11.57c.007.503-.174.99-.506 1.367-.33.38-.937.582-1.823.582-.835 0-1.392-.177-1.772-.532-.33-.354-.506-.86-.506-1.57v-18.1c0-.836.303-1.443.886-1.823.686-.386 1.467-.57 2.253-.532z\"></path></svg>
    </div>
  </a>
</div>
<div class=\"mailpoet-tiers-page\">
  <div class=\"mailpoet-tiers-page-hero-section narrow\">
    <h1 class=\"mailpoet-tiers-page-hero-section__title\">
      ";
        // line 21
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Find the plan that fits your flock");
        echo "
    </h1>
    <p>
      ";
        // line 24
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Whether you’re just starting out, or already have an established list of loyal subscribers, our plans are flexible enough for every flock.");
        echo "
    </p>
  </div>
  <div class=\"mp-toggle pricing-period-toggle mailpoet-tiers-page-billing-toggle\">
    <input id=\"pricing_duration\" type=\"checkbox\">
    <label for=\"pricing_duration\" data-automation-id=\"pricing_duration\">
      <div class=\"mp-toggle__switch\" data-unchecked=\"";
        // line 30
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscAttr("Pay monthly");
        echo "\" data-checked=\"";
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscAttr("Pay yearly");
        echo "\"></div>
    </label>
    <div class=\"mailpoet-tiers-page-pricing-period-description\">";
        // line 32
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Save up to 15% on yearly plans");
        echo "</div>
    <div class=\"mailpoet-tiers-page-pricing-period-description-selected\">";
        // line 33
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("You are saving up to 15%!");
        echo "</div>
  </div>
  <figure class=\"mailpoet-tiers-page-content\">
    <div class=\"mailpoet-tiers-page-content__pricing\">
      <div class=\"mailpoet-tiers-page-content__tier\">
        <div class=\"mailpoet-tiers-page-tier-header\">
          <div class=\"mailpoet-tiers-page-tier-header__title\">
            <div class=\"mailpoet-tiers-page-tier-header__icon free\"></div>
            <h2 class=\"mailpoet-tiers-page-tier-header-label\">
              ";
        // line 42
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Free");
        echo "
            </h2>
          </div>
          <p>";
        // line 45
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Essential email marketing tools for small businesses.");
        echo "</p>
        </div>
        <div class=\"mailpoet-tiers-page-tier-price\">
          <p>&nbsp;</p>
          <h3 class=\"mailpoet-premium-page-tier-price-info\">
            <span class=\"pricing-value\">";
        // line 50
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Free");
        echo "</span>
          </h3>
          <p>";
        // line 52
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Up to 500 subscribers");
        echo "</p>
        </div>
        ";
        // line 54
        echo \MailPoetVendor\twig_include($this->env, $context, "upgrade/upgrade_button.html", ["label" => $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Get Free"), "button_class" => "is-secondary", "tier" => 0, "group" => "free"]);
        echo "
        <ul class=\"free\">
          <li>";
        // line 56
        echo $this->extensions['MailPoet\Twig\Filters']->wpKses($this->extensions['MailPoet\Twig\I18n']->translate("<b>1,500</b> emails per month, <b>500</b> emails per day"), ["b" => []]);
        echo "</li>
          <li>
            <div class=\"tp-wrapper\">
              <div id=\"free-automations\" role=\"tooltip\">
                <p>";
        // line 60
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Automate communications with subscribers based on how and when they engage with your brand.");
        echo "</p>
                <p>";
        // line 61
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Customize automations based on email engagement.");
        echo "</p>
              </div>
              <em aria-describedby=\"free-automations\" class=\"tp-trigger\" tabindex=\"0\">";
        // line 63
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Basic email automations");
        echo "</em>
            </div>
          </li>
          <li>
            <div class=\"tp-wrapper\">
              <div id=\"free-email\" role=\"tooltip\">
                ";
        // line 69
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Send bulk promotional and informational newsletters and new post notifications to your subscribers.");
        echo "
              </div>
              <em aria-describedby=\"free-email\" class=\"tp-trigger\" tabindex=\"0\">";
        // line 71
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Email and ecommerce marketing");
        echo "</em>
            </div>
          </li>
          <li>
            <div class=\"tp-wrapper\">
              <div id=\"free-widgets\" role=\"tooltip\">
                <p>";
        // line 77
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Leverage built-in or create custom subscription forms to grow your email list.");
        echo "</p>
                <p>";
        // line 78
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Includes popups, slide-ins, top/bottom bars and widgets.");
        echo "</p>
              </div>
              <em aria-describedby=\"free-widgets\" class=\"tp-trigger\" tabindex=\"0\">";
        // line 80
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Widget and popup subscription forms");
        echo "</em>
            </div>
          </li>
          <li>
            <div class=\"tp-wrapper\">
              <div id=\"free-segmentation\" role=\"tooltip\">
                <p>";
        // line 86
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Segment and email subscribers by custom field values, email, site, or shopping behavior.");
        echo "</p>
                <p>";
        // line 87
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Leverage pre-built segment templates or create your own simple segments.");
        echo "</p>
              </div>
              <em aria-describedby=\"free-segmentation\" class=\"tp-trigger\" tabindex=\"0\">";
        // line 89
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Basic subscriber segmentation");
        echo "</em>
            </div>
          </li>
          <li>
            <div class=\"tp-wrapper\">
              <div id=\"free-templates\" role=\"tooltip\">
                ";
        // line 95
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Leverage 70+ built-in email templates or create your own with an easy-to-use drag&drop editor.");
        echo "
              </div>
              <em aria-describedby=\"free-widgets\" class=\"tp-trigger\" tabindex=\"0\">";
        // line 97
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Customizable  email templates");
        echo "</em>
            </div>
          </li>
        </ul>
      </div>
      <div class=\"mailpoet-tiers-page-content__tier\">
        <div class=\"mailpoet-tiers-page-tier-header\">
          <div class=\"mailpoet-tiers-page-tier-header__title\">
            <div class=\"mailpoet-tiers-page-tier-header__icon basic\"></div>
            <h2 class=\"mailpoet-tiers-page-tier-header-label\">
              ";
        // line 107
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Basic");
        echo "
            </h2>
          </div>
          <p>";
        // line 110
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Fuel business growth with data-driven email marketing tools and insights.");
        echo "</p>
        </div>
        <div class=\"mailpoet-tiers-page-tier-price\">
          <p>";
        // line 113
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("From");
        echo "</p>
          <h3 id=\"mailpoet-basic-yearly-price\">
            <span class=\"pricing-discount\">
              <sup class=\"pricing-discount-currency\">\$</sup>
              <span class=\"pricing-discount-value\">11.00</span>
              &nbsp;
            </span>
            <sup class=\"pricing-currency\">\$</sup>
            <span class=\"pricing-value\">9.50</span>
            ";
        // line 122
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML(" / month");
        echo "
          </h3>
          <h3 id=\"mailpoet-basic-monthly-price\">
            <sup class=\"pricing-currency\">\$</sup>
            <span class=\"pricing-value\">11.00</span>
            ";
        // line 127
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML(" / month");
        echo "
          </h3>
          <p>";
        // line 129
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("for 500 subscribers");
        echo "</p>
        </div>
        ";
        // line 131
        echo \MailPoetVendor\twig_include($this->env, $context, "upgrade/upgrade_button.html", ["label" => $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Get Basic"), "button_class" => "is-secondary", "tier" => 1, "group" => "basic"]);
        echo "
        <div>
          <p>";
        // line 133
        echo $this->extensions['MailPoet\Twig\Filters']->wpKses($this->extensions['MailPoet\Twig\I18n']->translate("<b>All Free plan features</b>, plus:"), ["b" => []]);
        echo "</p>
          <ul>
            <li>";
        // line 135
        echo $this->extensions['MailPoet\Twig\Filters']->wpKses($this->extensions['MailPoet\Twig\I18n']->translate("<b>5,000</b> emails per month, <b>no daily limit</b>"), ["b" => []]);
        echo "</li>
            <li>
              <div class=\"tp-wrapper\">
                <div id=\"basic-automations\" role=\"tooltip\">
                  <p>";
        // line 139
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Automate communications with subscribers based on how and when they engage with your brand.");
        echo "</p>
                  <p>";
        // line 140
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Customize automations based on email engagement, site or shopping patterns.");
        echo "</p>
                </div>
                <em aria-describedby=\"basic-automations\" class=\"tp-trigger\" tabindex=\"0\">";
        // line 142
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Custom email automations");
        echo "</em>
              </div>
            </li>
            <li>
              <div class=\"tp-wrapper\">
                <div id=\"basic-stats\" role=\"tooltip\">
                  <p>";
        // line 148
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Understand how subscribers are engaging with your emails and automations, and how that translates to conversions.");
        echo "</p>
                  <p>";
        // line 149
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("See who engaged with emails and how it influenced their purchasing behaviors.");
        echo "</p>
                </div>
                <em aria-describedby=\"basic-stats\" class=\"tp-trigger\" tabindex=\"0\">";
        // line 151
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Detailed email and automation statistics");
        echo "</em>
              </div>
            </li>
            <li>";
        // line 154
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Google Analytics tracking");
        echo "</li>
            <li>";
        // line 155
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("No MailPoet logo in emails");
        echo "</li>
            <li>";
        // line 156
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("24/7 email support");
        echo "</li>
          </ul>
        </div>
      </div>
      <div class=\"mailpoet-tiers-page-content__tier popular\">
        <div class=\"mailpoet-tiers-page-label\">
          <div class=\"mailpoet-tiers-page-label__content\">
            ";
        // line 163
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Most popular");
        echo "
          </div>
        </div>
        <div class=\"mailpoet-tiers-page-tier-header\">
          <div class=\"mailpoet-tiers-page-tier-header__title\">
            <div class=\"mailpoet-tiers-page-tier-header__icon pro\"></div>
            <h2 class=\"mailpoet-tiers-page-tier-header-label\">
              ";
        // line 170
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Pro");
        echo "
            </h2>
          </div>
          <p>";
        // line 173
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Increase engagement (and conversions!) with personalized email campaigns.");
        echo "</p>
        </div>
        <div class=\"mailpoet-tiers-page-tier-price\">
          <p>";
        // line 176
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("From");
        echo "</p>
          <h3 id=\"mailpoet-pro-yearly-price\">
            <span class=\"pricing-discount\">
              <sup class=\"pricing-discount-currency\">\$</sup>
              <span class=\"pricing-discount-value\">13.00</span>
              &nbsp;
            </span>
            <sup class=\"pricing-currency\">\$</sup>
            <span class=\"pricing-value\">11.50</span>
            ";
        // line 185
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML(" / month");
        echo "
          </h3>
          <h3 id=\"mailpoet-pro-monthly-price\">
            <sup class=\"pricing-currency\">\$</sup>
            <span class=\"pricing-value\">13.00</span>
            ";
        // line 190
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML(" / month");
        echo "
          </h3>
          <p>";
        // line 192
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("for 500 subscribers");
        echo "</p>
        </div>
        ";
        // line 194
        echo \MailPoetVendor\twig_include($this->env, $context, "upgrade/upgrade_button.html", ["label" => $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Get Pro"), "button_class" => "is-primary", "tier" => 2, "group" => "pro"]);
        echo "
        <div>
          <p>";
        // line 196
        echo $this->extensions['MailPoet\Twig\Filters']->wpKses($this->extensions['MailPoet\Twig\I18n']->translate("<b>All Basic features</b>, plus:"), ["b" => []]);
        echo "</p>
          <ul class=\"business\">
            <li>";
        // line 198
        echo $this->extensions['MailPoet\Twig\Filters']->wpKses($this->extensions['MailPoet\Twig\I18n']->translate("<b>7,500</b> emails per month, <b>no daily limit</b>"), ["b" => []]);
        echo "</li>
            <li>
              <div class=\"tp-wrapper\">
                <div id=\"pro-automations\" role=\"tooltip\">
                  <p>";
        // line 202
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Automate communications with subscribers based on how and when they engage with your brand.");
        echo "</p>
                  <p>";
        // line 203
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Automate multi-day journeys and refine further actions with conditional if/else logic based on email and shopping behavior.");
        echo "</p>
                </div>
                <em aria-describedby=\"pro-automations\" class=\"tp-trigger\" tabindex=\"0\">";
        // line 205
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Email automation journeys with branching");
        echo "</em>
              </div>
            </li>
            <li>
              <div class=\"tp-wrapper\">
                <div id=\"pro-segmentation\" role=\"tooltip\">
                  <p>";
        // line 211
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Segment and email subscribers by custom field values, email, site or shopping behavior.");
        echo "</p>
                  <p>";
        // line 212
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Segment subscribers by multiple properties using AND/OR operators.");
        echo "</p>
                </div>
                <em aria-describedby=\"pro-segmentation\" class=\"tp-trigger\" tabindex=\"0\">";
        // line 214
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Advanced subscriber segmentation");
        echo "</em>
              </div>
            </li>
            <li>";
        // line 217
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("24/7 email support");
        echo "</li>
          </ul>
        </div>
      </div>
    </div>
    <figcaption>
      <p>
        ";
        // line 224
        $context["allowedHtml"] = ["a" => ["href" => [], "target" => []]];
        // line 225
        echo "        ";
        echo $this->extensions['MailPoet\Twig\Filters']->wpKses(MailPoet\Util\Helpers::replaceLinkTags($this->extensions['MailPoet\Twig\I18n']->translate("Compare full plan features and view more pricing options on [link]MailPoet.com[/link]"), "https://www.mailpoet.com/", ["target" => "_blank"]),         // line 228
($context["allowedHtml"] ?? null));
        // line 229
        echo "
      </p>
    </figcaption>
  </figure>
  <div class=\"mailpoet-tiers-page-hero-section footer\">
    <div class=\"mailpoet-tiers-page-hero-section-questions\">
      <div class=\"mailpoet-tiers-page-hero-section-questions-content\">
        <h1 class=\"mailpoet-tiers-page-hero-section__title\">
          ";
        // line 237
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Have questions?");
        echo "
        </h1>
        <p>
          ";
        // line 240
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Visit our website to learn more about our plans.");
        echo "
          ";
        // line 241
        $context["allowedHtml"] = ["a" => ["href" => [], "target" => []]];
        // line 242
        echo "          ";
        echo $this->extensions['MailPoet\Twig\Filters']->wpKses(MailPoet\Util\Helpers::replaceLinkTags($this->extensions['MailPoet\Twig\I18n']->translate("And if you’re not sure which plan is the right one for you, our [link]Customer Support team[/link] are on hand to help you decide."), "https://www.mailpoet.com/support/sales-pre-sales-questions/?ref=plugin-upgrade-page", ["target" => "_blank"]),         // line 245
($context["allowedHtml"] ?? null));
        // line 246
        echo "
        </p>
      </div>
      <div class=\"mailpoet-tiers-page-hero-section-questions__actions\">
        <a target=\"_blank\" href=\"https://account.mailpoet.com/\" class=\"components-button is-secondary\">
          ";
        // line 251
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Compare plans");
        echo "
        </a>
        <a target=\"_blank\" href=\"https://kb.mailpoet.com/article/223-licenses-and-sales\" class=\"components-button is-link\">
          ";
        // line 254
        echo $this->extensions['MailPoet\Twig\I18n']->translateEscHTML("Read FAQ");
        echo "
        </a>
      </div>
    </div>
    <img src=\"";
        // line 258
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("premium/6-hero.png");
        echo "\" alt=\"\" />
  </div>
</div>
";
    }

    // line 263
    public function block_after_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 264
        echo "<script type=\"text/javascript\">
  MailPoet.trackEvent('2024-04 upgrade page viewed');

  jQuery(function(\$) {
    \$('#pricing_duration').on('change', function() {
      const billingValue = \$(this).prop('checked') ? 'annual' : 'monthly';

      \$('.mailpoet-tiers-page a.mailpoet-premium-shop-link').each(function() {
        let href = \$(this).attr('href');
        if (href) {
          let newHref = href.replace(/([?&]billing=)[^&]*/, '\$1' + billingValue);
          \$(this).attr('href', newHref);
        }
      });
    });

    \$('.mailpoet-tiers-page a.mailpoet-premium-shop-link').on('click', function() {
      MailPoet.trackEvent('2024-04 upgrade page CTA clicked');
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "upgrade_tiers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 264,  515 => 263,  507 => 258,  500 => 254,  494 => 251,  487 => 246,  485 => 245,  483 => 242,  481 => 241,  477 => 240,  471 => 237,  461 => 229,  459 => 228,  457 => 225,  455 => 224,  445 => 217,  439 => 214,  434 => 212,  430 => 211,  421 => 205,  416 => 203,  412 => 202,  405 => 198,  400 => 196,  395 => 194,  390 => 192,  385 => 190,  377 => 185,  365 => 176,  359 => 173,  353 => 170,  343 => 163,  333 => 156,  329 => 155,  325 => 154,  319 => 151,  314 => 149,  310 => 148,  301 => 142,  296 => 140,  292 => 139,  285 => 135,  280 => 133,  275 => 131,  270 => 129,  265 => 127,  257 => 122,  245 => 113,  239 => 110,  233 => 107,  220 => 97,  215 => 95,  206 => 89,  201 => 87,  197 => 86,  188 => 80,  183 => 78,  179 => 77,  170 => 71,  165 => 69,  156 => 63,  151 => 61,  147 => 60,  140 => 56,  135 => 54,  130 => 52,  125 => 50,  117 => 45,  111 => 42,  99 => 33,  95 => 32,  88 => 30,  79 => 24,  73 => 21,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "upgrade_tiers.html", "/home/circleci/mailpoet/mailpoet/views/upgrade_tiers.html");
    }
}
