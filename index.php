<!DOCTYPE HTML>
<html lang="en-US">
  <head>
<!-- Treasure Data -->
<script type="text/javascript">
 !function(t,e){if(void 0===e[t]){e[t]=function(){e[t].clients.push(this),this._init=[Array.prototype.slice.call(arguments)]},e[t].clients=[];for(var r=function(t){return function(){return this["_"+t]=this["_"+t]||[],this["_"+t].push(Array.prototype.slice.call(arguments)),this}},s=["addRecord","set","trackEvent","trackPageview","trackClicks","ready"],a=0;a<s.length;a++){var c=s[a];e[t].prototype[c]=r(c)}var n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.treasuredata.com/sdk/1.6.0/td.min.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(n,i)}}("Treasure",this);
</script>
<meta charset="UTF-8">
<style>
body {
	background-image: url("img_3393.jpg");
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
    <a href="page1.php">Page 1</a>
    <a href="i/1234.php">Item</a>
    <a href="b/283.php">Brand</a>
    <a href="cart/categ.php">category x</a>
   
    <h1>Treasure Data Test </h1>
    <button id='click_me'>Click me</button>

<script type="text/javascript">
  // Configure an instance for your database
  var td = new Treasure({
    host: 'in.treasuredata.com',
    writeKey: 'paste here TD key',
    database: 'DB_name'
  });
  // Enable cross-domain tracking
  td.set('$global', 'td_global_id', 'td_global_id');

  // Enable click tracking
  //td.trackClicks()
  // Track pageview information to 'pageviews' table
  td.trackPageview('pageviewstest7'); //table_name = pageviews 
  // $('button').click(function() { td.trackEvent('click', {id: this.id})})

//   var buttonEvent1 = function () {
//   td.trackEvent('button', {
//     number: 1
//   });

//   // doButtonEvent(1);
// };
==
// var buttonEvent2 = function () {
//   td.trackEvent('button', {
//     number: 2
//   });

//   // doButtonEvent(2);
// };

</script>

</body>
</html>