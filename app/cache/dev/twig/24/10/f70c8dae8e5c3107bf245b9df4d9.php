<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_2410f70c8dae8e5c3107bf245b9df4d9 extends Twig_Template
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
        // line 1
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  30 => 5,  26 => 3,  19 => 1,  291 => 148,  287 => 147,  283 => 146,  279 => 145,  275 => 144,  271 => 143,  267 => 142,  263 => 141,  259 => 140,  255 => 139,  251 => 138,  247 => 137,  243 => 136,  238 => 133,  235 => 132,  230 => 118,  218 => 45,  194 => 9,  191 => 8,  188 => 7,  182 => 6,  174 => 153,  170 => 151,  168 => 132,  153 => 119,  151 => 118,  97 => 69,  91 => 67,  83 => 65,  81 => 64,  65 => 45,  57 => 42,  37 => 29,  24 => 2,  101 => 71,  98 => 29,  92 => 31,  90 => 29,  86 => 27,  77 => 24,  68 => 22,  64 => 20,  56 => 18,  50 => 15,  41 => 13,  35 => 7,  32 => 6,  29 => 7,  72 => 23,  67 => 52,  60 => 14,  55 => 12,  51 => 11,  46 => 14,  42 => 12,  39 => 12,  33 => 5,  31 => 6,  28 => 3,);
    }
}
