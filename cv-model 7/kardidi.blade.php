<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 
<title>{{ $nom_prenom }}</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- ICON  font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="Images/favicon.png">
 
<!-- Meta -->
<meta name="keywords" content="web,developer,designer,resume" />
<meta name="author" content="tmoc212">
 
<!-- CSS Stylesheet -->


<link  rel="stylesheet" type="text/css" href="{{asset('css/style_cv_kardidi.css') }} "  />




<!--  bootstrap js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- bootstrap css -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 

 <style type="text/css">
 	
@media only screen and (max-width: 768px){
    body{

     transform: scale(0.3499999); 
     
    }
   
  .col-sm-1 {width: 8.33%;}
.col-sm-2 {width: 16.66%;}
.col-sm-3 {width: 25%;}
.col-sm-4 {width: 33.33%;}
.col-sm-5 {width: 41.66%;}
.col-sm-6 {width: 50%;}
.col-sm-7 {width: 58.33%;}
.col-sm-8 {width: 66.66%;}
.col-sm-9 {width: 75%;}
.col-sm-10 {width: 83.33%;}
.col-sm-11 {width: 91.66%;}
.col-sm-12 {width: 100%;}

 .globalcontainer{
	margin-left: -345px;
	left: 0;
	position: absolute; 
	

}
}
@media only screen and (max-width: 375px) and (min-height: 812px){
    body{

     transform: scale(0.29999); 
     
    }
   
  .col-sm-1 {width: 8.33%;}
.col-sm-2 {width: 16.66%;}
.col-sm-3 {width: 25%;}
.col-sm-4 {width: 33.33%;}
.col-sm-5 {width: 41.66%;}
.col-sm-6 {width: 50%;}
.col-sm-7 {width: 58.33%;}
.col-sm-8 {width: 66.66%;}
.col-sm-9 {width: 75%;}
.col-sm-10 {width: 83.33%;}
.col-sm-11 {width: 91.66%;}
.col-sm-12 {width: 100%;}

 .globalcontainer{
	margin-left: -355px;
	position: absolute; 
	margin-top: 70%;
  	left: 0;

}
}

@media only screen and (max-width: 800px) and (min-width: 768px){
    body{

     transform: scale(0.70); 
     
    }
   
  .col-sm-1 {width: 8.33%;}
.col-sm-2 {width: 16.66%;}
.col-sm-3 {width: 25%;}
.col-sm-4 {width: 33.33%;}
.col-sm-5 {width: 41.66%;}
.col-sm-6 {width: 50%;}
.col-sm-7 {width: 58.33%;}
.col-sm-8 {width: 66.66%;}
.col-sm-9 {width: 75%;}
.col-sm-10 {width: 83.33%;}
.col-sm-11 {width: 91.66%;}
.col-sm-12 {width: 100%;}

 .globalcontainer{
	margin-left: -150px;
	position: absolute; 
	
  	left: 0;

}
}
@media only screen and (width: 760px) and (height: 1024px){
    body{

     transform: scale(0.65); 
     
    }
   
  .col-sm-1 {width: 8.33%;}
.col-sm-2 {width: 16.66%;}
.col-sm-3 {width: 25%;}
.col-sm-4 {width: 33.33%;}
.col-sm-5 {width: 41.66%;}
.col-sm-6 {width: 50%;}
.col-sm-7 {width: 58.33%;}
.col-sm-8 {width: 66.66%;}
.col-sm-9 {width: 75%;}
.col-sm-10 {width: 83.33%;}
.col-sm-11 {width: 91.66%;}
.col-sm-12 {width: 100%;}

 .globalcontainer{
	margin-left: -355px;
	position: absolute; 
	
  	left: 0;

}
}


 </style>



</head>
<body style="background-color: #fff;">
<div class="globalcontainer " valign="center" >
 	<div class="row">
 		<div class="col-sm-3 sidecontainer">
 			<div class="fullname">
 				<div class="lastname">
 					{{ $nom_prenom }}
 				</div>
 				<div class="firstname" style="font-size: 25px; margin-bottom: 20px;">
 					{{$poste_chercher}}
 				</div>
 			</div>
 			<div class="row">
 				<div class="col-sm-12">
 					@if($image_tmp != NULL)
			<img src=" {{ asset('uploads/images/'.$image_data[0]['image_view'])  }} " alt="{{ $nom_prenom }}" width="320" height="300" alt="Photo" />
			@endif
 				</div>
 			</div>
 			
 			<div class="clear">&nbsp;</div>
 			<section class="summary sidetitles">

			<h4 class="titles"> <b>PROFILE</b></h4>
			<hr style="border: 2px solid #ECD9C1;">
			{!! $editor_profil_info !!}
			
			</section>
			<div class="clear">&nbsp;</div>
 			<section id="contact ">	
 	 			<h4 class="titles"><b>CONTACT</b></h4>
 	 			<hr style="border: 2px solid #ECD9C1;">
			<p class="address sidetitles "><i class="fa fa-map-marker icon" style="padding: 13px;padding-top: 10px;padding-bottom: 10px;"></i> {{ $adresse[0] }}, {{ $adresse[1] }}</p>

			 
			<p class="phone sidetitles "><i class="fa fa-id-badge icon" style="padding: 13px;padding-top: 10px;padding-bottom: 10px;"></i> {{ $num_telephone }}</p>
			
	<p class="sidetitles"><i class="fa fa-envelope icon" style="padding: 12px;padding-top: 10px;padding-bottom: 10px;"></i><a href="#" class="email"> 	{{ $email }}</a></p>
			

			</section>

			<div class="clear">&nbsp;</div>
 			<section id="loisirs">	
 	 			<h4 class="titles"><b>LOISIRS</b></h4>
 	 			<hr style="border: 2px solid #ECD9C1;">
			<ul>
				    @foreach($centre_interet as $ci) 
						<li>{{ $ci }}  </li>
						<br>
                    @endforeach
				
			</ul>
			

			</section>

			<div class="clear">&nbsp;</div>

			<!-- Langues -->
			<section class="summary">
			<h4 class="titles"><b> LANGUES MAITRISEES</b></h4>
			<hr style="border: 2px solid #ECD9C1;">


			<div class="row text-center">
				   @foreach($les_langues as $lan) 
				<div class="col-sm-4">
					<h4><i class="fa fa-window-minimize" style="color: #ca3f3f;"></i> {{ $lan['les_langue'] }} </h4>
				</div>
                    @endforeach  

			</div>


			</section>
			<!-- /Langues -->
 			

 		</div>
 		<div class="col-sm-1"></div>
 		<div class="col-sm-7">
 			<!-- FORMATIONS -->
 			<div class="clear">&nbsp;</div>
