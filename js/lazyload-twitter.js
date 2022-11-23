//<![CDATA[
//lazy load twitter
let lazyloadtw = false;
window.addEventListener("scroll", function() {
  if ((document.documentElement.scrollTop != 0 && lazyloadtw === false) || (document.body.scrollTop != 0 && lazyloadtw === false)) {
    (function() {
      let tw = document.createElement('script');
      tw.type = 'text/javascript';
      tw.async = true;
      tw.src = 'https://platform.twitter.com/widgets.js';
      let sc = document.getElementsByTagName('script')[0];
      sc.parentNode.insertBefore(tw, sc);
    })();

    lazyloadtw = true;
  }
}, true)
//]]>