  <div class="data-table">
  <div class="table-container">
  <h2> Display categories </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Category Id</th>
      <th>Category Name</th>
      <th>Category U R I</th>
      <th>Category Created At</th>
      <th>Category Updated At</th>
      <th>Category Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['categories'] as $key => $categories): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $categories['categoryId'] ?></td>
<td><?= $categories['categoryName'] ?></td>
<td><?= $categories['categoryURI'] ?></td>
<td><?= $categories['categoryCreatedAt'] ?></td>
<td><?= $categories['categoryUpdatedAt'] ?></td>
<td><?= $categories['categoryIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/categories" class="cancel-btn">back</a></aside> </div>
</div>
</div>
