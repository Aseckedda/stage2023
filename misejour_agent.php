<?php
session_start();
require("connexion.php");
if (isset($_GET['codemodi']))
{
    $_SESSION['id_agent']=$_GET['codemodi'];
    $codemodi=$_GET['codemodi'];
    $req1 = $pdo->prepare('select * from agent where id_agent=:codemodification');
    $req1->bindValue(':codemodification',$codemodi);
    $req1->execute();
    $resultat = $req1->fetch();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Application projet</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
      <style>
   .conteneur {
    max-width: 600px;
    margin: 0 auto;
    padding: 50px;
    background-color: #ffffff;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }
  .conteneur header{
	text-align:center;
	padding:10px;
    margin-top:0;
	background-color:#19248a;
	color:#F1FAEE;
	font:16pt arial;
}
  form{
	margin:auto;
	padding-top:10px;
	text-align:left;
	width:400px;
    
}

 
  label {
    display: block;
    margin-bottom: 5px;
    color: #555;
  }

  input[type="text"]
  {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    background-color: #f9f9f9;

  }


  input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color:#19248a;
    color: #fff;
    border-radius: 15px;
    cursor: pointer;
    font-size: 18px;
  }

  input[type="submit"]:hover {
    background-color: #555;
  }
 
    </style>


  </head>
  <body>
  

<div class="wrapper">


        <div class="body-overlay"></div>
		
		<!-------------------------sidebar------------>
		     <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/images_adm.png" class="img-fluid"/><span>ADM Value</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="index.php" class="dashboard"><i class="material-icons">dashboard</i>
					<span>Tableau de bord</span></a>
                </li>
		

                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
                    class="dropdown-toggle">
					<i class="material-icons">extension</i><span>Agents</a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                    <h6 class="collapse-header">Agents</h6>
                        <li>
                            <a href="ajouter_agent.php">Ajouter agent</a>
                        </li>
                        <li>
                            <a href="liste_agent.php">Liste agent</a>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">apps</i><span>Projets</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                    <h6 class="collapse-header">Projet</h6>
                        <li>
                            <a href="ajouter_projet.php">Ajouter projet</a>
                        </li>
                        <li>
                            <a href="liste.php">Liste projet</a>
                        </li>
                    </ul>
                </li>
				
							  <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">extension</i><span>Affectation</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                        <li>
                            <a href="affecter_projet.php">Affecter un agent</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">extension</i><span>Profile</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                        <li>
                            <a href="profil.html">Profile agent</a>
                        </li>
                    </ul>
				  <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">content_copy</i><span>Pages</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li>
                            <a href="inscription.php">Création de compte </a>
                        </li>
                        <li>
                            <a href="login.php">Connexion</a>
                        </li>
                        <li>
                            <a href="deconnexion.php">Déconnexion</a>
                        </li>
                    </ul>
                </li>

           
        </nav>
		
		
		
		
		<!--------page-content---------------->
		
		<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 
                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" 
								  placeholder="Search">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" 
									id="button-addon2">Rechercher</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
							 <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">notifications</span>
								   <span class="notification">4</span>
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Vous avez 5 messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">question_answer</span>

								</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
								<img src="img/ada.jpeg" style="width:40px; border-radius:50%;"/>
								<span class="xp-user-live"></span>
								</a>
								<ul class="dropdown-menu small-menu">
                                    <li>
                                        <a href="profil.html">
										  <span class="material-icons">
person_outline
</span>Profile

										</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">
settings
</span>Parametre</a>
                                    </li>
                                    <li>
                                        <a href="deconnexion.php"><span class="material-icons">
logout</span>Deconnexion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    
               
            </nav>
							
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
		     <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Système de gestion d'affectation de projet</h4>  
                               
            </div>
			
		   </div>
		   
		   
		   <!--------main-content------------->
		   
		   <div class="main-content">
			  <div class="row">
				<div class="col-md-12">
				<div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2"> Affecter un agent</h2>
        </div>  <br><br>
        </div>
        </div>
<div class="conteneur">	
		<header>
			 Affecter un agent sur un nouveau projet
		</header>
		<form name="form1" method="post" action="executermisejour_agent.php" >
			<div class="label">Id</div>
			<input type="text" name="t1" value="<?php echo $resultat['id_agent'];?>"required/>
			<div class="label">Nom</div>
			<input type="text" name="t2"  value="<?php echo $resultat['nom'];?>"required />
			<div class="label">Prénom</div>
			<input type="text" name="t3" value="<?php echo $resultat['prenom'];?>"required/>
			<div class="label">Email</div>
			<input type="text" name="t4" value="<?php echo $resultat['email'];?>"required/>
            <div class="label">Expérience</div>
			<input type="text" name="t5" value="<?php echo $resultat['experience'];?>"required/>

            <div class="label">Projet</div>
            <input type="text" name="t6" value="<?php echo $resultat['projet'];?>"required/>
			<div class="label">Compétence</div>
			<input type="text" name="t7" value="<?php echo $resultat['competence'];?>"required/>
			<input type="submit" name="valider" value="Affecter" />

		</form>
</div>
 

    
 

<!-- Edit Modal HTML -->

			 
			 <!---footer---->
			 
			 
		</div>
		
		<footer class="footer">
			    <div class="container-fluid">
				  <div class="footer-in">
                    <p class="mb-0">Suivi projet 2023</p>
                </div>
				</div>
			 </footer>
</div>
</div>


<!----------html code compleate----------->








  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
  
  



  </body>
  
  </html>


