<?php

namespace KTB\CrudBundle\Controller;

use KTB\CrudBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

# Use to convert data from request
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

# Use to fetch parameters if param_fetcher_listener is true
# use FOS\RestBundle\Request\ParamFetcherInterface;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\View;

class ProductController extends Controller
{
	/**
     * @Rest\Get(
     *     path = "/products/{id}",
     *     name = "product_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     */
    public function showAction(Product $product)
    {
        return $product;
    }

    /**
     * @Rest\Post(
     *    path = "/products",
     *    name = "product_create"
     * )
     * @Rest\View(StatusCode = 201)
     * @ParamConverter("product", converter="fos_rest.request_body")
     */
    public function createAction(Product $product)
    {
        $em = $this->getDoctrine()->getManager();

        $em->persist($product);
        $em->flush();

        return $this->view($product, Response::HTTP_CREATED, ['Location' => $this->generateUrl('product_show', ['id' => $product->getId(), UrlGeneratorInterface::ABSOLUTE_URL])]);
    }
}