@extends('layouts.layout')
  @section("title")
  @parent
  STAGE ENEAM
  @endsection("title")
  @section("body")
  @parent


    <style>
     .activate {
          color: green;
        }
    
        .active {
          color: white;
        }
    
        .new {
          color: green;
        }
    
        .tree {
          height: 100px;
    
        }
    
        .to {
          height: 20px;
        }
    
        .bg {
          color: green;
        }
    
        .desc {
          height: 200px;
    
        }
    
        .forme {
          border-bottom: 1px solid black;
          border-top: none;
          border-right: none;
          border-left: none;
    
        }
    
    
        #bof {
          color: white;
        }
    
        @media only screen and (min-width:700px) {
          #image_formulaire {
            margin-top: 30%;
            margin-left: 40%;
          }
        }
    
        @media only screen and (max-width:700px) {
          #image_formulaire {
            margin-top: 0%;
            margin-left: 0%;
          }
    
        }
        @media only screen and (max-width:700px) {
      #image {
           
            visibility: hidden;
          }
    
        }
    
    
        @media only screen and (max-width:400px) {
          #image_formulaire {
            margin-top: 0%;
            margin-left: 0%;
            width: 100%;
            text-align: center;
          }
          
    
        }
    
        @media only screen and (max-width:700px) {
          #attestation {
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: wrap-reverse;
            text-align: left;
          }
    
    
        }
       
      </style>
</head>
<body>
    <div class="container">

        <div class="row">
          <h2 class="form-title text-center mt-3 fw-bold" style="color:#1a0351;">Dépôt de mémoire</h2>
          <div class="col-lg-6 col-12 centre">
            <form method="POST" class="register-form" id="form" onsubmit="return valider()" name="form" action="{{ @url("/stage/report/store") }}" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for="mat1"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" class="form-control forme" name="mat1" id="mat1" placeholder="Matricule 1"
                  style="border-top: none;  border-left: none; border-right: none; border-bottom: 1px solid black; "
                  required />
              </div>
              <div class="form-group">
                <label for="mat2"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" class="form-control forme" name="mat2" id="mat2" placeholder="Matricule 2"  />
              </div>
              <div class="form-group">
                <label for="enterprise"><i class="zmdi zmdi-account material-icons-name"></i></label>
                <input type="text" class="form-control forme" name="enterprise" id="enterprise" placeholder="Entreprise où vous avez effectué votre stage" required />
              </div>
              <div class="form-group">
                <label for="email"><i class="zmdi zmdi-email"></i></label>
                <input type="email" class="form-control forme" name="email" id="email" placeholder="Email du binôme"
                  required />
              </div>
              <div class="form-group">
                <label for="contact"><i class="zmdi zmdi-lock-outline"></i></label>
                <input type="text" class="form-control forme" name="contact" id="contact" placeholder="Contact du binôme" required />
              </div>
              <div class="form-group mt-3">
    
    
                <select id="filiere" name="filiere" class="form-select forme"
                  style="border-bottom: 1px solid black; border-top: none; border-right: none; border-left: none;" required>
                  <option selected>Filière</option>
                  <option value="IG"> Informatique de Gestion
                  </option>
                  <option value="Plan">Planification</option>
                  <option value="stat"> Statistique
                  </option>
                  <option value="GFC">Gestion Financière et Comptable</option>
                  <option value="GBA"> Gestion des Banques et Assurance
                  </option>
                  <option value="GTL">Gestion des Transports et Logistiques</option>
                  <option value="GRH"> Gestion des Ressources Humaines
                  </option>
                  <option value="GC">Gestion Commerciale</option>
    
                </select>
              </div> 
              <div class="form-group">
                <label for="report_master"><i class="zmdi zmdi-lock-outline"></i></label>
                <input type="text" class="form-control forme" name="report_master" id="report_master" placeholder="Qui a été votre maître de mémoire?" required />
              </div>
              <div class="form-group mt-3">
                <label for="formFileMultiple" class="form-label"><i class="zmdi zmdi-lock-outline"></i></label>
                <input class="form-control " type="file" id="formFileMultiple" name="report"
                  style="border: 1px solid black;" multiple required>
              </div>
              <br><br>
    
              <div class="row d-flex">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary" name="submit" >Envoyer</button>
                </div>
              <div class="col-6">

                  
                <button type="reset"    class="btn btn-danger" name="delete" id="supprimer">Effacer</button>
              </div>
          </div>
            </form>
            <script>
              
            </script>
          </div>
    <div class="col-lg-6 col-12 ">
        <img src="{{ @asset("assets/img/S6.jpg") }}" alt="" width="100%" height="100%" id="image">
    </div>
        </div>
      </div>
      @endsection("body")