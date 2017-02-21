<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $ini['meta_desc']; ?>">
    <meta name="keywords" content="<?php echo $ini['meta_keywords']; ?>">
    <meta name="robots" content="index">
    <link rel="canonical" href="<?php echo $ini['base_url']; ?>">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="../../favicon.ico">
    <title><?php echo $ini['title']; ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="../../jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  		ga('create', '<?php echo $ini['ga_id']; ?>', 'auto');
  		ga('send', 'pageview');
	</script>

	<script>
    	$(document).ready(function() {
			var foundOne = false;
            images = ['https://pirateproxy.vip/', 'https://thepiratebay.org/', 'https://example.com/'];
			imageUrl = 'static/img/tpb.jpg';
			$.each(images, function( index, value ) {
                img = document.createElement('img');
                img.src = value+imageUrl;
                img.onload = function () {
					if (!foundOne) { 
						//alert('FOUND ONE! '+this.width + ' x ' + this.height + ' ' +this.src);
						foundOne = true;
						$('.pirate-url').html(value);
                        $("#pirate-button").attr('onclick', 'location.href="'+value+'"');
                        //Todo: Logga ner i db vilken url som funkar?
                        //Todo: Sätta en kaka?
					}
				};
			});

    	});

	</script>

	<div class="jumbotron">
    	<div class="container">
			<h1><?php echo $ini['title']; ?></h1>
			<?php echo file_get_contents('../content.html'); ?>
			<p class="pirate-url"><?php echo file_get_contents('../../pirateurl.txt'); ?></p>
			<p><?php echo $ini['update_text']; ?></p>
			<p><button id="pirate-button" type="button" onclick="location.href='<?php echo trim(file_get_contents('../../pirateurl.txt')); ?>'" class="btn btn-lg btn-success"><?php echo $ini['link_text']; ?></button></p>
  		</div>
	</div>
  </body>
</html>
