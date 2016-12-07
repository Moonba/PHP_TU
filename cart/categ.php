<!DOCTYPE HTML>
<html lang="en-US">
<meta charset="UTF-8">
<head>
<script type="text/javascript">
 !function(t,e){if(void 0===e[t]){e[t]=function(){e[t].clients.push(this),this._init=[Array.prototype.slice.call(arguments)]},e[t].clients=[];for(var r=function(t){return function(){return this["_"+t]=this["_"+t]||[],this["_"+t].push(Array.prototype.slice.call(arguments)),this}},s=["addRecord","set","trackEvent","trackPageview","trackClicks","ready"],a=0;a<s.length;a++){var c=s[a];e[t].prototype[c]=r(c)}var n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.treasuredata.com/sdk/1.6.0/td.min.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(n,i)}}("Treasure",this);
</script>

<style>
body {
	background-image: url("../img_3393.jpg");
}
a {
   text-decoration: none;
   color: orange;
   font-weight: 4em;
   font-size: 3em;
   }
   a:hover {
   text-decoration: underline;
   font-weight: 6em;
   font-size: 4em;
   }
</style>
</head>

<body>

<h1>category x</h1>

<script type="text/javascript">
  // Configure an instance for your database
  var td = new Treasure({
    host: 'in.treasuredata.com',
    writeKey: '',
    database: ''
  });
  // Enable cross-domain tracking
  td.set('$global', 'td_global_id', 'td_global_id');

  // Enable click tracking
  //td.trackClicks()

  // Track pageview information to 'pageviews' table
  td.trackPageview('pageviewstest7'); //table_name = pageviews 
</script>

</body>

</html>