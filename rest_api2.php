<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<style>
			body{		
				background-color:white  ;
				border-style: solid;
				padding-top:100px;
				padding-bottom:100px;
				padding-right:100px;
				padding-left:100px;
			}
		
			.space{	
				padding-top:100px;
				padding-bottom:100px;
				padding-right:100px;
				padding-left:100px;
			}
			
			.center
			{
				text-align:center;
				color:black;
			}
		
		</style>		
    </head>
	<body>
		<?php
			$pages = json_decode(file_get_contents("http://localhost/wordpress/wp-json/pages/"));
			$posts = json_decode(file_get_contents("http://localhost/wordpress/wp-json/posts/"));
		?>
		<label>
			<h1>Pages <span class="badge"><?php echo sizeof($pages); ?></span></h1>
		</label>
			<div class="accordion" role="tablist">
				<?php 
					for($i = 0; $i < sizeof($pages); $i++){
				?>
				<div class="card">
					<div class="card-header" role="tab" id="heading-pages-<?php echo $i; ?>">
						<h5 class="mb-0">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse-pages-<?php echo $i; ?>">
								Page <?php echo ($i + 1).": ".$pages[$i]->title; ?>
							</a>
						</h5>
					</div>
					<div id="collapse-pages-<?php echo $i; ?>" class="collapse" role="tabpanel" >
						<div class="card-block">
							<?php echo $pages[$i]->content;?>
						</div>	
					</div>
				</div>				
				<?php
					}
				?>
		<label>
			<h1>Posts <span class="badge"><?php echo sizeof($posts); ?></span></h1>
		</label>
			
			<?php 
				for($i = 0; $i < sizeof($posts); $i++){
			?>
			<div class="card">
				<div class="card-header" role="tab" id="heading-posts-<?php echo $i; ?>">
					<h5 class="mb-0">
						<a data-toggle="collapse" data-parent="#accordion " href="#collapse-posts-<?php echo $i; ?>">
							post <?php echo ($i+1).":".$posts[$i]->title; ?>
						</a>
					</h5>
				</div>
				<div id="collapse-posts-<?php echo $i; ?>" class="collapse" role="tabpane1">
					<div class="card-block">
						<?php echo $posts[$i]->content; ?>
					</div>	
				</div>
			</div>				
			<?php
				}
			?>		
		</div>			
	</body>
</html>
