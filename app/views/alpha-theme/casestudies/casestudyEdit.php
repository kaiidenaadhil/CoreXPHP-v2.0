<div class="dashboard">
  <div class="top-row">
    <h2>Edit Casestudies</h2>
    <a href="<?= ROOT ?>/admin/casestudies" class="btn secondary">Back</a>
  </div>
  <?php $casestudies = $params["casestudy"] ?? null; ?>
  <?php if ($casestudies): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/casestudies/<?= $casestudies->casestudyIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" value="<?= $casestudies->title ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" id="slug" name="slug" value="<?= $casestudies->slug ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="clientName">Client Name</label>
      <input type="text" id="clientName" name="clientName" value="<?= $casestudies->clientName ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="industry">Industry</label>
      <input type="text" id="industry" name="industry" value="<?= $casestudies->industry ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="summary">Summary</label>
      <input type="text" id="summary" name="summary" value="<?= $casestudies->summary ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="challenges">Challenges</label>
      <input type="text" id="challenges" name="challenges" value="<?= $casestudies->challenges ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="solution">Solution</label>
      <input type="text" id="solution" name="solution" value="<?= $casestudies->solution ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="results">Results</label>
      <input type="text" id="results" name="results" value="<?= $casestudies->results ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" id="content" name="content" value="<?= $casestudies->content ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="authorId">Author Id</label>
      <input type="number" id="authorId" name="authorId" value="<?= $casestudies->authorId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="isPublished">Is Published</label>
      <input type="checkbox" id="isPublished" name="isPublished" value="1" <?= $casestudies->isPublished ? "checked" : "" ?>>
    </div>
    <div class="form-group">
      <label for="publishedAt">Published At</label>
      <input type="datetime-local" id="publishedAt" name="publishedAt" value="<?= strtotime($casestudies->publishedAt) ? date("Y-m-d\TH:i", strtotime($casestudies->publishedAt)) : "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/casestudies" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
