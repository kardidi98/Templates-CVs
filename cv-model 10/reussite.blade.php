<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta charset="utf-8">
 
<title>Online Resume of Your Name</title>



<!-- Stylesheet -->
<script type="text/javascript" src="js/js.js"></script>

<link rel="stylesheet" media="screen and (min-width:481px)" href="css/cv.css">



  <!-- ICON  font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<!-- Meta -->
<meta name="description" content="A few lines about yourself">
<meta name="keywords" content="web,developer,designer,resume" />
<meta name="author" content="Your Name">
 


<!--  bootstrap js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




	  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 



 <style>
@media only screen and (max-width: 1300px){
.globalcontainer{
	 background-color: #E5E5E7;
	 vertical-align: center;
}

.avatar{
  margin-top: 50px;
  margin-left: 110px;
  border: 15px solid #181F32;
  margin-top: 30px;
  margin-bottom: 30px;
}

.infocontainer{
    border-left: 5px solid #949496;

}
.titles{
    
    color: #3E3E40;
    font-family: 'Arial';
    text-decoration: underline;


}


.titles b{
  font-style: italic;
}



.sidetitles{
    color: #EFFBF3;
    font-family: 'Arial';

}

.email:hover{
    color: #EFFBF3;;
}


    /************************************************
    /* Affichage des compétences sous forme de barres
    *************************************************/
    .competences .barres li {
        margin-bottom: 25px;
        position: relative;
        list-style: none;
        
    }
    
    .competences .barres li:after {
        background: #e1e1e1;
        bottom: -4px;
        content: ' ';
        display: block;
        height: 10px;
        position: absolute;
        border: 1px solid #e1e1e1;
       -moz-border-radius: 25px;
  -webkit-border-radius: 25px;
        width:100%;
    }
    
    .competences .barres li span {
        background: #1F2E35;
        bottom: -4px;
        content: ' ';
        display: block;
        height: 10px;
        left: 0;
        position: absolute;
        width: inherit;
        z-index: 1;
        border: 1px solid #1F2E35;
        -moz-border-radius: 25px;
  -webkit-border-radius: 25px;
    }




.icons{
  border-radius: 50%;
  color: rgba(72, 72, 75, 0.85);

}


.sousicons{
  background-color: #fff;
  border: 1px solid #fff;
  border-radius: 50%;
  color: #1F2E35;
  

}
.progress{
  max-width:1000px;
  margin: 40px auto;
}


/* STYLES FOR PROGRESSBARS */

.progress-radial, .progress-radial * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}

/* -------------------------------------
 * Bar container
 * ------------------------------------- */
.progress-radial {
  float: left;
  margin-right: 4%;
  position: relative;
  width: 20%;
  border-radius: 50%;
}
.progress-radial:first-child {
  margin-left: 4%;
}
/* -------------------------------------
 * Optional centered circle w/text
 * ------------------------------------- */
