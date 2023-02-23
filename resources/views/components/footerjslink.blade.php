<script src="../vendor/jquery/dist/jquery.min.js"></script>
<script src="../vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../vendor/headroom.js/dist/headroom.min.js"></script>
<script src="../vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="../vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="../vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="../vendor/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="../vendor/jarallax/dist/jarallax.min.js"></script>
<script src="../vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="../vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="../vendor/prismjs/prism.js"></script>
<script async defer="defer" src="../../buttons.github.io/buttons.js"></script>
<script src="../assets/js/neumorphism.js"></script>
<script>
    $toggleTransitions = $("#toggleTransitions");
    $buttonOverlay = $(".btn-loading-overlay");

    $toggleTransitions.on("change", function() {
        if ($(this).is(":checked")) {
            $buttonOverlay.addClass("btn-loading");
            $buttonOverlay.attr("disabled", true);
        } else {
            $buttonOverlay.removeClass("btn-loading");
            $buttonOverlay.attr("disabled", false);
        }
    });
</script>
<script>
    (function() {
        var js =
            "window['__CF$cv$params']={r:'79d5430478eabb71',m:'L_0IkLp7NuWS5ORD8BeK31BqBdJhZTgrPQENyJo2rdY-1677043113-0-AS+4SOBwkdPSL96M5+yEnhQLJi70UYfm+6dcwMytDZdFT8p/WJ8GhX6qZSBuXpnbl+ZhuabgOX+XjJdhAhQqlVK5gjaaPmbYqthgfCg8lIB8DPFZ3OPdmWx6sIsk+ar/5Sx9yZWNt8PysxbErd74CSrxch/0S9BJxgcUYlHUzbAB',s:[0xd7b6e29783,0xe25547ac18],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible5615.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement("iframe");
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = "absolute";
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = "none";
        _0xh.style.visibility = "hidden";
        document.body.appendChild(_0xh);

        function handler() {
            var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
            if (_0xi) {
                var _0xj = _0xi.createElement("script");
                _0xj.nonce = "";
                _0xj.innerHTML = js;
                _0xi.getElementsByTagName("head")[0].appendChild(_0xj);
            }
        }
        if (document.readyState !== "loading") {
            handler();
        } else if (window.addEventListener) {
            document.addEventListener("DOMContentLoaded", handler);
        } else {
            var prev = document.onreadystatechange || function() {};
            document.onreadystatechange = function(e) {
                prev(e);
                if (document.readyState !== "loading") {
                    document.onreadystatechange = prev;
                    handler();
                }
            };
        }
    })();
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
    integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
    data-cf-beacon='{"rayId":"79d5430478eabb71","version":"2023.2.0","r":1,"token":"3a2c60bab7654724a0f7e5946db4ea5a","si":100}'
    crossorigin="anonymous"></script>
