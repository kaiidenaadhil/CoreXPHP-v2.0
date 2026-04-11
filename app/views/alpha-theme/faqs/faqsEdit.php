  <div class="data-table">
  <div class="table-container">
  <h2> Edit  faqs </h2>
<?php foreach ($params["faqs"] as $key => $faqs) : ?>
  <form method="post" action="<?= ROOT ?>/admin/faqs/<?= $faqs['faqIdentify'] ?>/modify">
  <div>
    <label for="question">Question</label>
    <input type="text" name="question" value="<?= $faqs["question"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/faqs" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
