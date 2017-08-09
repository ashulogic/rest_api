<?php
	
	$json_data_1 = file_get_contents("http://localhost/wordpress/wp-json/pages/");
	$obj_1 = json_decode($json_data_1,true);
	
	$json_post_1= file_get_contents("http://localhost/wordpress/wp-json/posts/");
	
	$post_1 = json_decode($json_post_1,true);
	
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>
<style>
	body{		
		background-color:black  ;
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
		color:white;
	}
	h1{
		
		color:white;		
	}
</style>
<label>
  <h1>Pages<span class="badge"></span></a><br></h1>
</label>
	
<div id="accordion" role="tablist" aria-multiselectable="true">
	<div class="card">
		<div class="card-header" role="tab" id="headingOne">
			<h5 class="mb-0">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Page 1
				</a>
			</h5>
		</div>
		<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
			<div class="card-block">
				<div class="space">
					<?php
						/* echo $obj_1[0]->['content']; */
						 echo $obj_1[0]['content'];		
			/*   print $obj_1[0]->{'content'}; */ ?> 
				</div>
			</div>	
		</div>
	</div>
   
    <div class="card">
		<div class="card-header" role="tab" id="headingTwo">
			<h5 class="mb-0">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				Page 2
				</a>
			</h5>
		</div>
		<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
			<div class="card-block">
				<div class="space">
					<?php
						 echo $obj_1[1]['content'];	;?>
				</div>
			</div>
		</div>
	</div>  
  
    <div class="card">
		<div class="card-header" role="tab" id="headingThree">
			<h5 class="mb-0">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				page 3
				</a>
			</h5>
		</div>
		<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
			<div class="card-block">
				<div class="space">
					<?php
					 echo $obj_1[2]['content'];	?>
				 </div>
			</div>
		</div>
    </div>
  
    <div class="card">
		<div class="card-header" role="tab" id="headingFour">
			<h5 class="mb-0">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				Page 4
				</a>
			</h5>
		</div>
		<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
			<div class="card-block">
				<div class="space">
				<?php
						 echo $obj_1[3]['content'];	?>
				</div>
			</div>
		</div>
    </div>
  
    <div class="card">
		<div class="card-header" role="tab" id="headingFive">
			<h5 class="mb-0">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				Page 5
				</a>
			</h5>
		</div>			
		<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
			<div class="card-block">
				<div class="space">
					<?php
						 echo $obj_1[4]['content'];	?>
				</div>
			</div>
		</div>
    </div>
	<label>
			<h1>Posts<br></h1>
		</label>
	<div class="card">
		<div class="card-header" role="tab" id="headingSix">
			<h5 class="mb-0">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
				Post 1
				</a>
			</h5>
		</div>
		<div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
			<div class="card-block">
				<div class="center">
					<?php
						 echo $post_1[0]['content'];
						?>
				</div>
			</div>	
		</div>
	</div>
   
    <div class="card">
		<div class="card-header" role="tab" id="headingSeveen">
			<h5 class="mb-0">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeveen" aria-expanded="false" aria-controls="collapseSeveen">
				Post 2
				</a>
			</h5>
		</div>
		<div id="collapseSeveen" class="collapse" role="tabpanel" aria-labelledby="headingSeveen">
			<div class="card-block">
				<div class="center">
					<?php
						 echo $post_1[1]['content'];?>
				</div>
			</div>
        </div>
    </div>  
  
    <div class="card">
		<div class="card-header" role="tab" id="headingEight">
			<h5 class="mb-0">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
				Post 3
				</a>
			</h5>
		</div>
		<div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
			<div class="card-block">
				<div class="center">
					<?php
						 echo $post_1[2]['content'];?>
				</div>
			</div>
		</div>
    </div>
  
    <div class="card">
		<div class="card-header" role="tab" id="headingNine">
			<h5 class="mb-0">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
				Post 4
			</a>
			</h5>
		</div>
		<div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine">
			<div class="card-block">
				<div class="center">
					<?php
						 echo $post_1[3]['content'];?>
				</div>
            </div>
        </div>
    </div>

    <div class="card">
		<div class="card-header" role="tab" id="headingTen">
			<h5 class="mb-0">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
				Post 5
				</a>
			</h5>
		</div>
		<div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen">
			<div class="card-block">
				<div class="center">
					<?php
						 echo $post_1[4]['content'];?>
				</div>
			</div>
		</div>
	 </div>
	 
	  <div class="card">
		<div class="card-header" role="tab" id="headingEleven">
			<h5 class="mb-0">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
				Post 6
				</a>
			</h5>
		</div>
		<div id="collapseEleven" class="collapse" role="tabpanel" aria-labelledby="headingEleven">
			<div class="card-block">
				<div class="center">
					<?php
						 echo $post_1[5]['content'];?>
				</div>
			</div>
		</div>
	 </div> 
</div>		
</body>
