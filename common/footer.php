</div><!-- end content -->

<footer>

    <div id="footer-content" class="center-div bg-fixed">  
		<div id="sources">
			<section class="section ">
				<header><h2>Sources and Credits</h2></header>
				<p>Website narrative by Abigail Foerstner. Content for many historic episodes draws on her biography, James Van Allen: The First Eight Billion Miles (University of Iowa Press).
				</p>
			</section>
		</div>
		
		<img src="/vanallen/files/fullsize/93080b187c0b07df3ed12156fd70e5ad.jpg">
		<img src="">
			
    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
               Omeka.dropDown();
    });
</script>

</body>

</html>
