<div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px;">
        <thead>
        <tr>
            
            <th>Unidad</th>
            <th>Horas</th>
            <th>Proposito</th>
            <th>OA</th>
            <th>Ojetivos</th>
            <th>Inidcadores</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          
            <th>Unidad</th>
            <th>Horas</th>
            <th>Proposito</th>
            <th>OA</th>
            <th>Ojetivos</th>
            <th>Inidcadores</th>
          </tr>
        </tfoot>
        
        <tbody>
        <?php $resultado = mysqli_query($conexion, $ejes);
        
        while($row=mysqli_fetch_assoc($resultado)){ ?>
          <tr>
          
            <td><?php echo $row["unidad"];?></td>
            <td><?php echo $row["horas"];?></td>
            <td width="50%"><?php echo $row["proposito"];?></td>
            <td><?php echo $row["leccion"];?></td>
            <td><?php echo $row["objetivos"];?></td>
            <td width="100%"><?php echo $row["inidcadores"];?></td>
          </tr>
          <?php } ?> 
        </tbody>
      
      </table>
    </div>
