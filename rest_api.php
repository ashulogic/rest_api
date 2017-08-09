<?php
	$json_data_1 = file_get_contents("http://localhost/wordpress/wp-json/pages/test1");
	$json_data_2 = file_get_contents("http://localhost/wordpress/wp-json/pages/test2");
	$json_data_3 = file_get_contents("http://localhost/wordpress/wp-json/pages/test3");
	$json_data_4= file_get_contents("http://localhost/wordpress/wp-json/pages/test4");
	$json_data_5= file_get_contents("http://localhost/wordpress/wp-json/pages/test5");
	$obj_1 = json_decode($json_data_1);
	$obj_2 = json_decode($json_data_2);
	$obj_3 = json_decode($json_data_3);
	$obj_4 = json_decode($json_data_4);
	$obj_5 = json_decode($json_data_5);
	$json_post_1= file_get_contents("http://localhost/wordpress/wp-json/posts/130");
	$json_post_2= file_get_contents("http://localhost/wordpress/wp-json/posts/132");
	$json_post_3= file_get_contents("http://localhost/wordpress/wp-json/posts/134");
	$json_post_4= file_get_contents("http://localhost/wordpress/wp-json/posts/138");
	$json_post_5= file_get_contents("http://localhost/wordpress/wp-json/posts/142");
	$json_post_6= file_get_contents("http://localhost/wordpress/wp-json/posts/145");
	$post_1 = json_decode($json_post_1);
	$post_2 = json_decode($json_post_2);
	$post_3 = json_decode($json_post_3);
	$post_4 = json_decode($json_post_4);
	$post_5 = json_decode($json_post_5);
	$post_6 = json_decode($json_post_6);
	
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
						print $obj_1->{'content'};?>
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
						print $obj_2->{'content'};?>
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
						print $obj_3->{'content'};?>
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
						print $obj_4->{'content'};?>
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
						print $obj_5->{'content'};?>
				</div>
			</div>
		</div>
    </div>
	<label>
			<h1>Posts<span class="badge">5</span></a><br></h1>
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
						print $post_1->{'content'};?>
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
						print $post_2->{'content'};?>
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
						print $post_3->{'content'};?>
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
						print $post_4->{'content'};?>
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
						print $post_5->{'content'};?>
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
						print $post_6->{'content'};?>
				</div>
			</div>
		</div>
	 </div>
	 
	 
	 
	 
	 
	 
	 
</div>		
</body>
