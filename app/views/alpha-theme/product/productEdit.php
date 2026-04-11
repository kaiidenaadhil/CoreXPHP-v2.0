  <div class="data-table">
  <div class="table-container">
  <h2> Edit  product </h2>
<?php foreach ($params["product"] as $key => $product) : ?>
  <form method="post" action="<?= ROOT ?>/admin/product/<?= $product['productIdentify'] ?>/modify">
  <div>
    <label for="productId">Product Id</label>
    <input type="number" name="productId" value="<?= $product["productId"] ?>">
  </div>
  <div>
    <label for="productName">Product Name</label>
    <input type="text" name="productName" value="<?= $product["productName"] ?>">
  </div>
  <div>
    <label for="price">Price</label>
    <input type="number" name="price" value="<?= $product["price"] ?>">
  </div>
  <div>
    <label for="stockQuantity">Stock Quantity</label>
    <input type="number" name="stockQuantity" value="<?= $product["stockQuantity"] ?>">
  </div>
  <div>
    <label for="productType">Product Type</label>
    <input type="text" name="productType" value="<?= $product["productType"] ?>">
  </div>
  <div>
    <label for="status">Status</label>
    <input type="text" name="status" value="<?= $product["status"] ?>">
  </div>
  <div>
    <label for="categoryId">Category Id</label>
    <input type="number" name="categoryId" value="<?= $product["categoryId"] ?>">
  </div>
  <div>
    <label for="productImage">Product Image</label>
    <input type="text" name="productImage" value="<?= $product["productImage"] ?>">
  </div>
  <div>
    <label for="productIdentify">Product Identify</label>
    <input type="text" name="productIdentify" value="<?= $product["productIdentify"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/product" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
