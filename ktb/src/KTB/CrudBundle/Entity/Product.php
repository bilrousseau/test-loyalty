<?php

namespace KTB\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Product {
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	 /**
     * @ORM\ManyToOne(targetEntity="Brand")
     * @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     */
	private $brandId;

	/**
     * @ORM\Column(type="boolean", options={"default":true})
     */
	private $isActive;

	/**
     * @ORM\Column(type="string", length=255)
     */
	private $name;

	/**
     * @ORM\Column(type="string", length=255)
     */
	private $url;

	/**
     * @ORM\Column(type="text")
     */
	private $description;

	//private $md5;

	public function getId()
	{
		return $this->id;
	}

	public function getBrandId()
	{
		return $this->brandId;
	}

	public function getState()
	{
		return $this->isActive;
	}

	public function setState($isActive)
	{
		$this->isActive = $isActive;
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}
}