<div class="dashboard">
  <div class="top-row">
    <h2>Casestudies Details</h2>
    <a href="<?= ROOT ?>/admin/casestudies" class="btn secondary">Back</a>
  </div>

  <?php $casestudy = $params["casestudy"] ?? null; ?>
  <?php if ($casestudy): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Case Study Id</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->caseStudyId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Title</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->title ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Slug</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->slug ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Client Name</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->clientName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Industry</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->industry ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Summary</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->summary ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Challenges</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->challenges ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Solution</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->solution ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Results</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->results ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Content</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->content ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Author Id</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->authorId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Is Published</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->isPublished ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Published At</div>
        <div class="detail-value"><?= strtotime($casestudy->publishedAt) ? date("d M y, H:i", strtotime($casestudy->publishedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Casestudy Created At</div>
        <div class="detail-value"><?= strtotime($casestudy->casestudyCreatedAt) ? date("d M y, H:i", strtotime($casestudy->casestudyCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Casestudy Updated At</div>
        <div class="detail-value"><?= strtotime($casestudy->casestudyUpdatedAt) ? date("d M y, H:i", strtotime($casestudy->casestudyUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Casestudy Identify</div>
        <div class="detail-value"><?= htmlspecialchars($casestudy->casestudyIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/casestudies/<?= $casestudy->casestudyIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/casestudies/<?= $casestudy->casestudyIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
