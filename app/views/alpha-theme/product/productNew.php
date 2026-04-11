  <div class="data-table">
    <div class="data-info">
      <h3>Add a product</h3> <a href="<?= ROOT ?>/admin/product" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="productName">Product Name</label>
          <input type="text" name="productName">
        </div>
        <div>
          <label for="price">Price</label>
          <input type="number" name="price">
        </div>
        <div>
          <label for="stockQuantity">Stock Quantity</label>
          <input type="number" name="stockQuantity">
        </div>
        <div>
          <label for="productType">Product Type</label>
          <input type="text" name="productType">
        </div>
        <div>
          <label for="status">Status</label>
          <input type="text" name="status">
        </div>
        <div>
          <label for="categoryId">Category Id</label>
          <input type="number" name="categoryId">
        </div>
        <div>
          <label for="productImage">Product Image</label>
          <input type="text" name="productImage">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/product/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
