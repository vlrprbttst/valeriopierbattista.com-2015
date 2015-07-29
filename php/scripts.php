<script charset="utf-8">
	var cb = function() {
		var l = document.createElement('link');
		l.rel = 'stylesheet';
		l.href = 'http://valeriopierbattista.com/css/main.css';
		var h = document.getElementsByTagName('head')[0].lastChild;
		h.parentNode.insertBefore(l, h);
	};
	var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
	if (raf)
		raf(cb);
	else
		window.addEventListener('load', cb);
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42737159-1', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');
</script>

<script src="js/build/production.min.js"></script>