<section class="summary">
<h4 class="titles"><i class="fa fa-mortar-board icon" style="padding: 17px;color: #fff;"></i>  <b>FORMATION</b></h4>
<hr style="border: 2px solid #334750;">

		 @foreach($v_formation as $format) 
				<div class="row">
			
			<div class="col-sm-12" >
				<div class="top titles"><b>{{$format['formation'] }}: </b><b >{{$format['b_date_formation'] }} - @if($format['e_date_formation'] != '' ) {{ $format['e_date_formation'] }} @else {{ "Aujourd'hui" }}  @endif</b></div>
				<div style="color: #777;">{{$format['nom_instittution'] }} </div>
				<br>
				{!! $format['editor_formation']  !!}
				
			</div>
			
		</div>
			@endforeach



</section>
<!-- /FORMATIONS -->
<div class="clear">&nbsp;</div>
<!-- EXPERIENCE PRO -->
<section class="summary">
<h4 class="titles"><i class="fa fa-suitcase icon" style="padding: 20px;padding-top: 17px;padding-bottom: 17px;color: #fff;"></i>  <b>EXPERIENCE PROFESSIONNELLE</b></h4>
<hr style="border: 2px solid #334750;">


		@foreach($experiencepro as $exppro) 
				<div class="row">
	
	<div class="col-sm-12" >
		<div class="top titles" ><b>{{$exppro['titre_poste'] }} : </b><b >{{$exppro['b_date'] }} - @if($exppro['e_date'] != '' )  {{$exppro['e_date'] }} @else {{ "Aujourd'hui" }}  @endif</b></div>
		<div style="color: #777;">{{$exppro['nom_entreprise'] }}</div>
		<br>
		{!! $exppro['editor_exp_pro']  !!}
	</div>
</div>
                    @endforeach








</section>
<!-- /EXPERIENCE PRO -->
<div class="clear">&nbsp;</div>



			 <!-- Begin Skills Section -->
			<section id="skills">
				<h4 class="titles"><i class="fa fa-cogs icon" style="padding: 20px;padding-top: 17px;padding-bottom: 17px;color: #fff;"></i><b><b> OUTILS INFORMATIQUES</b></h4>
				
				<hr style="border: 2px solid #334750;">
			<div class="row competences">
							
			   <div class="col-sm-11">
			   	@foreach($outils_info as $outils) 
						<div class="row">
			   		<div class="col-sm-10">
			   			<p class="sidetitles">{{ $outils['outil_informatique'] }}</p>
			   		</div>
			   		<div class="col-sm-2">
			   			<!-- {{ $outils['name_niveau_informatique'] }} -->
			   		</div>
			   	</div>
			   	
			   	<ul class="barres">
					@if($outils['name_niveau_informatique'] == 'Débutant')
					<li data-skills="25"><span style="width: 25%;"></span></li>
					@elseif($outils['name_niveau_informatique'] == 'Intermédiaire'  )
                      <li data-skills="50"><span style="width: 50%;"></span></li>
					@elseif($outils['name_niveau_informatique'] == 'Expert'  )
                     <li data-skills="100"><span style="width: 100%;"></span></li>
					@endif
				</ul>
				<br>
                    @endforeach
			   	
				
				
				
			   </div>
 	 		</div>
 	 		
				</section>
		
 
		<!-- End Skills Section -->
<div class="clear">&nbsp;</div>
		<!-- BEGIN REFERENCES SECTION -->
	
 			<section id="References">	
 	 			<h4 class="titles"><i class="fa fa-link icon" style="padding: 20px;padding-top: 17px;padding-bottom: 17px;color: #fff;"></i><b> REFERENCES</b></h4>
 	 			<hr style="border: 2px solid #334750;">
 
 	 			<div class="row">
 	 				<div class="col-sm-6">
 	 					<ul>
							<li>
								<div>
									<div>
										{{ $nom_prenom_ref[0] }}
									</div>
									<div>
										{{ $nom_entreprise_ref[0] }}
									</div>
									<div>
										{{ $position_ref[0] }}
									</div>
									<div>
										<b>T :</b> {{ $tel_ref[0] }}
									</div>
									<div>
										<b>E :</b> {{ $email_ref[0] }}
									</div>
								</div>
							</li>
							<br>
							
							
						</ul>
 	 				</div>

 	 				
 	 			</div>
			
			

			</section>

<!-- END REFERENCES SECTION -->

<div class="clear">&nbsp;</div>

 		</div>
 	</div>




 </div>
<script type="text/javascript">
	setTimeout(function(e){
      window.print();
	}, 2000);
 
</script>
</body>
</html>