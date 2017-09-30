
<html>
    <head>
        <title> Gestions des visiteurs </title>
        <h1> Gestion des visiteurs </h1>
    </head>
        <body>
            
       <select>
           <label>Nom du visiteur</label><input type="text" value="" />
           <input type="button" value="Ajouter le visiteur" onclick=""/> 
       </select>
            
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