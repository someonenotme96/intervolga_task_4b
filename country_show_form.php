<div class="container">
<form action="index.php" method="POST" class="country">
<table id="first" class="table1" cellspacing="0"> 
        <thead> 
            <tr class="rows">
                <th>ID страны</th>
                <th>Название</th>
                <th>Президент</th>
                <th>Столица</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($db->GetAll() as $row1){?>
            <tr class="rows">
                <td><?php echo htmlspecialchars($row1['country_id']);?></td>
                <td><?php echo htmlspecialchars($row1['country_name']);?></td>
                <td><?php echo htmlspecialchars($row1['president']);?></td>
                <td><?php echo htmlspecialchars($row1['capital']);?></td>
            </tr>
            <?php }?>
        </tbody>
</table>  
</form>
</div>