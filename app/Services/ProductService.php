<?php
namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

	public function getLists($storeId)
	{
		$result = $this->productRepository->getList($storeId);

		return $result;
	}

	public function destroy($id)//產品ID
    {
        \DB::table('products')
            ->where('id',$id)
            ->delete();
    }
}