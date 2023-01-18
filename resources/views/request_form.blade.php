<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite([
        'resources/assets/vendor/bootstrap/css/bootstrap.min.css','assets/vendor/aos/aos.css',
        'resources/assets/vendor/bootstrap/css/bootstrap-icons.css'])
    <style>
        .titre-form{
            font-weight: 800;
            color: #4d4643;
        }
        .form-container{
            height: 70vh;
            border: 2px solid brown;
        }
        .field-group{
            width:300px;
            position: relative;
            padding-top: 15px;
        }
        .input-field{
            width: 100%;
            outline: 0;
            border: 0;
            border-radius: 0;
            border-bottom: 2px solid #5e5d5d;
            padding: 10px 0;
            background: transparent;
            font-size: 1em;
            color:#2c2c2cce;
            transition: 0.3s ease;
        }
        .input-label{
            display: block;
            position: absolute;
            top: 0;
            font-size: 1em;
            color: #999999;
            text-transform: capitalize;
            transition: 0.3s ease;
        }
        .input-field::placeholder{
            color: transparent;
        }
        .input-field:placeholder-shown ~ .input-label{
            font-size: 1em;
            top: 20px;
        }
        .input-field:focus{
            border-image: linear-gradient(to right, #03ef79, #7aece3);
            border-image-slice:1;
        }
        .input-field:focus ~ .input-label{
            display: block;
            position: absolute;
            top:0;
            font-size: 0.9em;
            color:#03ef79;
        }
        .submit-field{
            width: 300px;
            position: relative;
        }
        .submit-field .back-btn{
            border: 0;
            outline: none;
            transition: 0.3s ease-in-out;
        }
        .submit-field .back-btn:hover{
            background-color:  #6afab2;
            color: #ffff;
        }
        .submit-field .back-btn:focus{
            background-color: linear-gradient(to right, #03ef79, #7aece3);
            color: white;
        }
        
        .submit-field .btn{
            width: 49%;
           
        }
        .group-notice{
            width: 300px;
        }
        .input-notice{
            font-size: 0.8rem;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="d-flex py-2 justify-content-center">
        <div class="titre-form fs-3">
            Faites votre demande de stage
        </div>
    </div>
    <div class="w-100">
        <div class="form-block-1" data-aos="fade-up">
            <div class="d-flex justify-content-center py-1">
                <span class="fw-bolder titre-form">Pour qui voulez vous faire la demande?</span>
            </div>
            <div class="d-flex justify-content-center">
                <form class="form-group d-flex">
                    <div class="form-check px-3">
                        <input type="radio" class="form-check-input" name="monome" id="monome">
                        <label class="form-check-label" for="monome">Monôme</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="monome" id="binome">
                        <label class="form-check-label" for="binome">Binôme</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-block-2 d-none" data-aos="fade-up">
            <form name="form0" method="POST" class="needs-validation" action="{{@url('stage/request/store')}}">
                @csrf
                <div class="d-flex justify-content-center mb-3">
                    <div class="field-group">
                        <input type="text" required class=" input-field" id="monome-matri" value="{{old("mat1")}}" name="mat1" placeholder="Matricule">
                        <label class="input-label" for="monome-matri">
                            Matricule
                        </label>
                    @if(old("binome")==0)
                        @error('mat1')
                            <div class="invalid-feedback" id="error">
                                {{$message}}
                            </div>
                        @enderror
                    @endif                    
                    </div>

                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="group-notice">
                        <span class="input-notice w-100 text-danger d-none">
                            *Ex : 21189900
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <div class="field-group">
                        <input type="email" required class=" input-field" id="monome-email" value="{{old("mail1")}}" name="mail1" placeholder="Email">
                        <label class="input-label" for="monome-email">Email</label>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="group-notice">
                        <span class="input-notice w-100 text-danger d-none">
                            *Ex: johndoe@gmail.com
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <div class="hidden">
                        <input style="visibility:hidden" type="text" name="binome" value="0">
                    </div>
                    <div class="submit-field">
                            <a href="#" class="btn back-btn shadow-sm"><i class="bi bi-arrow-left"></i> Retour</a>
                            <input type="submit" class="btn btn-secondary" value="Soumettre" name="submit">
                    </div>
                </div>
            </form>
           
        </div>
        <div class="form-block-3 d-none" data-aos="fade-up">
            <form name="form1" class="needs-validation" method="POST" action="{{@url('stage/request/store')}}">
            @csrf
                <div class="d-flex justify-content-center mb-1">
                    <div class="field-group form-check">
                        <input type="text" required class=" input-field" id="binome-matri1" value="{{old("mat1")}}" name="mat1" placeholder="Matricule 1">
                        <label class="input-label" for="binome-matri1">Matricule 1</label>
                        @if(old("binome")==1)
                            @error('mat1')
                                <div class="invalid-feedback" id="error">
                                    {{$message}}
                                </div>
                            @enderror
                        @endif
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="group-notice">
                        <span class="input-notice w-100 text-danger d-none">
                            *Ex: 21189900
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <div class="field-group form-check">
                        <input type="text" required class=" input-field" id="binome-matri2" value="{{old("mat2")}}" name="mat2" placeholder="Matricule 2">
                        <label class="input-label" for="binome-matri2">Matricule 2</label>
                        @if(old("binome")==1)
                            @error('mat2')
                                <div class="invalid-feedback" id="error">
                                    {{$message}}
                                </div>
                            @enderror
                        @endif
                    
                    </div>
                    
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="group-notice">
                        <span class="input-notice w-100 text-danger d-none">
                            *Ex: 21189900
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <div class="field-group form-check">
                        <input type="email" required class=" input-field" id="binome-email1" value="{{old("mail1")}}" name="mail1" placeholder="Email 1">
                        <label class="input-label" for="monome-email1">Email 1</label>
                        @if(old("binome")==1)
                            @error('mail1')
                                <div class="invalid-feedback" id="error">
                                    {{$message}}
                                </div>
                            @enderror
                        @endif
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="group-notice">
                        <span class="input-notice w-100 text-danger d-none">
                            *Ex: johndoe@gmail.com
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <div class="field-group form-check">
                        <input type="email" class=" input-field" id="binome-email2" value="{{old("mail2")}}" name="mail2" placeholder="Email 2">
                        <label class="input-label" for="monome-email2">Email 2 (facultatif)</label>
                        @if(old("binome")==1)
                            @error('mail2')
                                <div class="invalid-feedback" id="error">
                                    {{$message}}
                                </div>
                            @enderror
                        @endif
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <div class="group-notice">
                        <span class="input-notice w-100 d-none">
                            
                        </span>
                    </div>
                </div>
                <div class="hidden">
                    <input style="visibility:hidden" type="text" name="binome" value="1">
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <div class="submit-field">
                        <a href="#" class="btn back-btn shadow-sm"><i class="bi bi-arrow-left"></i> Retour</a>
                        <input type="submit" class="btn btn-secondary" value="Soumettre" name="submit">
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    @vite([
        'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/assets/vendor/aos.js'])
    <script>
        AOS.init()
    </script>
    <script>
        
        let monome = document.getElementById('monome')
        let binome = document.getElementById('binome')
        let form_block_1 = document.querySelector(".form-block-1")
        let form_block_2 = document.querySelector(".form-block-2")
        let form_block_3 = document.querySelector(".form-block-3")
        let return_a1 = document.querySelector(".form-block-2 a")
        let body = document.querySelector("body")
        let return_a2 = document.querySelector(".form-block-3 a")
        let invalid2=document.querySelectorAll(".form-block-2 .invalid-feedback");
        let invalid3=document.querySelectorAll(".form-block-3 .invalid-feedback");
     
            

            if(invalid2.length>0)
            {
                form_block_1.classList.add("d-none")
                form_block_2.classList.remove('d-none')
            }else if(invalid3.length>0)
            {
                form_block_1.classList.add("d-none")
                form_block_3.classList.remove('d-none')
            }
        
        
        monome.addEventListener('input', function(){
            
            form_block_1.classList.add("d-none")
            form_block_2.classList.remove("d-none")
            
        })
        
        binome.addEventListener('input',function(){
            form_block_1.classList.add("d-none")
            form_block_3.classList.remove("d-none")
        
        })

        return_a1.addEventListener("click", function(){
            form_block_1.classList.remove("d-none")
            form_block_2.classList.add('d-none')
        })
        return_a2.addEventListener("click", function(){
            form_block_1.classList.remove("d-none")
            form_block_3.classList.add('d-none')
        })
        let inputs = document.querySelectorAll(".input-field")
        console.log(inputs)
        let notices  = document.querySelectorAll(".input-notice")
        for(let i=0, c = inputs.length; i<c; i++){
            inputs[i].addEventListener('change', function(){
                
                notices[i].classList.remove('d-none')
            })
        }     
               
    </script>
</body>
</html>