
<html>
    <head>
        <title> Gestions des visiteurs </title>
        <h1> Gestion des visiteurs </h1>
        <script type=""
    </head>
        <body>
            <br><label><b>Veuillez saisir les coordonnées du visiteurs</b></label></br>
            <br><label>Matricule:</label></br><input type="text" value="" />
            <br><label>Nom:</label></br><input type="text" value="" />
            <br><label>Prénom:</label></br><input type="text" value="" />
            <br><label>Adresse:</label></br><input type="text" value="" />
            <br><label>CP:</label></br><input type="text" value="" />
            <br><label>Ville</label></br><input type="text" value="" />
            <br><label>Date d'embauche</label></br><input type="date" name="dateEmbauche">
       
           
            
            <br><input class="btn btn-primary" type="button" value="Ajouter le visiteur" onclick=""/></br>
       
            
           <select>
        <?php     
        foreach($lesVisiteurs as $vis){
              ?>
              
    <option <?php echo $vis->VIS_NOM." "?><br><?php echo $vis->Vis_PRENOM." "?><?php echo $vis->VIS_ADRESSE." "?><?php echo $vis->VIS_CP." "?><?php echo $vis->VIS_VILLE?></option>
 
        <?php   
        }
        ?>  
           </select>
        
    </body>
</html>