.progress-radial .overlay {
  position: absolute;
  width: 80%;
  background-color: #f0f0f0;
  border-radius: 50%;
  font-size: 14px;
    top:50%;
    left:50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.progress-radial .overlay p{
    position: absolute;
    line-height: 40px;
    text-align: center;
    width: 100%;
    top:50%;
    margin-top: -20px;
}



.center {
  margin: 0;
  position: absolute;
  left: 13%;

}

.pourcentages{
    font-family: 'Arial';
    text-decoration: underline;
}

.Loisirs{
    color: white;
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
}


	@media only screen and (max-width: 768px){
    body{

     transform: scale(0.38); 
     
    }


 .globalcontainer{
	margin-left: -300px;
/*	margin-top: 125px;*/
	left: 0;
	position: absolute; 
	

}
}
@media only screen and (max-width: 375px) and (min-height: 812px){
    body{

     transform: scale(0.38); 
     
    }
   


 .globalcontainer{
	margin-left: -300px;

	position: absolute; 
	/*margin-top: 70%;*/
  	left: 0;

}
}

@media only screen and (max-width: 800px) and (min-width: 768px){
    body{

     transform: scale(0.80); 
     
    }
   


 .globalcontainer{
	margin-left: -100px;
	position: absolute; 
	
  	left: 0;

}
}
@media only screen and (width: 768px) and (height: 1024px){
    body{

     transform: scale(0.80); 
     
    }
   


 .globalcontainer{
	margin-left: -100px;
	position: absolute; 
	
  	left: 0;

}
}


 </style>


</head>
<body >
 
<div class="globalcontainer center" valign="center" style="width: 1000px;">
	<header>
		<div class="row" >
			
			<div class="col-sm-3 ">
				@if($image_tmp != NULL)
			<img src=" {{ asset('uploads/images/'.$image_data[0]['image_view'])  }} " alt="{{ $nom_prenom }}" width="200" height="200" alt="Photo" />
			@endif
			</div>
 	 			<div class="col-sm-2"></div>
 	 			<div class="col-sm-7 infocontainer" style="padding-left: 80px;">
 	 				<div >
 	 					<br>
 	 				<h1><span class="titles">{{ $nom_prenom }}</span></h1>
 	 		<h6 class="titles"><b>{{$poste_chercher}}</b></h6>
 	 			</div>
 	 			<!-- PROFIL -->
					<section class="summary ">
					<em>
					{!! $editor_profil_info !!}</em>
					</section>

			<!-- /PROFIL -->
 	 			</div>
 	 		</div>
 	 		<hr style="height: 50px;background-color: #19212E;margin-top: 0px;">
	</header>
	<div class="row">
		<div class="col-sm-4" style="background-color:#000000;margin-top: -16px;margin-left: 15px;">
			
			<h4 class=" sidetitles infobasiques" style="margin-top: 80px;text-decoration: underline;"><em>INFORMATIONS BASIQUES</em></h4>
			<br>
		<div class="row">
			
			<div class="col-sm-12">
			<section id="contact" style="color: #E4E4E6;">	
 	 			
 	 		<div class="row">
 	 			<div class="col-sm-2">
 	 				<i class="fa fa-map-marker fa-2x icons"></i>
 	 			</div>
 	 			<div class="col-sm-10">
 	 				<p class="sidetitles">{{ $adresse[0] }}, {{ $adresse[1] }}</p>
 	 			</div>
 	 		</div>	

 	 		<div class="row">
 	 			<div class="col-sm-2">
 	 				<i class="fa fa-phone fa-2x icons"></i>
 	 			</div>
 	 			<div class="col-sm-10">
 	 				<p class="phone sidetitles ">{{ $num_telephone }}</p>
 	 			</div>
 	 		</div>

 	 		<div class="row">
 	 			<div class="col-sm-2">
 	 				<i class="fa fa-envelope fa-2x icons"></i>
 	 			</div>
 	 			<div class="col-sm-10">
 	 				<p ><a href="#" class="email sidetitles" >{{ $email }}</a></p>

 	 			</div>
 	 		</div>
			
		

			</section>
			

			<div class="clear">&nbsp;</div>
		<h4 class=" sidetitles " style="text-decoration: underline;"><em>LANGUES</em></h4>
		<div class="row" style="color: #E4E4E6;">

			<div class="col-sm-11 Loisirs">
			 @foreach($les_langues as $lan) 
				<div class="row">
			   		<div class="col-sm-12">
			   			{{ $lan['les_langue'] }}
			   		</div>
			   		
			   	</div>
                    @endforeach
			   	
			   	
				
			</div>

			<div class="col-sm-1"></div>
		</div>


			<div class="clear">&nbsp;</div>
		<h4 class=" sidetitles " style="text-decoration: underline;"><em>CENTRES D'INTERET</em></h4>
		<br>
		<div class="row" style="color: #E4E4E6;">
			
			<div class="col-sm-11 Loisirs">
			@foreach($centre_interet as $ci) 
						<div class="row">
			   		<div class="col-sm-12">
			   			{{ $ci }}
			   		</div>
			   		
			   	</div>
                    @endforeach
			   	
			   	
				
			</div>

			<div class="col-sm-1"></div>
		</div>
		<div class="clear">&nbsp;</div>
			<h4 class=" sidetitles outilsinfo" style="text-decoration: underline;"><em>OUTILS INFORMATIQUES</em></h4>
		<div class="row" style="color: #E4E4E6;">
			<div class="col-sm-1"></div>
			<div class="col-sm-10 competences sidetitles">

			@foreach($outils_info as $outils) 
						<div class="row">
			   		<div class="col-sm-9">
			   			<span>{{ $outils['outil_informatique'] }}</span>
			   		</div>
			   		@if($outils['name_niveau_informatique'] == 'Débutant')
					<div class="col-sm-3 pourcentages">
			   			<b>25 %</b>
			   		</div>
					@elseif($outils['name_niveau_informatique'] == 'Intermédiaire'  )
                     <div class="col-sm-3 pourcentages">
			   			<b>50 %</b>
			   		</div>
					@elseif($outils['name_niveau_informatique'] == 'Expert'  )
                     <div class="col-sm-3 pourcentages">
			   			<b>100 %</b>
			   		</div>
					@endif
			   		
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
			<div class="col-sm-1"></div>
		</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
		</div>

	<div class="col-sm-7" style="margin-left: 15px;">
			<div class="clear">&nbsp;</div>
						<!-- EXPERIENCE PRO -->
	<section class="summary">
			<div class="row">
		
		<div class="col-sm-12" >
			<div class="row">
						<div class="col-sm-11"><h4 class="titles"><em><b>EXPERIENCES PROFESSIONNELLES</b></em></h4></div>
						<div class="col-sm-1">
						<i class="fa fa-suitcase fa-3x icons"></i>
					</div>
					</div>
			<br>
			 
				
                   
            @foreach($experiencepro as $exppro)        
			<div class="section">
				
				<div style="color: #3E3E40;"><b>{{$exppro['nom_entreprise'] }} -- </b><b>{{$exppro['b_date'] }} - @if($exppro['e_date'] != '' )  {{$exppro['e_date'] }} @else {{ "Aujourd'hui" }}  @endif</b></div>
				<div class="top titles"><b>{{$exppro['titre_poste'] }} </b></div>
			
			
			<div>
			{!! $exppro['editor_exp_pro']  !!} 
			</div>
			</div>
			<br>
			 @endforeach
			
	
		</div>
	</section>

			<!-- /EXPERIENCE PRO -->
<div class="clear">&nbsp;</div>
			<!-- FORMATION -->
	<section class="summary">
			<div class="row">
		
		<div class="col-sm-12" >
			<div class="row">
						<div class="col-sm-11"><h4 class="titles"><em><b>FORMATIONS</b></em></h4></div>
						<div class="col-sm-1">
						<i class="fa fa-mortar-board fa-3x icons"></i>
					</div>
				</div>
			<br>
			 @foreach($v_formation as $format) 
			<div class="section">
				
				<div style="color: #3E3E40;"><b>{{$format['nom_instittution'] }} -- </b><b>{{$format['b_date_formation'] }} - @if($format['e_date_formation'] != '' ) {{ $format['e_date_formation'] }} @else {{ "Aujourd'hui" }}  @endif</b></div>
				<div class="top titles"><b>{{$format['formation'] } </b></div>
			
			
			<div>
			{!! $format['editor_formation']  !!} 
			</div>
			</div>
			<br>
			@endforeach
			
			
			
		</div>
		</div>
	</section>

	<!-- /FORMATION -->

<div class="clear">&nbsp;</div>
<!-- BEGIN REFERENCES SECTION -->
	
 			<section id="References">	
 	 			<div class="row">
						<div class="col-sm-11"><h3 class="titles"><em><b>REFERENCES</b></em></h3></div>
						<div class="col-sm-1">
						<i class="fa fa-chain fa-3x icons"></i>
					</div>
				</div>
 	 			<br>
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
<br>
<hr style="background-color: #2D2D2F;height: 1px;">
<br>
<!-- SOCIAL MEDIA -->
<div class="row text-center" >	
	<div class="col-sm-3">
		<p><i class="fa fa-twitter fa-2x icons" ></i></p>
		<b>{{ $link_facebook }}</b>
	</div>

	<div class="col-sm-3">
		<p><i class="fa fa-facebook fa-2x icons" ></i></p>
		<b>{{ $link_facebook }}</b>
	</div>


	<div class="col-sm-3">
	<p><i class="fa fa-linkedin fa-2x icons" ></i></p>
		<b>{{ $link_facebook }}</b>
	</div>

	<div class="col-sm-3">
	<p><i class="fa fa-instagram fa-2x icons" ></i></p>
		<b>{{ $link_facebook }}</b>
	</div>

</div>
<div class="clear">&nbsp;</div>
<!-- /SOCIAL MEDIA -->
		</div>
	</div>

 </div>




</body>
</html>