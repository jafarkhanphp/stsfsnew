<tbody>
  <tr class="odd gradeX">
        <td><?php echo CHtml::encode($data->no_pin); ?></td><td><?php echo $data->pin_pkg_amt; ?></td>
        <td><?php echo CHtml::encode(Packages::model()->getPackageName($data->pkg_id)); ?></td>
        <td><?php echo date('d F Y', strtotime($data->created_date)); ?></td>
</tr>
</tbody>
 


