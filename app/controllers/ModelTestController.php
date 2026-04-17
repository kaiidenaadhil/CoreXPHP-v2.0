<?php

class ModelTestController extends Controller
{
    // ---------------------------------------------------------
    // 🥇 CORE: create + find
    // ---------------------------------------------------------
    public function testCreateFind()
    {
        try {
            $product = ProductModel::create([
                'vendor_id' => 5,
                'title' => 'Core Test Product',
                'price' => 20,
                'stock' => 10
            ]);

            $found = ProductModel::find($product->id);

            echo "<h2>✅ create + find</h2>";
            print_r($found->toArray());

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    // ---------------------------------------------------------
    // 🥇 save + update
    // ---------------------------------------------------------
    public function testSaveUpdate()
    {
        try {
            $user = UserModel::find(7);

            $user->name = 'Updated by Core Test';
            $user->save();

            echo "<h2>✅ save/update</h2>";
            print_r($user->toArray());

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    // ---------------------------------------------------------
    // 🥇 delete
    // ---------------------------------------------------------
    public function testDelete()
    {
        try {
            $product = ProductModel::create([
                'vendor_id' => 5,
                'title' => 'Temp Delete',
                'price' => 5
            ]);

            $id = $product->id;
            $product->delete();

            echo "<h2>✅ delete</h2>";
            echo "Deleted ID: $id";

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    // ---------------------------------------------------------
    // 🥇 findAll
    // ---------------------------------------------------------
    public function testFindAll()
    {
        try {
            $model = new ProductModel();
            $data = $model->findAll();

            echo "<h2>✅ findAll</h2>";
            print_r($data);

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    // ---------------------------------------------------------
    // 🥈 query()
    // ---------------------------------------------------------
    public function testQuery()
    {
        try {
            $data = ProductModel::query()
                        ->where('price', '>', 10)
                        ->get();

            echo "<h2>✅ query()</h2>";
            print_r($data);

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    // ---------------------------------------------------------
    // 🥈 __callStatic()
    // ---------------------------------------------------------
    public function testCallStatic()
    {
        try {
            $data = ProductModel::where('stock', '>', 0)->get();

            echo "<h2>✅ __callStatic</h2>";
            print_r($data);

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    // ---------------------------------------------------------
    // 🥈 fill()
    // ---------------------------------------------------------
    public function testFill()
    {
        try {
            $user = new UserModel();

            $user->fill([
                'name' => 'Fill User',
                'email' => 'fill@test.com',
                'id' => 999 // should be ignored
            ]);

            echo "<h2>✅ fill()</h2>";
            print_r($user->toArray());

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    // ---------------------------------------------------------
    // 🥉 Relationships
    // ---------------------------------------------------------
    public function testRelationships()
    {
        try {
            // hasMany
            $user = UserModel::find(5);
            $products = $user->hasMany('ProductModel', 'vendor_id');

            echo "<h2>✅ hasMany (User → Products)</h2>";
            print_r($products);

            // belongsTo
            $product = ProductModel::find(1);
            $vendor = $product->belongsTo('UserModel', 'vendor_id');

            echo "<h2>✅ belongsTo (Product → Vendor)</h2>";
            print_r($vendor);

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    // ---------------------------------------------------------
    // 🥉 hasOne (extra check)
    // ---------------------------------------------------------
    public function testHasOne()
    {
        try {
            $user = UserModel::find(5);

            // assuming one product for testing
            $product = $user->hasOne('ProductModel', 'vendor_id');

            echo "<h2>✅ hasOne</h2>";
            print_r($product);

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    // ---------------------------------------------------------
    // ⚙️ OPTIONAL truncate
    // ---------------------------------------------------------
    public function testTruncate()
    {
        try {
            ProductModel::truncate();

            echo "<h2>⚠️ truncate</h2>";
            echo "Products table cleared!";

        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }
}