<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetitorsItems
 *
 * @ORM\Table(name="competitors_items")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompetitorsItemsRepository")
 */
class CompetitorsItems
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="item", type="string", length=255)
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Competitors")
     * @ORM\JoinColumn(name="competitor_id", referencedColumnName="id")
     */
    private $competitor;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Service")
     * @ORM\JoinTable(name="services_items")
     */
    private $service;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set item
     *
     * @param string $item
     *
     * @return CompetitorsItems
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return CompetitorsItems
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->service = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add service
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return CompetitorsItems
     */
    public function addService(\AppBundle\Entity\Service $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \AppBundle\Entity\Service $service
     */
    public function removeService(\AppBundle\Entity\Service $service)
    {
        $this->service->removeElement($service);
    }

    /**
     * Get service
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set competitor
     *
     * @param \AppBundle\Entity\Competitors $competitor
     *
     * @return CompetitorsItems
     */
    public function setCompetitor(\AppBundle\Entity\Competitors $competitor = null)
    {
        $this->competitor = $competitor;

        return $this;
    }

    /**
     * Get competitor
     *
     * @return \AppBundle\Entity\Competitors
     */
    public function getCompetitor()
    {
        return $this->competitor;
    }
}
