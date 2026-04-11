  <div class="data-table">
  <div class="table-container">
  <h2> Display faqs </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Faq Id</th>
      <th>Question</th>
      <th>Answer</th>
      <th>Faq Created At</th>
      <th>Faq Updated At</th>
      <th>Faq Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['faqs'] as $key => $faqs): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $faqs['faqId'] ?></td>
<td><?= $faqs['question'] ?></td>
<td><?= $faqs['answer'] ?></td>
<td><?= $faqs['faqCreatedAt'] ?></td>
<td><?= $faqs['faqUpdatedAt'] ?></td>
<td><?= $faqs['faqIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/faqs" class="cancel-btn">back</a></aside> </div>
</div>
</div>
