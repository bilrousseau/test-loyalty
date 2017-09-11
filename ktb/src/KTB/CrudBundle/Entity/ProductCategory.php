<?php

namespace KTB\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class ProductCategory {
	/**
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
	private $productId;

	/**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
	private $categoryId;

	public function getProductId()
	{
		return $this->productId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}
}