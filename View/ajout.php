<?php 


?>

<script src="../Js/jquery.3.3.1.js"></script>
<div class="align-items-center d-flex flex-column  justify-content-center" style="height: 100vh" >
    <h1 id="titre" class=" text-center ">Saisie tour</h1> 
        <div class="col-6 ">
            <form method="POST"  action="Controller/LoginController.php">
                <div class="row w-100">
                    <label  >Date</label>
                    <input type="date" class="form-control " aria-label="Date">
                </div>
                <div class="tour1">
                    <div class="row w-100">
                        <label >Heure de depart</label>
                        <input type="time" class="form-control "  aria-label="Heure">
                    </div>
                    <div class="row w-100">
                        <label >Lieu de depart</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="Colisée">Colisée</option>
                            <option value="La city">La city</option>
                            <option value="Tana Water Front">Tana Water Front</option>
                            <option value="Mahazoarivo">Mahazoarivo</option>
                        </select>
                    </div>
                </div>
                <div class="tour2 d-none">
                    <div class="row w-100">
                        <label >Deuxieme Heure de depart</label>
                        <input type="time" class="form-control "  aria-label="Heure">
                    </div>
                    <div class="row w-100">
                        <label >Lieu de depart</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="Colisée">Colisée</option>
                            <option value="La city">La city</option>
                            <option value="Tana Water Front">Tana Water Front</option>
                            <option value="Mahazoarivo">Mahazoarivo</option>
                        </select>
                    </div>
                </div>
                <div class="tour3 d-none">
                    <div class="row w-100">
                        <label >Troisieme Heure de depart</label>
                        <input type="time" class="form-control "  aria-label="Heure">
                    </div>
                    <div class="row w-100">
                        <label >Lieu de depart</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="Colisée">Colisée</option>
                            <option value="La city">La city</option>
                            <option value="Tana Water Front">Tana Water Front</option>
                            <option value="Mahazoarivo">Mahazoarivo</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success" type="submit"><i class="fa fa-save" aria-hidden="true"></i> Enregistrer</button>
            </form>
            <button id="plus" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </button>
            <button id="moins" class="btn btn-sm btn-warning">
                    <i class="fa fa-minus-circle" aria-hidden="true"></i>
            </button>
        </div>
</div>
<script>
    $(document).ready(function()
    {
        var nbr = 1;


        $("#plus").click(function()
        {
            nbr= nbr+1;
            if(nbr>3)
            {
                nbr= nbr-1;
                alert("Nombre maximum atteint");
            }
            else{
            $(".tour"+nbr).removeClass("d-none");
         }
        });

        $("#moins").click(function()
        {
            nbr= nbr-1;
            $(".tour"+nbr).addClass("d-none");
        });
    });
</script>